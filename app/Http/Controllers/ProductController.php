<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();

        return view('admin.product.index', compact(
            "product"
        ));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newProduct = new Product();
        
        $categori = Category::select('id', 'nama_kategori')->get();
        return view('admin.product.add', compact("newProduct", 'categori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $file_name = $request->image->getClientOriginalName();
        $request->image->storeAs('thumbnail', $file_name);

        // nama,harga,desc,quantity,category,image

        $newProduct = new Product();
        $newProduct->nama = $request->nama;
        $newProduct->harga = $request->harga;
        $newProduct->description = $request->description;
        $newProduct->stok = $request->stok;
        $newProduct->category_id = $request->category;
        $newProduct->image = $file_name;
        $newProduct->save();

        return redirect('product')->with('success', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $updateProduct = Product::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Product::find($id);
        $delete->delete();

        return redirect('product');
    }

}
