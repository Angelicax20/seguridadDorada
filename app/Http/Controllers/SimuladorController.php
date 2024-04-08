<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cards;
use App\Models\Product;
use App\Models\Simulator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SimuladorController extends Controller
{
    public function index()
    {

        $products = Product::get();

        $simulator = Simulator::where('user_id', Auth::user()->id)->first();

        if ($simulator == null) {
            Simulator::create([
                'user_id' => Auth::user()->id,
            ]);
        }

        return view('simulador.index', compact('products'));
    }

    public function pay(Request $request, $id)
    {
        $product = Product::find($id);

        $address = Address::where('user_id', Auth::user()->id)->first();

        $simulator = Simulator::where('user_id', Auth::user()->id)->first();

        if ($simulator != null) {
            Simulator::where('user_id', Auth::user()->id)->update([
                'product_id' => $product->id,
            ]);
        }

        return view('simulador.vista1', compact('product', 'address'));
    }

    public function addressView($price = null)
    {
        return view('simulador.vista2');
    }


    public function address(Request $request)
    {
        $products = Product::get();

        $address = Address::where('user_id', Auth::user()->id)->exists();

        $simulator = Simulator::where('user_id', Auth::user()->id)->first();



        if ($address == true) {
            $address_item = Address::where('user_id', Auth::user()->id)->first();
            $item = Address::where('user_id', Auth::user()->id)->update([
                'department' => $request->deparmento,
                'city' => $request->ciudad,
                'street' => $request->calle,
                'number_street' => $request->nrcasa,
                'number_home' => $request->nrcalle,
            ]);
        } else {
            $address_item = Address::create([
                'department' => $request->deparmento,
                'city' => $request->ciudad,
                'street' => $request->calle,
                'number_street' => $request->nrcasa,
                'number_home' => $request->nrcalle,
                'user_id' => Auth::user()->id
            ]);
        }

        if ($simulator != null && $address == true) {
            Simulator::where('user_id', Auth::user()->id)->update([
                'address_id' => $address_item->id,
            ]);
        }

        return view('simulador.index', compact('products'));
    }

    public function shopCard(Request $request)
    {
        $price = $request->price;
        return view('simulador.vista4', compact('price'));
    }

    public function cardView($price)
    {
        return view('simulador.vista5', compact('price'));
    }

    public function card(Request $request)
    {
        $products = Product::get();
        $card = Cards::where('user_id', Auth::user()->id)->first();
        $simulator = Simulator::where('user_id', Auth::user()->id)->first();
        $item = null;

        if ($card != null) {
            $item = Cards::where('user_id', Auth::user()->id)->update([
                'name' => $request->nombres,
                'number' => $request->numtarjeta,
                'expiration_date' => $request->dateexpire,
                'code' => $request->codsegurity,
                'type' => $request->type,
                'document' => $request->DNI,
                'type_document' => $request->documenttype
            ]);
        } else {
            $card = Cards::create([
                'user_id' => Auth::user()->id,
                'name' => $request->nombres,
                'number' => $request->numtarjeta,
                'expiration_date' => $request->dateexpire,
                'code' => $request->codsegurity,
                'type' => $request->type,
                'document' => $request->DNI,
                'type_document' => $request->documenttype
            ]);
        }

        if ($simulator != null) {
            Simulator::where('user_id', Auth::user()->id)->update([
                'card_id' => $item != null ? $card->id : $item,
                'status' => 1
            ]);
        }


        return redirect('/simulador')->with('success', 'Simulador finalizado con exito');
    }
}
