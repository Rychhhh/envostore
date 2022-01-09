<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = Product::latest()->paginate(6);

        return view('product.index', compact(
            'product'
        ))->with('i', (request()->input('page', 1)- 1) * 6);
    }

    public function search(Request $request)
    {
        # Mencari data berdasarkan nama product
        $search =  $request->search;

        $product = Product::where('nama','Like','%'. $search. '%')->get();

        return view('product.index', compact(
            'product'
        ));
    } 

    // for detail
    public function detailProduct($id)
    {
        $detailProduct = Product::find($id);
        return view('product.detail.index');
    }
}
