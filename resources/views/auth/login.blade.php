@extends('layouts.auth.main')

@section('title')
    Login Page
@endsection

@section('content_head')
    <meta charset="UTF-8" />

    <link rel="icon" href="images/icons/favicon.png">
        
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css" />

    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css" />

    <link rel="stylesheet" type="text/css" href="css/util.css" />

    <link rel="stylesheet" type="text/css" href="css/main.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        a {
            text-decoration: none;
            font-weight: 500;
            animation: 0.5s
        }
        a:hover {
            font-weight: bold;            
        }
    </style>
@endsection    

@section('container')
<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form action="{{ route('login') }}" method="POST" class="login100-form validate-form">

          @csrf

          <span class="login100-form-title p-b-43">Login</span>

          <label for="email" class="form-label text-center">Email</label> 
          <input type="text" name="email" class="mb-3" style="margin-left: 96px; width:250px; padding:15px; background-color: rgb(209, 209, 209);" autofocus> <br>
          {{-- Alert jika email salah --}}
          @error('email')
               <span class="alert-danger" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
          @enderror
          
          <br>
          
          {{-- Label Password --}}
          <label for="password" class="form-label text-center">Password</label>
          <input type="password" name="password" class="mb-1" style="margin-left: 68px; width: 250px; padding:15px; background-color: rgb(209, 209, 209);" required> <br> <br>
  
          {{-- Alert jika password salah --}} 
          @error('password')
               <span class="alert-danger" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
          @enderror
  

          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">Login</button>
          </div>

          <div class="text-center p-t-46 p-b-20">
            <span class="txt2"> Or <a href={{ route('register') }}>Sign Up </a> </span>
          </div>

          <div class="login100-form-social flex-c-m p-t-20">

            <a href="https://github.com/Ryhann" class="login100-form-social-item flex-c-m bg2 m-r-5">
              <i class="fa fa-github" aria-hidden="true"></i>
            </a>

          </div>
        </form>

        <div class="login100-more" style="background-image: url('images/bg-01.jpg')"></div>
      </div>
    </div>
  </div>

  <!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>
@endsection