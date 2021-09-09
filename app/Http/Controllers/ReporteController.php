<?php

namespace App\Http\Controllers;

use App\Models\DataOrdenUser;
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
            $ordenes = DataOrdenUser::all();
        
        }else{
            $ordenes = DataOrdenUser::where('iduser', '=',Auth::id())->orderBy('status')->get();
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
