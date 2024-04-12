<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cards;
use App\Models\Product;
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
            } else {
                $datos = 'este usuario no a iniciado el simulador';
            }
        } else {
            $datos = 'este usuario no a iniciado el simulador';
        }

        return view('admin.detail', compact('user', 'card', 'address', 'datos'));
    }

    public function products()
    {
        return view('products.index');
    }

    public function saveProduct(Request $request)
    {
        // Get original file name with extension
        $originalImgName = $request->file('imagen')->getClientOriginalName();

        // Get file extension only
        $extensionimg = pathinfo($originalImgName, PATHINFO_EXTENSION);


        // Store the file
        $path_front = $request->file('imagen')->storeAs('public/products', $originalImgName);

        $path_front = str_replace('public', '/storage', $path_front);

        $product = Product::create([
            'title' => $request->name,
            'image' => ($originalImgName),
            'price' => $request->monto,
        ]);

        return redirect()->back()->with('success', 'Producto creado con exito');
    }

    public function editProduct($id)
    {
        $product = Product::find($id);

        return view('products.edit', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        
        $product = Product::find($id);

        if ($request->delete == 1) {

            $product->delete();

            return redirect('/simulador')->with('success', 'Producto eliminado con exito');
        }

        if (empty($request->file('imagen'))){
            $originalImgName = $product->image;
        }else{
            // Get original file name with extension
        $originalImgName = $request->file('imagen')->getClientOriginalName();
                // Get file extension only
                $extensionimg = pathinfo($originalImgName, PATHINFO_EXTENSION);

                // Store the file
                $path_front = $request->file('imagen')->storeAs('public/products', $originalImgName);
        
                $path_front = str_replace('public', '/storage', $path_front);

        }



        $product->update([
            'title' => $request->name,
            'image' => ($originalImgName),
            'price' => $request->monto,
        ]);


        return redirect()->back()->with('success', 'Producto actualizado con exito');
    }

    public function deleteProduct($id)
    {
    }
}
