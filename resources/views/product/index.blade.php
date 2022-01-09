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
                
                <p class="text-center">{{ $item->category }}</p>
                <h3 class="text-center">{{ $item->nama }}</h3>
                <p class="text-center mt-2">{{ number_format($item->harga) }}</p>
                <form action="{{ url('addcart/'.$item->id) }}" method="POST">
                  @csrf
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

      <!-- Start Product Area -->
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
                  <!-- Tab Nav -->
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Man</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#man" role="tab">Woman</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Kids</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessories</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Essential</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Prices</a></li>
                  </ul>
                  <!--/ End Tab Nav -->
                </div>
                <div class="tab-content" id="myTabContent">
                  <!-- Start Single Tab -->
                  <div class="tab-pane fade show active" id="man" role="tabpanel">
                    <div class="tab-single">
                      <div class="row">
                        <!-- Single -->
                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                          <div class="single-product">
                            <div class="product-img">
                              <a href="product-details.html">
                                <img class="default-img" src="images/product/product1.jpg" alt="#" />
                                <img class="hover-img" src="images/product/product1.jpg" alt="#" />
                              </a>
                              <div class="button-head">
                                <div class="product-action">
                                  <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="ti-eye"></i><span>Quick Shop</span></a>
                                  <a title="Wishlist" href="#"><i class="ti-heart"></i><span>Add to Wishlist</span></a>
                                  <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                </div>
                                <div class="product-action-2">
                                  <a title="Add to cart" href="#">Add to cart</a>
                                </div>
                              </div>
                            </div>
                            <div class="product-content">
                              <h3><a href="product-details.html">Women Hot Collection</a></h3>
                              <div class="product-price">
                                <span>$29.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End single -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Product Area -->
  
      <!-- Start Most Popular -->
      <div class="product-area most-popular section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title">
                <h2>Hot Item</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="owl-carousel popular-slider">
                <!-- Start Single Product -->
                <div class="single-product">
                  <div class="product-img">
                    <a href="product-details.html">
                      <img class="default-img" src="https://lh3.googleusercontent.com/proxy/6C9FZjiOEQkGB9xsdJF0FGSopeiw3921inFWY5-dHNRpoSJqKH7XIwqCA8k0Tz0sgCzbdyUn_FzJXI5m2kTrS_twsNbj8-zmJcy6bIh8tyOZBN12Ad_A3gBdIqnj7AglQKU" alt="#" />
                      <img class="hover-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWCWOR1F8OeC9jUHGkSOvYyqjTbpkqGQ618m0RNOEgSbrHOarWBPB45-7rN6QyhjmjthY&usqp=CAU" alt="#" />
                      <span class="out-of-stock">Hot</span>
                    </a>
                    <div class="button-head">
                      <div class="product-action">
                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="ti-eye"></i><span>Quick Shop</span></a>
                        <a title="Wishlist" href="#"><i class="ti-heart"></i><span>Add to Wishlist</span></a>
                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                      </div>
                      <div class="product-action-2">
                        <a title="Add to cart" href="#">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-content">
                    <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                    <div class="product-price">
                      <span class="old">$60.00</span>
                      <span>$50.00</span>
                    </div>
                  </div>
                </div>
                <!-- End Single Product -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Most Popular Area -->
  
      <!-- Start Shop Home List  -->
      <section class="shop-home-list section">
        <div class="container">
          <div class="row">
            <div class="row">
              <div class="col-12">
                <div class="shop-section-title">
                  <h1>Best Seller</h1>
                </div>
              </div>
            </div>
            <!-- Start Single List  -->
            <div class="single-list">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="list-image overlay">
                    <img src="https://via.placeholder.com/115x140" alt="#" />
                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 no-padding">
                  <div class="content">
                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                    <p class="price with-discount">$65</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single List  -->
            <!-- Start Single List  -->
            <div class="single-list">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="list-image overlay">
                    <img src="https://via.placeholder.com/115x140" alt="#" />
                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 no-padding">
                  <div class="content">
                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                    <p class="price with-discount">$33</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single List  -->
            <!-- Start Single List  -->
            <div class="single-list">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="list-image overlay">
                    <img src="https://via.placeholder.com/115x140" alt="#" />
                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 no-padding">
                  <div class="content">
                    <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                    <p class="price with-discount">$77</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single List  -->
          </div>
        </div>
      </section>
      <!-- End Shop Home List  -->
  
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