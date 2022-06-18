@php
      use App\Models\Cart;
      use App\Models\Category;

      $user = auth()->user();
      // For showcart hover
      $cartItem = Cart::all()->where('name', $user->name);

      $ifcartmorethan4 = Cart::all()->where('product_nama')->count();

      $totalPesanan = Cart::where('name', $user->name)->sum('total');

      // for categori in side nav
      $categori = Category::all();
@endphp
   
   
   <!-- Header -->
    <header class="header shop">
        <!-- Topbar -->
        <div class="topbar">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-12">
                <!-- Top Left -->
                <div class="top-left">
                  <ul class="list-main">
                    <li>Hello <i class="ti-github"></i> {{ Auth::user()->name }}</li>
                  </ul>
                </div>
                <!--/ End Top Left -->
              </div>
              <div class="col-lg-8 col-md-12 col-12">
                <!-- Top Right -->
                <div class="right-content">
                  <ul class="list-main">
                    <li><i class="ti-user"></i> <a href="#">My account</a></li>
                    <li>
                      <i class="ti-power-off">
                        <a  data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer">
                         Logout
                        </a>
                      </i>
                    </li>

                   
                    {{-- Modal For Logout --}}
                    <div class="modal fade text-center" id="exampleModal" tabindex="-1" role="dialog">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                          </div>
                          <div class="modal-body">
                            <div class="row no-gutters">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                  <h2 class="m-5 p-5">Anda yakin ingin logout ? </h2>
                                  <div class="quickview-peragraph">
                                    <p>Jika anda logout, maka anda akan diarahkan ke halaman welcome</p>
                                  </div>
                                  <div class="quantity">
                                  </div>
                                  <div class="add-to-cart">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Closes</button>

                                    <button type="button" class="btn btn-primary">
                                      <a href="{{ route('logout') }}" data-bs-toggle="modal" data-bs-target="#exampleModal"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf</form>
                                    </button>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal end -->
                          

                  </ul>
                </div>
                <!-- End Top Right -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Topbar -->
  
        <div class="middle-inner">
          <div class="container">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-12">
                <!-- Logo -->
                <div class="logo">
                  <a href="{{ url('home') }}"><img src="{{ asset('images/web/logodesain_web.jpg') }}" alt="logo" /></a>
                </div>
                <!--/ End Logo -->
                <!-- Search Form -->
                <div class="search-top">
                  <div class="top-search">
                    <a href="#0"><i class="ti-search"></i></a>
                  </div>
                  <!-- Search Form -->
                  <div class="search-top">
                    <form class="search-form">
                      <input type="text" placeholder="Search here..." name="search" />
                      <button value="search" type="submit"><i class="ti-search"></i></button>
                    </form>
                  </div>
                  <!--/ End Search Form -->
                </div>
                <!--/ End Search Form -->
                <div class="mobile-nav"></div>
              </div>
              <div class="col-lg-8 col-md-7 col-12">
                <div class="search-bar-top">
                  <div class="search-bar">
                    <form action="{{ url('search') }}">
                      <input name="search" placeholder="Search Product Here....." type="search" />
                      <button class="btnn"><i class="ti-search"></i></button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-3 col-12">
                <div class="right-bar">
                  <!-- Wishlish, User Profile and Cart -->
                  <div class="sinlge-bar">
                    <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                  </div>
                  <div class="sinlge-bar">
                    <a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                  </div>
                  <div class="sinlge-bar shopping">
                  
                    <a href="{{ url('showcart') }}" class="single-icon"><i class="ti-bag"></i> <span class="total-count">{{ Cart::where('name', $user->name)->count() }}</span></a>

                    
                    <!-- Cart Item -->
                    <div class="shopping-item">
                      <div class="dropdown-cart-header">
                        <span>{{ Cart::where('name', $user->name)->count() }} Items</span>
                        <a href="{{ url('showcart') }}">View Cart</a>
                      </div>
                      @if ($ifcartmorethan4 > 4)
                      
                      <a>View Full Cart</a>
                      
                      @else 
                      
                      @foreach ($cartItem as $item)
                      
                      <ul class="shopping-list">
                        <li>
                          <a href="{{ url('cartdelete', $item->id) }}" onclick="return confirm('Anda yakin ingin menghapus ?')"><i class="fa fa-remove"></i></a>
                          <a class="cart-img" href="#"><img src="{{ asset('storage/thumbnail/'. $item->image) }}" alt="#" /></a>
                          <h4><a href="#">{{ $item->product_nama }}</a></h4>
                          <p class="price"><span class="quantity">{{ $item->quantity }} - </span>{{ Str::currency($item->harga) }}</p>
                          
                          @if ($item->total == 0)
                          Total 0
                          @else
                          
                          <p>Total {{ Str::currency($item->total) }}</p>
                          @endif
                        </li>
                      </ul>
                      @endforeach
                      @endif

                      
                      <div class="bottom">
                        <div class="total">
                          
                          <span>Total</span>

                          @if ($totalPesanan == 0)
                            <span class="total-amount">Rp.0</span>
                          @else
                          <span class="total-amount">{{ Str::currency($totalPesanan) }}</span>
                              
                          @endif
                        
                        </div>
                        <a href="{{ url('checkout') }}" class="btn animate">Checkout</a>
                      </div>
                    </div>
                    <!--/ End Shopping Item -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Header Inner -->
        <div class="header-inner">
          <div class="container">
            <div class="cat-nav-head">
              <div class="row">
                <div class="col-lg-3">
                  <div class="all-category">
                    <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>Welcome </h3>
                    <ul class="main-category">
                      <li><a href="https://porthan-react.vercel.app/">About Me </a></li>
                      @foreach ($categori as $item)
                      <li class="nav-item"><a class="nav-link" href="{{ route('product.kategori', $item->nama_kategori) }}" >{{ $item->nama_kategori }}</a></li>
                      @endforeach
                    </ul>
                  </div>
                </div>
                <div class="col-lg-9 col-12">
                  <div class="menu-area">
                    <!-- Main Menu -->
                    <nav class="navbar navbar-expand-lg">
                      <div class="navbar-collapse">
                        <div class="nav-inner">
                          <ul class="nav main-menu menu navbar-nav">
                            <li class="active"><a href="{{ url('home') }}">Home</a></li>
                              <li><a href="{{ url('#product') }}">Product</a></li>
                            <li><a href="#aboutme">About Me</a></li>
                            <li>
                              <a href="{{ url('showcart') }}">Shop<i class="ti-angle-down"></i><span class="new">New</span></a href="{{ url('home') }}">
                              <ul class="dropdown">
                                <li><a href="{{ url('showcart') }}">Cart</a></li>
                              </ul>
                            </li>
                            @auth
                                @if (Auth::user()->role === 'admin')
                                  <li><a href="{{ url('admin') }}">Admin</a></li>
                                    
                                @endif
                            @endauth
                          </ul>
                        </div>
                      </div>
                    </nav>
                    <!--/ End Main Menu -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ End Header Inner -->
      </header>
      <!--/ End Header -->