<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Ranks;
use App\Models\Packages;
use App\Mail\contactEmail;
use App\Models\Categories;
use Illuminate\Support\Str;
use App\Models\OrdenPurchases;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\TreeController;
use App\Http\Controllers\WalletController;
use App\Models\Cart;
use Facade\Ignition\Support\Packagist\Package;

class HomeController extends Controller
{
    public $treeController;
    public $ticketController;
    public $servicioController;
    public $addsaldoController;
    public $walletController;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->treeController = new TreeController;

        $this->walletController = new WalletController;
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        if(Auth::user() == true)
        {
        $categorias = Categories::all();
        $productosMasVendidos = Packages::take(9)->get();
        $productos = Packages::take(8)->get();

        $user = Auth::id();
        $ProductosEnCarrito = Cart::where( 'iduser', $user)->count();
        return view('backofice.home', compact('categorias','productos','productosMasVendidos', 'ProductosEnCarrito'));
        }
      /*  if (Auth::user()->admin == 1) {
        return redirect()->route('home');
        } else {
        return redirect()->route('home.user');
        } */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            $data = $this->dataDashboard(Auth::id());

            return view('dashboard.index', compact('data'));
        } catch (\Throwable $th) {
            Log::error('Home - index -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

    public function indexUser()
    {
        try {
            $data = $this->dataDashboard(Auth::id());
            return view('dashboard.indexUser', compact('data'));
        } catch (\Throwable $th) {
            Log::error('Home - indexUser -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

    /**
     * Permite obtener la informacion a mostrar en el dashboard
     *
     * @param integer $iduser
     * @return array
     */
    public function dataDashboard(int $iduser):array
    {
        $cantUsers = $this->treeController->getTotalUser($iduser);
        $data = [
            'directos' => $cantUsers['directos'],
            'indirectos' => $cantUsers['indirectos'],
            'wallet' => Auth::user()->wallet,
            'comisiones' => $this->walletController->getTotalComision($iduser),
            'tickets' => 0,
            'ordenes' => 0,
            'usuario' => Auth::user()->fullname,
            'rangos' => $this->getDataRangos()
        ];

        return $data;
    }

    /**
     * Permite obtener la informacion de los rangos
     *
     * @return array
     */
    public function getDataRangos(): array
    {
        $rol_actual = (Auth::user()->rank_id == null)? 0 : Auth::user()->rank_id;
        $rol_sig = ($rol_actual + 1 != 10)? ($rol_actual + 1) : 9;
        $rankSig = Ranks::find($rol_sig);
        $totalPuntos = (Auth::user()->point_rank != null) ? Auth::user()->point_rank : 0;
        $porcentajes = (($totalPuntos / $rankSig->points) * 100);
        $ranks = Ranks::all();
        foreach ($ranks as $rank) {
            $rank->img = asset('assets/img/royal_green/rangos/'.Str::slug($rank->name, '-').'.png');
        }
        // $ranks->prepend([
        //     'name' => 'Sin Rango',
        //     'img' => 'https://icons-for-free.com/iconfiles/png/512/page+quality+rank+icon-1320190816917337266.png'
        // ]);
        // dd($ranks);
        $data = [
            'ranks' => $ranks,
            'puntos' => number_format($totalPuntos, 2, ',', '.'),
            'porcentage' => $porcentajes,
            'puntos_sig' => number_format($rankSig->points, 2, ',', '.'),
            'name_rank_sig' => $rankSig->name
        ];
        return $data;
    }


    /**
     * Permite actualizar el lado a registrar de un usuario
     *
     * @param string $side
     * @return void
     */
    public function updateSideBinary($side): string
    {
        try {
            DB::table('users')->where('id', Auth::id())->update(['binary_side_register' => $side]);
            return json_encode('bien');
        } catch (\Throwable $th) {
            Log::error('Home - indexUser -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

    /**
     * Permite obtener la informacion para las graficas del dashboard
     *
     * @return string
     */
    public function getDataGraphic(): string
    {
        try {
            $iduser = Auth::id();
            $data = [
                'comisiones' => $this->walletController->getDataGraphiComisiones($iduser),
                'tickets' => [],
                'saldo' => [],
                'ordenes' => []
            ];

            return json_encode($data);
        } catch (\Throwable $th) {
            Log::error('Home - getDataGraphic -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

    /**
     * Lleva a la vista de terminos y condiciones
     *
     * @return void
     */
    public function terminosCondiciones()
    {
        return view('terminos_condiciones.index');
    }

    public function dataGrafica()
    {
        $anno = Carbon::now()->format('Y');
        $fecha_ini = Carbon::createFromDate($anno,1,1)->startOfDay();
        $fecha_fin = Carbon::createFromDate($anno, 12,1)->endOfMonth()->endOfDay();

        $ordenes = OrdenPurchases::where('iduser', Auth::id())->where('status', '1')
                    ->select(

                        DB::raw('date_format(created_at,"%m/%Y") as created'),
                        DB::raw('SUM(monto) as montos'),
                    )
                    ->whereBetween('created_at', [$fecha_ini, $fecha_fin])
                    ->groupBy('created')
                    ->get()
                    ->toArray();
        $valores = [];

        for ( $date = $fecha_ini->copy(); $date->lt( $fecha_fin) ; $date->addMonth(1) ) {

            $valores[$date->format('m/Y')] = 0;

        }

        foreach($ordenes as $key => $orden){
            $valores[$orden['created']] = $orden['montos'];
        }
        //arreglado
        $data = [];
        foreach($valores as $valor){
            $data[] = floatVal($valor);
        }

        return response()->json(['valores' => $data]);
    }

    public function inicio()
    {
        $categorias = Categories::all();
        $productosMasVendidos = Packages::take(9)->get();
        $productos = Packages::take(8)->get();

        $user = Auth::id();
        $ProductosEnCarrito = Cart::where( 'iduser', $user)->count();
        return view('backofice.home', compact('categorias','productos','productosMasVendidos', 'ProductosEnCarrito'));
    }



    public function inicio2()
    {
        $categorias = Categories::all();
        $productos = Packages::take(9)->get();
        return view('backofice.home2', compact('categorias','productos'));
    }

    public function about()
    {
        return view('backofice.about');
    }

    public function contact_us(){

        return view('backofice.contact_us');
    }

    public function terms(){
        return view('backofice.terms');
   }
   public function policity(){
    return view('backofice.politicas');
}

    public function contact(){
      $message = request()->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'telefono'=>'required',
            'asunto'=>'required',
            'mensaje'=>'required',

        ]);
        if($message){
        Mail::to(env('MAIL_FROM_ADDRESS'),env('MAIL_FROM_NAME'))->send(new contactEmail($message));

        return back()->with('msj-success','Mensaje enviado');
    }else{
        return back()->with('msj-danger','No se pudo enviar este mensaje');
    }
    }
    public function faq()
    {
        return view('backofice.faq');
    }
}

