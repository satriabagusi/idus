<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/simple-sidebar.css')}}">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>
<body style="font-family:'Quicksand';font-weight:600;">

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading  navbar-dark">Admin Dashboard </div>
      <div class="list-group list-group-flush">
        <a href="/admin" class="list-group-item list-group-item-action bg-light"><i class="fas fa-home"></i> Home</a>
        <a href="/admin/add-product" class="list-group-item list-group-item-action bg-light"><i class="fas fa-plus"></i> Tambah Produk</a>
        <a href="/admin/add-admin" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user-plus"></i> Tambah Admin</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-exchange-alt"></i> Status Transaksi</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user-alt"></i> Profile</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-bars"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-angle-left"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/">Home </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">{{Auth::user()->nama}}</a>
                <div class="dropdown-divider"></div>
                <form action="{{route('logout')}}" method="post">
                  @csrf
                <button class="dropdown-item" href="#">Logout</button>
                </form>
              </div>
            </li>
          </ul>
        </div>
      </nav>

<!-- container -->

    @yield('container')

<!-- container -->






<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<script src="assets/js/script.js"></script>
<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    $(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
  </script>

</body>
</html>