<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cards;
use App\Models\Simulator;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $users = User::get();

        return view('admin.index', compact('users'));
    }

    public function userDetail($id)
    {
        $user = User::find($id);
        $card = Cards::where('user_id', $id)->first();
        $address = Address::where('user_id', $id)->first();
        $datos = Simulator::where('user_id', $id)->first();

        if ($datos != null) {
            if ($datos->product_id != null && $datos->address_id != null && $datos->card_id != null) {
                $datos = 'Este usuario a finalizado el simulador con exito';
            } elseif ($datos->product_id != null && $datos->address_id == null && $datos->card_id == null) {
                $datos = 'Este usuario no ha completado el simulador a llegado hasta el primer paso';
            } elseif ($datos->product_id != null && $datos->address_id != null && $datos->card_id == null) {
                $datos = 'Este usuario no ha completado el simulador a llegado hasta el segundo paso';
            }else{
                $datos = 'este usuario no a iniciado el simulador';
            }
        }else{
            $datos = 'este usuario no a iniciado el simulador';
        }

        return view('admin.detail', compact('user', 'card', 'address', 'datos'));
    }
}
