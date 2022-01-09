<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    
    public function index()
    {
        $pesanan = Cart::where('name', Auth::user()->name)->first();
        $checkouts = Cart::all()->where('name', auth()->user()->name)->where('status', '!=', 1);  

            return view('product.checkout.index', compact('checkouts', 'pesanan'))->with('success', 'Welcome');
    }
}
