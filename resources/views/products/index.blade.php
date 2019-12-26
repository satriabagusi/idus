@extends('template/main')
@section('title', 'iDus - Unauthorized Reseller')
@section('container')

 <!-- Content -->


 <div class="container mt-lg-5 mb-5">
   <br>
   <br>
   <br>
   <h1 class="mt-5 display-4">All Product</h1>
   <hr>

   <div class="container mt-5 mb-5">
    <br>
    <br>
    <br>
    
      <div class="col-sm-3">
        <h2>Handphones</h2>
        <br>
        </div>

        <div class="row">
          
          @foreach ($phones as $phone)
              <div class="col-4 mb-4 border-right">
                <a href="/products/detail/{{$phone->id}}" class="product-item md-height bg-gray d-block">
                  <img src="{{url('assets/img/product/', $phone->image)}}" alt="Image" class="img-fluid mb-4" width="160px;">
                </a>
                <h5 class="item-title"><a href="#" style="text-decoration:none;color:black;">{{$phone->nama_produk}}</a></h5>
                <p><a href="#" style="text-decoration:none;color:black;">{{$phone->deskripsi}}</a></p>
                <button type="submit" class="btn btn-info btn-block">beli</button>
              </div>
          @endforeach
        </div>

        <br>
        <br>
        <br>

      <div class="col-2">
        <h2>Laptops</h2>
        <br>
        </div>

        <div class="row">
          
          @foreach ($laptops as $laptop)
              <div class="col-4 mb-4 border-right">
                <a href="/products/detail/{{$laptop->id}}" class="product-item md-height bg-gray d-block">
                  <img src="{{url('assets/img/product/', $laptop->image)}}" alt="Image" class="img-fluid mb-4" width="160px;">
                </a>
                <h5 class="item-title"><a href="#" style="text-decoration:none;color:black;">{{$laptop->nama_produk}}</a></h5>
                <p><a href="#" style="text-decoration:none;color:black;">{{$laptop->deskripsi}}</a></p>
                <button class="btn btn-info btn-block">beli</button>
              </div>
          @endforeach
        </div>

        <br>
        <br>
        <br>

      <div class="col-2">
        <h2>Aksesoris</h2>
        <br>
        </div>

        <div class="row">
          
          @foreach ($accessories as $acc)
              <div class="col-4 mb-4 border-right">
                <a href="/products/detail/{{$acc->id}}" class="product-item md-height bg-gray d-block">
                  <img src="{{url('assets/img/product/', $acc->image)}}" alt="Image" class="img-fluid mb-4" width="160px;">
                </a>
                <h5 class="item-title"><a href="#" style="text-decoration:none;color:black;">{{$acc->nama_produk}}</a></h5>
                <p><a href="#" style="text-decoration:none;color:black;">{{$acc->deskripsi}}</a></p>
                <button class="btn btn-info btn-block">beli</button>
              </div>
          @endforeach
        </div>
</div>
</div>
   </div>
 </div>

@endsection

