@extends('layouts.product.main')

@section('title', 'Product ')

@section('content')
 
<!-- Slider Area -->
    <section class="hero-slider">
        <!-- Single Slider -->
        <div class="single-slider">
          <div class="container">
            <div class="row no-gutters">
              <div class="col-lg-9 offset-lg-3 col-12">
                <div class="text-inner">
                  <div class="row">
                    <div class="col-lg-7 col-12">
                      <div class="hero-text text-white">
                        <h1><span>UP TO 50% OFF </span>Shirt For Man</h1>
                        <p>
                          Maboriosam in a nesciung eget magnae <br />
                          dapibus disting tloctio in the find it pereri <br />
                          odiy maboriosm.
                        </p>
                        <div class="button">
                          <a href="#" class="btn">Shop Now!</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ End Single Slider -->
      </section>
      <!--/ End Slider Area -->

      <!-- Start Small Banner  -->
      <section class="small-banner section text-center mt-5 pt-5" style="padding-top: 80px;" id="product">
        <div class="container">
          <div class="row">

            @foreach ($product as $item)
            <!-- Single Banner  -->
            <div class="col-lg-4 col-md-4 col-12 mb-4">
              <div class="single-banner">

                <img src="{{ asset('storage/thumbnail/'. $item->image) }}" alt="image" style="width: 200px; height:200px;"  />
                
                <p class="text-center">{{ $item->Kategori->nama_kategori}}</p>

                <h3 class="text-center">{{ $item->nama }}</h3>

                <p class="text-center mt-2">{{ number_format($item->harga) }}</p>

                <form action="{{ url('addcart/'.$item->id) }}" method="POST">
                  @csrf
                  <input type="hidden" name="category_id" value="{{ $item->category_id }}">
                  <div class="form-group row ml-5">
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="quantity" value="1">
                    </div>
                  </div>                
                  <button type="submit" class="btn btn-primary mt-3">Cart Now</button>
                </form>

              </div>
            </div>
            <!-- /End Single Banner  -->
            @endforeach

           
          </div>
        </div>
      </section>
      <!-- End Small Banner -->

      <div class="d-flex justify-content-center text-center" style="height:50px; overflow-x:hidden;">
        @php
            use App\Models\Product;
        @endphp
      @if (Product::all() === 4)
      {{ $product->links() }}
      @endif 
      </div>

      <!-- Start Category  -->
      <div class="product-area section">
        <div class="container">

          <div class="row">
            <div class="col-12">
              <div class="section-title">
                <h2>Category Item</h2>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="product-info">
                <div class="nav-main">
                  <!-- Category Nav -->
                  <ul class="nav nav-tabs">
                    @foreach ($categori as $item)
                      <li class="nav-item"><a class="nav-link" href="{{ route('product.kategori', $item->nama_kategori) }}" >{{ $item->nama_kategori }}</a></li>
                    @endforeach
                  </ul>
                  <!--/ End Category Nav -->
                </div>

                <div class="tab-content" id="myTabContent">
                  <!-- Start Single Tab -->
                  <div class="tab-pane fade show active" id="man" role="tabpanel">
                    <div class="tab-single">
                      <div class="row">

                        @foreach ($product as $item)
                        <!-- Single -->
                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                          <div class="single-product">
                            <div class="product-img">
                              <a href="#">
                                <img class="default-img" src="{{ asset('storage/thumbnail/'. $item->image) }}" alt="#" />
                                <img class="hover-img" src="{{ asset('storage/thumbnail/'. $item->image) }}" alt="#" />
                              </a>
                              <div class="button-head">
                                
                                <div class="product-action-2">
                                  <form  action="{{ url('addcart/'.$item->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="category_id" value="{{ $item->category_id }}">
                                    <div class="form-group row ml-5">
                                      <div class="col-sm-10">
                                        <input type="number" class="form-control" name="quantity" value="1">
                                      </div>
                                    </div>                
                                    <button type="submit" class="btn btn-primary mt-3 ml-5">Cart Now</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                            <div class="product-content">
                              <h3><a href="product-details.html">{{ $item->nama }}</a></h3>
                              <div class="product-price">
                                <span>Rp{{ number_format($item->harga) }}</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End single -->
                        @endforeach

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Category Area -->
  
      <!-- Start Most Popular -->
      <div class="product-area most-popular section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title">
                <h2>Hot Product</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="owl-carousel popular-slider">


                @foreach ($hotitem as $item)
                <!-- Start Hot Product -->
                <div class="single-product">
                  <div class="product-img">
                    <a href="product-details.html">
                      <img class="default-img" src="{{ asset('storage/thumbnail/'. $item->image) }}" alt="#" />
                      <img class="hover-img" src="{{ asset('storage/thumbnail/'. $item->image) }}" alt="#" />
                      <span class="out-of-stock">Hot</span>
                    </a>
                    <div class="button-head">
                      <div class="product-action-2">
                        <form  action="{{ url('addcart/'.$item->id) }}" method="POST">
                          @csrf
                          <input type="hidden" name="category_id" value="{{ $item->category_id }}">
                          <div class="form-group row ml-5">
                            <div class="col-sm-10">
                              <input type="number" class="form-control" name="quantity" value="1">
                            </div>
                          </div>                
                          <button type="submit" class="btn btn-primary mt-3 ml-5">Cart Now</button>
                        </form>
                      </div>

                    </div>
                  </div>
                  <div class="product-content">
                    <h3><a href="product-details.html">{{ $item->name }}</a></h3>
                    <div class="product-price">
                      <span class="old">Rp500,000</span>
                      <span>Rp {{ number_format($item->harga) }}</span>
                    </div>
                  </div>
                </div>
                <!-- End Hot Product -->
                @endforeach


              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Most Popular Area -->
   
      <!-- Start Shop Services Area -->
      <section class="shop-services section home">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
              <!-- Start Single Service -->
              <div class="single-service">
                <i class="ti-rocket"></i>
                <h4>Free shiping</h4>
                <p>Orders over $100</p>
              </div>
              <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <!-- Start Single Service -->
              <div class="single-service">
                <i class="ti-reload"></i>
                <h4>Free Return</h4>
                <p>Within 30 days returns</p>
              </div>
              <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <!-- Start Single Service -->
              <div class="single-service">
                <i class="ti-lock"></i>
                <h4>Sucure Payment</h4>
                <p>100% secure payment</p>
              </div>
              <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <!-- Start Single Service -->
              <div class="single-service">
                <i class="ti-tag"></i>
                <h4>Best Peice</h4>
                <p>Guaranteed price</p>
              </div>
              <!-- End Single Service -->
            </div>
          </div>
        </div>
      </section>
      <!-- End Shop Services Area -->
  
      <!-- Start Shop Newsletter  -->
      <section class="shop-newsletter section">
        <div class="container">
          <div class="inner-top">
            <div class="row">
              <div class="col-lg-8 offset-lg-2 col-12">
                <!-- Start Newsletter Inner -->
                <div class="inner">
                  <h4>Hi</h4>
                  <p>Thank you for visit my website : )</p>
                </div>
                <!-- End Newsletter Inner -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Shop Newsletter -->
      
@endsection