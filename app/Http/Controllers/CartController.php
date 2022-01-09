<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // menampilkan data cart
    public function showcart() {
        $cartItem = Cart::all()->where('name', auth()->user()->name);

        return view('product.cart.cart', compact('cartItem'));   
    }

    // Add data cart
    public function addcart(Request $request, $id)
    {
        $user = Auth()->user();         // membaca USER yang login saat ini 

        $product = Product::find($id);  // Product yang mengeklik CART oleh USER itu sendiri
        $cart = new Cart();             // Memasukan data yang diklik USER ke CART table

        $tanggal = Carbon::now()->isoFormat('D MMMM Y');

        // fungsi untuk menyimpan data
        $cart->name = $user->name;
        $cart->tanggal = $tanggal;
        $cart->product_nama = $product->nama;
        $cart->quantity = $request->quantity;
        $cart->harga = $product->harga;
        $cart->category = $product->category;
        $cart->code = mt_rand(100, 999);
        $cart->ongkir =  mt_rand(13000, 100000);
        $cart->image = $product->image;
        $cart->total = $cart->quantity * $product->harga + $cart->ongkir; // quantity * harga + ongkir
        $cart->save();

        return redirect('showcart')->with('success', "Product Masuk Cart");
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $data = Cart::findOrFail($id);
        return view('product.cart.edit')->with([
            'data' => $data
        ]);
    }
    
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id) {
        $data = Cart::findOrFail($id);
        $data->quantity = $request->quantity;
        $data->save();
    }

    // delete data cart
    public function cartdelete($id) {
        $cartdelete = Cart::find($id);
        $cartdelete->delete();

        return redirect()->back()->with('warning', 'Product Berhasil Dihapus');
    }
}
