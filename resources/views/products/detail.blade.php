@extends('template/main')
@section('title', 'iDus - Unauthorized Reseller')
@section('container')

 <!-- Content -->


 <div class="container mt-lg-5 mb-5">
   <br>
   
   
   <div class="row mb-3 mt-lg-5">
       <div class="col-4">
           <img src="{{url('assets/img/product/', $product->image)}}" class="img-fluid" width="250px">
        </div>
        
        <div class="col-5">
            <h1 class="mt-1 display-5" style="text-transform: capitalize;">{{$product->nama_produk}}</h1>
            <h5 class="card-title">Rp. {{number_format($product->harga ,0,',','.') }}</h5>
            <p class="card-text">{{$product->deskripsi}}</p>
            <form action="{{route('add-cart')}}" method="post" class="form-inline justify-content-between">
                @csrf
                Jumlah Stock : {{$product->quantity}}
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <input type="number" name="quantity" class="form-control form-group mr-2 ml-2 form-control-sm" value="1" min="1" max="{{$product->quantity}}" width="50px" >
                <button class="btn btn-info text-center btn-sm"><i class="fas fa-cart-plus mr-1"></i> Add to Cart</button>

            </form>
            <a href="#" class="btn btn-danger mt-2 btn-block">Beli Sekarang</a>
        </div>
    </div>
    </div>

</div>
<br><br><br>
@endsection

