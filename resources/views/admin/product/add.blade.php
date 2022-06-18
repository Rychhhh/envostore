@extends('layouts.admin.main')

@section('content')

        <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
            <a href="{{ url('product') }}" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Show Product</a>

        </div>

        <form action="{{ url('product') }}" method="POST" enctype="multipart/form-data" onsubmit="
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Cek lagi data anda !!!',
                showConfirmButton: false,
                timer: 2500
              })">

            @csrf

            <div class="mb-3">
            <label for="name" class="form-label">Name Product</label>
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="name"  autofocus required>
            <div id="nameHelp" class="form-text">Isikan nama product yang anda akan tambahkan .</div>
            </div>

            <div class="mb-3">
            <label for="harga" class="form-label">Price / Harga</label>
            <input type="text" class="form-control"  name="harga" required>
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>

            <div class="mb-3">
            <label for="quantity" class="form-label">Stok</label>
            <input type="text" class="form-control" id="quantity" name="stok" required>
            </div>

            <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select name="category" id="category" class="form-control">
                @foreach ($categori as $item)
                  <option value={{$item->id}}>{{$item->nama_kategori}}</option>
                @endforeach
            </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
