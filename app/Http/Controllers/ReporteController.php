<?php

namespace App\Http\Controllers;

use App\Models\OrdenPurchases;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ReporteController extends Controller
{
    //

    /**
     * lleva a la vista de informen de pedidos
     *
     * @return void
     */
    public function indexPedidos()
    {
        if (Auth::user()->admin == 1) {
            $ordenes = OrdenPurchases::all();
        
        }else{
            $ordenes = OrdenPurchases::where('iduser', '=',Auth::id())->orderBy('status')->get();
        }
    
        foreach ($ordenes as $orden) {
            $orden->name = $orden->getOrdenUser->fullname;
            // $orden->grupo = $orden->getGroupOrden->name;
            $orden->paquete = $orden->getPackageOrden->name;
        }

        return view('reports.perdido', compact('ordenes'));
    }

    /**
     * Lleva a la vista de informa de comisiones
     *
     * @return void
     */
    public function indexComision()
    {
        $wallets = Wallet::where([
            ['tipo_transaction', '=', 0],
            ['status', '!=', '3']
        ])->get();

        foreach ($wallets as $wallet) {
            $wallet->name = $wallet->getWalletUser->fullname;
            $wallet->referido = $wallet->getWalletReferred->fullname;
        }

        return view('reports.comision', compact('wallets'));
    }


    public function graphisDashboard()
    {
        
    }

    public function detailOrden()
    {
        return back();
    }
}
