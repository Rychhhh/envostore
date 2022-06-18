@php

    use App\Models\Product;
    use App\Models\Category;
@endphp

@extends('layouts.admin.main')

@section('content')
     <!-- Begin Page Content -->

     <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> </a>
        </div>
  
        <!-- Content Row -->
        <div class="row">
          <!-- Jumlah user -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total User</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Auth::user()->count()}}</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          {{-- Total Product --}}
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Product</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Product::all()->count() }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-box fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Category</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Category::all()->count() }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-book fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
            </div>
          </div>
@endsection