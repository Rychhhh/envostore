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
							<li><a href="{{ url('showcart') }}">Cart<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="{{ url('showcart') }}">Checkout {{ auth()->user()->name }}</a></li>
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
								<th class="text-center">STATUS</th>
								<th class="text-center">Ongkir</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($checkouts as $checkout)
							 <tr>
                                <td class="image" data-title="No"><img src="{{ asset('storage/thumbnail/'.$checkout->image) }}" alt="#"></td> 
								<td class="product-des" data-title="Description">
                                    <p class="product-name"><a href="#">{{ $checkout->product_nama }}</a></p>
                                    <p class="product-desc">{{ $checkout->tanggal }}</p>
								</td>
								<td class="price" data-title="Price"><span>{{ Str::currency($checkout->harga) }} </span></td>
								<td class="qty" data-title="Qty">
                                        <p class="text-center"> {{ $checkout->quantity }}</p>
								</td>
                                <td>
                                    @if ($checkout->status = 0)
                                        Sudah Bayar
                                    @else
                                        Sudah Pesan & Belum Bayar
                                    @endif
                                </td>
                                <td>
                                   Rp {{ number_format($checkout->ongkir) }}
                                </td>
								<td class="total-amount" data-title="Total"><span>{{ Str::currency($checkout->total) }}</span></td>
							</tr>
                            @endforeach
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
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
										<ul>
											<li>Kode Unik<span>
													{{  $pesanan->code }}
                                            </span>

                                            </li>
                                                
                                            <li>Subtotal 
                                            <span>
                                                {{ Str::currency(Cart::where('name', auth()->user()->name)->sum('total')) }}
                                            </span>
                                            </li>
                                            <li>
                                           
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Total Amount -->
                    </div>

                </div>
			</div>
		</div>
	</div>
	<!--/ End Shopping checkout -->


    @endsection