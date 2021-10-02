<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\User;
use App\Models\Groups;
use App\Models\Packages;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\DataOrdenUser;
use App\Models\OrdenPurchases;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Coinbase;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\InversionController;
use Facade\Ignition\Support\Packagist\Package;
use Shakurov\Coinbase\Models\CoinbaseWebhookCall;

class TiendaController extends Controller
{

    public $apis_key_nowpayments;
    public $inversionController;
    public $walletController;

    public function __construct()
    {
        $this->middleware('auth')->except('shop');

        $this->walletController = new WalletController;
        $this->inversionController = new InversionController();
        //$this->apis_key_nowpayments = '56ZHMKJ-3E1MC2ZK5NK025-XSTRFHY';
        $this->apis_key_nowpayments = 'DFR7W73-93J4GW1-M1XE745-M8RPDVD';
         //la tienda funciona pero la api key de nowpaymenst no esta activa
        // con mi api key si funciona YH0WTN1-5T64QQC-MRVZZPE-0DSX41R
    }

    /**
     * Lleva a la vista de la tienda
     *
     * @return void
     */
    public function index()
    {
        try {
            // title
            $packages = Packages::orderBy('id', 'desc')->paginate();

            $invertido = Auth::user()->inversionMasAlta();

            if(isset($invertido)){
                $invertido = $invertido->invertido;
            }

            return view('shop.index', compact('packages', 'invertido'));
        } catch (\Throwable $th) {
            Log::error('Tienda - Index -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

    /**
     * Lleva a la vista de productos de un paquete en especificio
     *
     * @param integer $idgroup
     * @return void
     */
    public function products($idgroup)
    {
        try {
            // title
            //YA NO VA ERA DE HDLR
            $category = Categories::find($idgroup);

            $services = $category->getPackage->where('status', 1);

            return view('shop.products', compact('services'));
        } catch (\Throwable $th) {
            Log::error('Tienda - products -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

    /**
     * Permiete procesar la orden de compra
     *
     * @param Request $request
     * @return void
     */
    public function procesarOrden(Request $request)
    { // dd($request);
        $validate = $request->validate([
            'idproduct' => 'required'
        ]);

        //try {
            if ($validate) {
                $paquete = Packages::find($request->idproduct);
//dd($paquete);
                if(isset(Auth::user()->inversionMasAlta()->invertido)){


                    $inversion = Auth::user()->inversionMasAlta();
                    $pagado = $inversion->invertido;

                    $nuevoInvertido = ($paquete->price - $pagado);
                    $porcentaje = ($nuevoInvertido * 0.03);

                    $total = ($nuevoInvertido + $porcentaje);

//                    $categoria_id = OrdenPurchases::where('categories_id','=', $paquete->categories_id);
                  //  dd($categoria_id);
                    //ACTUALIZAMOS LA INVERSION
                    /*
                    $inversion->invertido += $nuevoInvertido;
                    $inversion->capital += $nuevoInvertido;
                    $inversion->max_ganancia = $inversion->invertido * 2;
                    $inversion->restante += $nuevoInvertido * 2;
                    $inversion->save();
                    */
                    $data = [
                        'iduser' => Auth::id(),
                        'package_id' => $paquete->id,
                        'cantidad' => 1,
                        'total' => $total,
                        'monto' => $nuevoInvertido,
                       // 'categories_id'=>$categoria_id
                    ];

                    //$orden = OrdenPurchases::findOrFail($inversion->orden_id)->update($data);
                    $data['idorden'] = $this->saveOrden($data);
                    $data['descripcion'] = "Upgrade al paquete " . $paquete->name;
                    //$data['inversion_id'] = $inversion->id;

                }else{
                    $porcentaje = 0; //($paquete->price * 0.03);

                    $total = ($paquete->price + $porcentaje);
                    $data = [
                        'iduser' => Auth::id(),
                        'package_id' => $paquete->id,
                        'cantidad' => 1,
                        'total' => $total,
                        'monto' => $paquete->price
                    ];

                    $data['idorden'] = $this->saveOrden($data);
                    $data['descripcion'] = $paquete->description;
                }




                $url = $this->generalUrlOrden($data);
               // dd($url);
                if (!empty($url)) {
                    return redirect($url);

                }else{

                   OrdenPurchases::where('id', $data['idorden'])->delete();
                   return redirect()->back()->with('msj-info', 'Problemas al general la orden, intente mas tarde');
                }


            }
        /*} catch (\Throwable $th) {
            Log::error('Tienda - procesarOrden -> Error: '.$th);
            abort(403, "Ocurrio un error (1) , contacte con el administrador");
        }*/
    }



    /**
     * Notifica el estado de la compra una vez realizada
     *
     * @param string $status
     * @return void
     */
    public function statusProcess($status)
    {
        $type = ($status == 'Completada') ? 'success' : 'danger';
        $msj = 'Compra '.$status;

        return redirect()->route('shop')->with('msj-'.$type, $msj);
    }

    /**
     * Permite recibir el estado de las ordenes
     *
     * @param Request $resquet
     * @return void
     */
    public function ipn(Request $resquet)
    {
        Log::info('ipn prueba ->', $resquet);
    }

    /**
     * Permite general el url para pagar la compra
     *
     * @param array $data
     * @return string
     */
    private function generalUrlOrden($data): string
    {
        //try {
            $headers = [
                'x-api-key: '.$this->apis_key_nowpayments,
                'Content-Type:application/json'
            ];
            $resul = '';
            $curl = curl_init();

            $dataRaw = collect([
                'price_amount' => floatval($data['total'])  ,
                "price_currency" => "usd",
                "order_id" => $data['idorden'],
                'pay_currency' => '',
                "order_description" => $data['descripcion'],
                "ipn_callback_url" => route('shop.ipn'),
                "success_url" => route('shop.proceso.status', 'Completada'),
                "cancel_url" => route('shop.proceso.status', 'Cancelada')
            ]);


            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.nowpayments.io/v1/invoice",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $dataRaw->toJson(),
                CURLOPT_HTTPHEADER => $headers
            ));

                $response = curl_exec($curl);
                $err = curl_error($curl);
              //  dd($dataRaw);

                curl_close($curl);
                if ($err) {
                    Log::error('Tienda - generalUrlOrden -> Error curl: '.$err);
                } else {
                    $response = json_decode($response);
                    // dd($response);

                    $orden = OrdenPurchases::where('id', $data['idorden'])->first();

                    $orden->update(['idtransacion' => $response->id]);

                    $resul = $response->invoice_url;
                }

            return $resul;
        /*} catch (\Throwable $th) {
            Log::error('Tienda - generalUrlOrden -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }*/
    }

    public function cambiar_status(Request $request)
    {
        $orden = OrdenPurchases::findOrFail($request->id);
        $orden->status = $request->status;
        $orden->save();
        // $user = User::findOrFail($orden->iduser);

        // $this->walletController->payAll();

        // if(isset($user->inversionMasAlta()->invertido)){

        //     $inversion = $user->inversionMasAlta();
        //     $pagado = $inversion->invertido;

        //     $nuevoInvertido = ($orden->getPackageOrden->price - $pagado);
        //     $porcentaje = ($nuevoInvertido * 0.03);

        //     $total = ($nuevoInvertido + $porcentaje);
        //     //ACTUALIZAMOS LA INVERSION
        //     $inversion->invertido += $nuevoInvertido;
        //     $inversion->capital += $nuevoInvertido;
        //     if(isset($inversion->max_ganancia) && isset($inversion->invertido)){
        //         $inversion->max_ganancia = $inversion->invertido * 2;
        //         $inversion->restante += $nuevoInvertido * 2;
        //     }
        //     $inversion->package_id = $orden->package_id;
        //     $inversion->save();
        //     $inversion = $inversion->id;

        // }else{

        //     $inversion = $this->registeInversion($request->id);
        // }

        // $orden->inversion_id = $inversion;
        // $orden->save();

        // $user = User::findOrFail($orden->iduser);
        // $user->status = '1';
        // $user->save();

        return redirect()->back()->with('msj-success', 'Orden actualizada exitosamente');
    }

    private function registeInversion($idorden)
    {
        $orden = OrdenPurchases::find($idorden);
        if ($orden != null) {
            $paquete = $orden->getPackageOrden;
            $total = $orden->cantidad * $paquete->price;

         //dd([$paquete->id, $orden->id, $orden->cantidad, $paquete->expired, $orden->iduser]);
        return $this->inversionController->saveInversion($paquete->id, $total, $paquete->expired, $orden->iduser);
        }
    }

     /**
     * Permite saber el estado de las ordenes realizadas
     *
     * @return void
     */
    public function checkStatusOrden()
    {

        $headers = [
            'x-api-key: '.$this->apis_key_nowpayments,
            'Content-Type:application/json'
        ];

        $resul = '';
        $curl = curl_init();

        $fechaTo = Carbon::now();
        $fechaFrom = $fechaTo->copy()->subDays(2);

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.nowpayments.io/v1/payment?limit=100&dateFrom=".$fechaFrom->format('Y-m-d')."&dateTo=".$fechaTo->copy()->addDays(1)->format('Y-m-d'),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => $headers
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            Log::error('Tienda - checkStatusOrden -> Error curl: '.$err);
        } else {
            $response = json_decode($response);
            $pagos = $response->data;
            // dd($pagos);
            foreach ($pagos as $pago) {
                $estado = '0';
                if ($pago->payment_status == 'expired') {
                    $estado = '2';
                    OrdenPurchases::where('id', '=', $pago->order_id)->update(['status' => $estado]);
                }
                if($pago->payment_status == 'finished'){
                    $estado = '1';
                    OrdenPurchases::where('id', '=', $pago->order_id)->update(['status' => $estado]);
                }
                if($pago->payment_status == 'partially_paid'){
                    $resta = ($pago->pay_amount - $pago->actually_paid);
                    if ($resta <= 1) {
                        $estado = '1';
                        OrdenPurchases::where('id', '=', $pago->order_id)->update(['status' => $estado]);
                    }
                }
                if ($estado == '1') {
                    $this->registeInversion($pago->order_id);
                }
                Log::info('ID Orden: '.$pago->order_id.' - Transacion: '.$pago->invoice_id.' Estado: '.$pago->payment_status);
            }
            // $resul = $response->invoice_url;
        }
    }

     /**
     * Activa los usuario cuando apenas compre
     *
     * @return void
     */
    public function activarUser()
    {
        try {
            $ordenes = OrdenPurchases::where('status', '1')->whereDate('created_at', '>', Carbon::now()->subDays(10))->get();
            foreach ($ordenes as $orden) {
                $orden->getOrdenUser->update(['status' => '1']);
            }
            Log::info('Inicio de los puntos y comisiones diarias - '.Carbon::now());
            $this->walletController->payAll();
            Log::info('Fin de los puntos y comisiones diarias - '.Carbon::now());
        } catch (\Throwable $th) {
            Log::error('ActivacionController - activarUser -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

    public function shop()
    {
        $packages = Packages::paginate(8);

         return view('backofice.shop', compact('packages'));

    }


     public function detalleproducto(Packages $producto){
        $valor = 1;
        $sumar = $valor + 1;

        $packages = Packages::get();
        $relacionados = Packages::where('categories_id', $producto->categories_id)->orderby('created_at','DESC')->take(3)->get();
        $categorias = Categories::get();
        return view('backofice.detalleproducto',compact('packages','producto','relacionados','sumar','valor','categorias'));
    }



    public function checkout()
    {
        if (Auth::user()->admin == 1) {
            $products = Cart::paginate(10);
            $suma = Cart::all()->sum('total');

        }else{
            $products = Cart::where('iduser', '=',Auth::id())->paginate(10);
            $suma = Cart::where('iduser', '=',Auth::id())->sum('total');
        }
        $user=auth::user();

       return  view('backofice.checkout',compact('products','suma','user'));
    }

    public function cart()
    {
        if (Auth::user()->admin == 1) {
            $products = Cart::paginate(10);
            $suma = Cart::all()->sum('total');

        }else{
            $products = Cart::where('iduser', '=',Auth::id())->paginate(10);
            $suma = Cart::where('iduser', '=',Auth::id())->sum('total');
        }

        return view('backofice.cart',compact('products','suma'));
    }

    public function orden(Request $request){
        $user = Auth::user()->id;
        $carrito = Cart::all();
        $suma= Cart::where('iduser',$user)->sum('total');

        foreach($carrito as $cart){
        $data = $request->validate([
           'name'=> 'required|min:4',
           'lastname'=>'required|min:4',
           'country' => 'required|min:5',
           'address'=>'required|min:8',
           'state'=> 'required|min:5',
           'city'=> 'required|min:6',
           'email'=> 'required|min:7',
           'phone'=> 'required|min:9',
        ]);

        $data = [
            'name'=> $request->name,
            'lastname'=> $request->lastname,
            'country' => $request->country,
            'address'=> $request->address,
            'state'=> $request->state,
            'city'=> $request->city,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'iduser'=> $user,
         // 'categories_id'=>$cart->categories_id,
            'package_id'=>$cart->package_id,
            'cantidad'=>$cart->cantidad,
            'monto'=>$cart->monto,
            'status'=>1,
            'total'=>$suma,
            'descripcion'=>'prueba',

        ];
        $data['idorden'] = $this->saveOrden($data);
        $url = $this->url($data);
   }


   if (!empty($url)) {
       return redirect($url);
   }
    $orden = DataOrdenUser::create($data);
    Cart::where('iduser',$user->id)->delete();
    $packages = Packages::paginate(8);
    }

    /**
     * Guarda la informacion de las ordenes nuevas
     *
     * @param array $data
     * @return integer
     */
    public function saveOrden($data)
    {
        $orden = OrdenPurchases::create($data);
        return $orden->id;
    }

    private function url($data):string
    {
    $charge = Coinbase::createCharge([
        'name' => 'Producto '.$data['name'],
      //'description' => $data['descripcion'],
        'local_price' => [
            'amount' => $data['total'],
            'currency' => 'USD',
        ],
        'pricing_type' => 'fixed_price',
    ]);
   OrdenPurchases::where('id', $data['idorden'])->update([
        'id_coinbase' => $charge['data']['id'],
        'code_coinbase' => $charge['data']['code'],
    ]);

    return $charge['data']['hosted_url'];
}
    public function cart_save(Request $request){
        // dd($request);
                $products = Cart::where('iduser', auth::id())->get();
                $switch = false;
                foreach($products as $p){
                    if($p->package_id == $request->package_id ){
                        $p->cantidad += $request->cantidad;
                        $p->total += $request->monto * $request->cantidad;
                        $p->save();
                        $switch = true;
                    }
                }
                if(!$switch){
                    $cart = new Cart;
                    $user = Auth::user()->id;
                    $cart->iduser =$user;
                    $cart->categories_id=$request->categories_id;
                    $cart->package_id=$request->package_id;
                    $cart->cantidad=$request->cantidad;
                    $cart->monto=$request->monto;
                    $suma =$request->cantidad * $request->monto;
                    $cart->total=$suma;
                    $cart->save();
                }
                return redirect()->route('cart')->with('msj-success', 'Orden actualizada exitosamente');
            }

            public function updateCart(Request $request, $id){
                $cart = Cart::find($id);
                $cart->monto = $request->monto;
                $cart->cantidad = $request->cantidad;
                $suma =$request->cantidad * $request->monto;
                $cart->total=$suma;
                $cart->update();

                return redirect()->back()->with('msj-success', 'producto actualizado exitosamente');
            }


    public function destroy(Cart $producto){

        $this->authorize('delete', $producto);
        $producto->delete();

        return redirect()->route('cart')->with('msj-success', 'producto eliminada exitosamente');

    }

}
