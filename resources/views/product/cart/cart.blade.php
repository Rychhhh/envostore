@extends('layouts.product.main')

@section('title', 'Cart')

@section('content')
    
@php
    use App\Models\Cart;    
@endphp

	<!-- Breadcrumbs -->
	<div class="breadcrumbs mt-5 pl-5 text-center">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{ url('home') }}">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="{{ url('showcart') }}">Cart</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
			
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($cartItem as $cart)
                                

							<tr>
                                <td class="image" data-title="No"><img src="{{ asset('storage/thumbnail/'.$cart->image) }}" alt="#"></td>
								<td class="product-des" data-title="Description">
                                    <p class="product-name"><a href="#">{{ $cart->product_nama }}</a></p>
                                    <p class="product-desc">{{ $cart->tanggal }}</p>
								</td>
								<td class="price" data-title="Price"><span>{{ Str::currency($cart->harga) }} </span></td>
								<td class="qty" data-title="Qty">
                                    <h3 class="text-center"> {{ $cart->quantity }}</h3>
								</td>
								<td class="total-amount" data-title="Total"><span>{{ Str::currency($cart->total) }}</span></td>
								<td class="action" data-title="Remove" onclick="return confirm('Anda yakin ingin menghapus ?')"><a href="{{ url('cartdelete', $cart->id) }}" onclick="return confirm('apa anda yakin ingin menghapus ? ')"><i class="ti-trash remove-icon"></i></a></td>
							</tr>
                            @endforeach
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
							
								
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul
										<li>Cart Subtotal <span>{{ Str::currency(Cart::where('name', auth()->user()->name)->sum('total')) }}</span></li>
									</ul>
									<div class="button5">
										<a href="{{ url('checkout') }}" class="btn">Checkout</a>
										<a href="{{ url('home') }}" class="btn">Continue shopping</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
	 
    @endsection