<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Meta Tag -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="copyright" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Title Tag  -->
    <title>@yield('title') - Envo Store </title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}" />
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('css/niceselect.css') }}" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/flex-slider.min.css') }}" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}" />
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" />

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
  </head>
  <body class="js">
    <!-- Preloader -->
    <div class="preloader">
      <div class="preloader-inner">
        <div class="preloader-icon">
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- End Preloader -->

      
    @if (session('failed'))
      <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <strong>{{ session('failed') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    {{-- Navbar --}}

    @include('partials.navproduct')

    {{-- Content --}}

    @yield('content')

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
          </div>
          <div class="modal-body">
            <div class="row no-gutters">
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <!-- Product Slider -->
                <div class="product-gallery">
                  <div class="quickview-slider-active">
                    <div class="single-slider">
                      <img src="https://via.placeholder.com/569x528" alt="#" />
                    </div>
                    <div class="single-slider">
                      <img src="https://via.placeholder.com/569x528" alt="#" />
                    </div>
                    <div class="single-slider">
                      <img src="https://via.placeholder.com/569x528" alt="#" />
                    </div>
                    <div class="single-slider">
                      <img src="https://via.placeholder.com/569x528" alt="#" />
                    </div>
                  </div>
                </div>
                <!-- End Product slider -->
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="quickview-content">
                  <h2>Flared Shift Dress</h2>
                  <div class="quickview-ratting-review">
                    <div class="quickview-ratting-wrap">
                      <div class="quickview-ratting">
                        <i class="yellow fa fa-star"></i>
                        <i class="yellow fa fa-star"></i>
                        <i class="yellow fa fa-star"></i>
                        <i class="yellow fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <a href="#"> (1 customer review)</a>
                    </div>
                    <div class="quickview-stock">
                      <span><i class="fa fa-check-circle-o"></i> in stock</span>
                    </div>
                  </div>
                  <h3>$29.00</h3>
                  <div class="quickview-peragraph">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                  </div>
                  <div class="size">
                    <div class="row">
                      <div class="col-lg-6 col-12">
                        <h5 class="title">Size</h5>
                        <select>
                          <option selected="selected">s</option>
                          <option>m</option>
                          <option>l</option>
                          <option>xl</option>
                        </select>
                      </div>
                      <div class="col-lg-6 col-12">
                        <h5 class="title">Color</h5>
                        <select>
                          <option selected="selected">orange</option>
                          <option>purple</option>
                          <option>black</option>
                          <option>pink</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="quantity">
                    <!-- Input Order -->
                    <div class="input-group">
                      <div class="button minus">
                        <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                          <i class="ti-minus"></i>
                        </button>
                      </div>
                      <input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="1" />
                      <div class="button plus">
                        <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                          <i class="ti-plus"></i>
                        </button>
                      </div>
                    </div>
                    <!--/ End Input Order -->
                  </div>
                  <div class="add-to-cart">
                    <a href="#" class="btn">Add to cart</a>
                    <a href="#" class="btn min"><i class="ti-heart"></i></a>
                    <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                  </div>
                  <div class="default-social">
                    <h4 class="share-now">Share:</h4>
                    <ul>
                      <li>
                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li>
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                      </li>
                      <li>
                        <a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a>
                      </li>
                      <li>
                        <a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal end -->

    

    <!-- Start Footer Area -->
    <footer class="footer">
      <!-- Footer Top -->
      <div class="footer-top section">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="single-footer about">
                <div class="logo">
                  <a href="{{ url('product') }}"><img src="{{ asset('images/web/logodesain_web.jpg') }}" alt="#" /></a>
                </div>
                <p class="text">Website ini dibuat untuk orang yang ingin berjualan dan juga orang yang membutuhkan produk produk unggulan</p>
                <p class="call">
                  Ingin berkontribusi <span><a href="https://github.com/Ryhann">Ryhann</a></span>
                </p>
              </div>
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-2 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="single-footer links">
                <h4>Information</h4>
                <ul>
                  <li><a href="https://github.com/Ryhann?tab=repositories">About Me</a></li>
                  <li><a href="https://porthan-react.vercel.app/">More Portfolio</a></li>
                </ul>
              </div>
              <!-- End Single Widget -->
            </div>

            <div class="col-lg-2 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="single-footer links">
                <h4>My Social Media</h4>
                <ul>
                  <li><a href="https://www.instagram.com/ellohann/">Instagram</a></li>
                  <li><a href="https://github.com/Ryhann">Github</a></li>
                  <li><a href="https://twitter.com/Rayhan26901596">Twitter</a></li>
                </ul>
              </div>
              <!-- End Single Widget -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Footer Top -->

      <div class="copyright">
        <div class="container">
          <div class="inner">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="left">
                  <p>Copyright © 2021 <a href="http://github.com/Ryhann" target="_blank">Ryhann</a> - All Rights Reserved.</p>
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="right">
                  <p>Template for <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- /End Footer Area -->

    {{-- jQuery --}}
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

    {{-- General Script --}}
    @yield('script')

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>

    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>

    <!-- Popper JS -->
    <script src="{{ asset('js/popper.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Color JS -->
    {{-- <script src="js/colors.js"></script> --}}

    <!-- Slicknav JS -->
    <script src="{{ asset('js/slicknav.min.js') }}"></script>

    <!-- Owl Carousel JS -->
    <script src="{{ asset('js/owl-carousel.js') }}"></script>

    <!-- Magnific Popup JS -->
    <script src="{{ asset('js/magnific-popup.js') }}"></script>

    <!-- Waypoints JS -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script>

    <!-- Countdown JS -->
    <script src="{{ asset('js/finalcountdown.min.js') }}"></script>

    <!-- Nice Select JS -->
    <script src="{{ asset('js/nicesellect.js') }}"></script>

    <!-- Flex Slider JS -->
    <script src="{{ asset('js/flex-slider.js') }}"></script>

    <!-- ScrollUp JS -->
    <script src="{{ asset('js/scrollup.js') }}"></script>

    <!-- Onepage Nav JS -->
    <script src="{{ asset('js/onepage-nav.min.js') }}"></script>

    <!-- Easing JS -->
    <script src="{{ asset('js/easing.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ asset('js/active.js') }}"></script>

    {{-- Sweet Alert --}}
    @include('sweetalert::alert')

    

  </body>
</html>
