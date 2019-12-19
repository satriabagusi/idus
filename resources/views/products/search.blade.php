@extends('template/main')
@section('title', 'iDus - Unauthorized Reseller')
@section('container')

 <!-- Content -->


 <div class="container mt-lg-5 mb-5">
   <br>
   <h1 class="mt-5 display-4">Cari Produk</h1>

   <div class="container mt-5">
    <br><br><br>


        <div class="row">
          @forelse ($products as $product)
              <div class="col-auto mb-4 border-right">
                <a href="#" class="product-item md-height bg-gray d-block">
                  <img src="{{url('assets/img/product/', $product->image)}}" alt="Image" class="img-fluid" width="190px;">
                </a>
                <h4 class="item-title"><a href="#" style="text-decoration:none;color:black;">{{$product->nama_produk}}</a></h4>
              </div>
              @empty
                  <div class="row">
                <div class="col-auto">
                  <h4>
                    Tidak menemukan <b>"{{$search}}"</b>
                  </h4>
                </div>
              </div>
          @endforelse
        </div>

</div>
</div>
   </div>
 </div>

@endsection

