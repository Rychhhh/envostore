@extends('layouts.admin.main')


@section('content')

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header d-sm-flex justify-content-between py-3">
            <h6 class="m-0 font-weight-bold text-primary">Product</h6>
            <a href="{{ url('product/create') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add Product</a>
        </div>
        <div class="container card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-info text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead class="table-dark">
                        <tr >
                            <th style="font-weight:bold;">No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Description</th>
                            <th>Stok</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach ($product as $product)    
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->nama}}</td>
                            <td>{{ $product->harga }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->stok }}</td>
                            <td>{{ $product->category_id }}</td>
                            <td>
                                <img width="100" height="100" src="{{ asset('storage/thumbnail/'. $product->image) }}">
                            </td>
                            <td class="flex-wrap">
                                <form action="{{ url('product/'.$product->id) }}" method="POST" 
                                onsubmit="return Swal.fire({
                                    title: 'Do you want to save the changes?',
                                    showDenyButton: true,
                                    showCancelButton: true,
                                    confirmButtonText: 'Save',
                                    denyButtonText: `Don't save`,
                                  }).then((result) => {
                                    /* Read more about isConfirmed, isDenied below */
                                    if (result.isConfirmed) {
                                      Swal.fire('Saved!', '', 'success')
                                    } else if (result.isDenied) {
                                      Swal.fire('Changes are not saved', '', 'info')
                                    }
                                  })
                                  ">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-info" type="submit">🗑</button>
                                </form>
                                
                                
                            </td>
                            <td>
                                <a class="btn btn-warning">📌</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>

@endsection