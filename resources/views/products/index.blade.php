@extends('template/main')
@section('title', 'iDus - Unauthorized Reseller')
@section('container')


<!-- Carousel -->
<div class="bd-example">
  <div id="slide" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li  data-slide-to="0" class="active"></li>
      <li  data-slide-to="1"></li>
      <li  data-slide-to="2"></li>
      <li  data-slide-to="3"></li>
      <li  data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="">
        <img src="{{asset('assets/img/banner/1.jpg')}}" width="100%" class="d-block w-250" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p class="text-dark">Beli sekarang di iDus</p>
        </div>
      </a>
      </div>
      
<!-- Carousel -->

 <!-- Content -->

 <div class="container  mt-5 mb-5">
   <div class="row justify-content-center">
     <div class="col-5">
       <hr>
      </div>

       <div class="col-auto">
         <h3>Produk</h3>
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">Popular Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="{{asset('assets/img/banner/6.jpg')}}" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#">Gray Shoe</a></h2>
            <strong class="item-price">$20.00</strong>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="{{asset('assets/img/banner/6.jpg')}}" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>
            <strong class="item-price"><del>$46.00</del> $28.00</strong>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="{{asset('assets/img/banner/6.jpg')}}" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>
            <strong class="item-price"><del>$46.00</del> $28.00</strong>
          
        </div>
      </div>
      <div class="col-5">
       <hr>
      </div>

       <div class="col-auto">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="{{asset('assets/img/banner/6.jpg')}}" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#">Gray Shoe</a></h2>
            <strong class="item-price">$20.00</strong>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="{{asset('assets/img/banner/6.jpg')}}" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>
            <strong class="item-price"><del>$46.00</del> $28.00</strong>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="{{asset('assets/img/banner/6.jpg')}}" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>
            <strong class="item-price"><del>$46.00</del> $28.00</strong>
          
        </div>
      </div>
    </div>

       <div class="col-5">
         <hr>
       </div>
   </div>
 </div>

</div>

@endsection

