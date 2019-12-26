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
      <div class="carousel-item">
        <a href="">
        <img src="{{asset('assets/img/banner/2.jpg')}}" width="100%" class="d-block w-300" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </a>
        </div>
      </div>
      <div class="carousel-item">
          <a href="">
        <img src="{{asset('assets/img/banner/3.jpg')}}" width="100%" class="d-block w-250" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-light">Redmi Note 7 dan Note 7 Pro telah Hadir </h5>
          <p class="text-light">Dual Camera the Perfect Picture taken</p>
        </div>
          </a>
      </div>
      <div class="carousel-item">
          <a href="">
        <img src="{{asset('assets/img/banner/4.jpg')}}" width="100%" class="d-block w-250" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p class="text-dark">The Perfect and Simple Phone</p>
        </div>
          </a>
      </div>
      <div class="carousel-item">
          <a href="">
        <img src="{{asset('assets/img/banner/5.jpg')}}" width="100%" class="d-block w-250" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p class="text-dark">For the minimalist user</p>
        </div>
          </a>
      </div>
    </div>
    <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
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
       </div>

       <div class="col-5">
         <hr>
       </div>
   </div>
 </div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-4" style="margin-right:-2%;">
      <a href="/product">
        <div class="card" style="width:100%">
                <img src="{{asset('assets/img/card/phones.jpg')}}" class="card-img-top" alt="...">
          </div>
        </a>
    </div>
    <div class="col-8">
      <div class="row mb-4">
        <div class="col-12">
          <a href="">
            <div class="card " style="width:100%;">
                <img src="{{asset('assets/img/card/acc.jpg')}}" class="card-img-top" alt="...">
              </div>
            </a>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="">
            <div class="card" style="width:100%">
                <img src="{{asset('assets/img/card/laptops.jpg')}}" class="card-img-top" alt="...">
              </div>
            </a>
        </div>
      </div>
      
    </div>
  </div>

</div>



@endsection

