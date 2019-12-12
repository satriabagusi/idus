<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/animate-css/animate.css">
    <!-- Main Css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>
<body>

    <!--================Header Menu Area =================-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top " style="font-weight: 600;" style="position:relative;">
      <div class="container ">
        <a class="navbar-brand" href="/"><img src="{{url('assets/img/logo.png')}}" alt="" width="140px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                @guest
              <a class="nav-link" href="/" data-toggle="modal" data-target="#loginModal">My Account</a>
              @else
              <a class="nav-link" href="/" data-toggle="modal" data-target="#loginModal">My Account</a>
              @endguest
            </li>
            <li class="nav-item">
              <div class="btn-group">
                <a class="nav-link" type="button" data-toggle="dropdown" >
                  <i class="fas fa-search "></i>
                </a>
                <div class="dropdown-menu p-2 bg-secondary">
                  <form action="">
                    <div class="input-group">
                      <input type="text" class="form-control form-control-sm" id="search" name="search" placeholder="Cari Produk..">
                      <div class="input-group-prepend">
                        <button class="btn btn-primary rounded-right btn-sm" id="search"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="btn-group">
                <a class="nav-link" type="button" data-toggle="dropdown" >
                  <i class="fas fa-shopping-cart"></i>
                </a>
                <div class="dropdown-menu p-2">
                    <p class="text-center"><small>Keranjang Kosong</small></p>
                <hr>
                  @guest
                  <div class="text-center">
                  <button type="button" class="btn btn-outline-secondary btn-sm text-center rounded" data-toggle="modal" data-target="#loginModal">
                   <i class="fa fa-user"></i>   Login
                  </button>
                  </div>
                  @else
                  <div class="text-center">
                      <p class="text-center"><small>{{Auth::user()->nama}}</small></p>
                  </div>
                  @endguest

                </div>
              </div>
            </li>
            
          </ul>
        </div>

      </div>
      </nav>
    </div>
<!-- Header Menu Area -->

<!-- container -->

    @yield('container')

<!-- container -->



<!-- Modal Section -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalCenter">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-5 offset-md-5 text-md-right">
                        <a class="btn btn-link" href="{{ route('register') }}">
                            {{ __('Tidak Punya Akun?') }}
                        </a>
                        <button type="submit" class="btn btn-success btn-block">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
<!-- Modal Section -->




 <!-- ================ start footer Area ================= -->
 <footer class="footer-area bg-dark mt-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>About Us</h4>
                    <p>iDus adalah aplikasi penjualan suatu produk dengan spesifik barang yang dijual ialah gadget atau biasa di sebut e-commerce yang berbasis web.</p>
                    <div class="footer-logo">
                        <img src="assets/img/iDus.png" width="300px">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Contact Info</h4>
                    <div class="footer-address">
                        <p>Address : Jl. Setiabudhi 193 Bandung, Jawa Barat. Indonesia</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>Ini form berita, coba kalian masukan email kalian disini untuk berlangganan informasi dari web ini. kalo di youtube sih namanya subscribe</p>

                    <div class="form-wrap" id="">
                        <form action="">
                        <div class="input-group">
                            <input type="email" class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                            <div class="input-group-append">
                                <button class="btn click-btn" type="submit">
                                    <i class="fab fa-telegram-plane"></i>
                                </button>
                            </div>
                        </div>
                        <div style="position: absolute; left: -5000px;">
                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                        </div>

                        <div class="info"></div>
                    </form>
                </div>

            </div>
        </div>
        <div class="footer-bottom row align-items-center text-center text-lg-left no-gutters">
            <p class="footer-text m-0 col-lg-8 col-md-12">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | iDus corporation.</p>
            <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                <a href="https://www.facebook.com"><i class="ti-facebook"></i></a>
                <a href="https://www.twitter.com"><i class="ti-twitter-alt"></i></a>
                <a href="https://www.linkedin.com"><i class="ti-linkedin"></i></a>
                <a href="https://www.instagram.com/anakygterbang"><i class="ti-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- ================ End footer Area ================= -->




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>

<script>
    $(document).ready(function(){
      $('[data-toggle="popover"]').popover();
    });

    $(document).ready(function() {
        // Transition effect for navbar 
        $(window).scroll(function() {
          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 200) { 
              $('.navbar').removeClass('bg-transparent');
              $('.navbar').addClass('bg-light');

          } else {
              $('.navbar').addClass('bg-transparent');
          }
        });
});
    </script>

</body>
</html>