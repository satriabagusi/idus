@extends('template.auth')
@section('title', 'Keranjang')
@section('container')
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-auto">
        <h1 class="display-3">Keranjang</h1>
    </div>
</div>

<div class="container">
        <div class="row ">
            <div class="col-auto">

                <div class="card">
                    <div class="card-header">
                        Keranjang Belanja
                    </div>
                    <div class="card-body" width="120px">
                        @foreach ($carts as $cart)
                        <div class="row">
                            <div class="col-5">
                                <img src="{{url('assets/img/product', $cart->product->image)}}" alt="" width="150px" >
                            </div>
                            <div class="col-7">
                                <h5 class="card-title">{{$cart->product->nama_produk}}</h5>
                                <p class="card-text">Jumlah Pesanan : {{$cart->quantity}}</p>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                        <a href="/transaction/checkout/{{$cart->id}}" class="btn btn-info">Checkout</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection