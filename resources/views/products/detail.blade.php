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
            <a href="" class="btn btn-info text-center"><i class="fas fa-cart-plus mr-1"></i></a>
            <a href="#" class="btn btn-danger">Beli Sekarang</a>
        </div>
    </div>
    </div>

</div>
<br><br><br>
@endsection

