@extends('layouts.welcome.welcome')

@section('title', ' Welcome')

@section('content')
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col mt-5 heading flex-row">
               <h2>Hi <span style="color:red;">Poppins</span></h2>
            </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
            <div class="col-md-7">
                <div class="title">
                    <span> ENVO STORE </span> <br>
                    <span style="color: red"> IS </span> <br> 
                    <span> DREAM SHOP.</span>
                </div>
                <div class="desc my-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni soluta quo velit facere cumque ab rerum ipsum, libero beatae dicta iusto pariatur ex numquam ea necessitatibus maiores autem optio voluptas!
                </div>
                <a class="start-button btn my-4 py-3" href="{{ route('login') }}"><i class="glyphicon glyphicon-check"></i>Get Started</a>
            </div>
            <div class="col-md-5">
                <img class="bounceimg" width="500" height="300" src="{{ asset('images/welcome/img_welcome.PNG') }}" alt="img_welcome">
            </div>
    </div>
   
@endsection
    
