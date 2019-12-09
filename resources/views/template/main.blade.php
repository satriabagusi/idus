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
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

    <!--================Header Menu Area =================-->
    <nav class="navbar navbar-expand-lg navbar-light bg-gradient-warning justify-content-between shadow-sm sticky-top">
    <div class="container-fluid d-flex justify-content-around">
  <a class="navbar-brand" href="#"><img src="assets/img/iDus.png" width="140px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">xPhones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">xLaptops</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">xAccesories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">All Products</a>
      </li>
    </ul>

    <ul class="navbar-nav">
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-info" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:26px;"><i class="fab fa-opencart"></i></a>
    <div class="dropdown-menu">
    <br>
    <p class="small text-center">Keranjang Kosong</p>

      <a class="dropdown-item" href="#">Keranjang</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Sign In</a>
    </div>
  </li>
    </ul>
</nav>
<!-- Header Menu Area -->

<!-- container -->

    @yield('container')

<!-- container -->


<?php for($i=0; $i<=30; $i++): ?>
<br>
<?php endfor; ?>



 <!-- ================ start footer Area ================= -->
 <footer class="footer-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>About Us</h4>
                    <p>iDus adalah aplikasi penjualan suatu produk dengan spesifik barang yang dijual ialah gadget atau biasa di sebut e-commerce yang berbasis web.</p>
                    <div class="footer-logo">
                        <img src="assets/img/iDus.png" width="120px">
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

                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                        method="get">
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


</body>
</html>