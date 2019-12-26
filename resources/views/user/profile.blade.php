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

<body>

    <div class="container-fluid mt-2 mb-5">
        <div class="col-4">
            <h1 class="display-4">Profil Saya</h1>
            <hr>
        </div>
</div>

    <div class="row ml-5">
        <div class="col-3">
            <img src="{{url('assets/img/user/', Auth::user()->avatar)}}" alt="" class="img-fluid float-left"  style="border-radius:60%;vertical-align: middle;width: 200px;height: 200px;">
        </div>
        <div class="col-5">
            <div class="row justify-content-end ">
                <a href="/admin/profile/gantipass/{{Auth::user()->id}}" class="btn btn-info text-light"><i class="fas fa-key"></i></i> Ganti Password</a>
                <a href="/admin/profile/edit/{{Auth::user()->id}}" class="btn btn-info text-light ml-2"><i class="fas fa-user-edit"></i> Edit Profil</a>
            </div>
            <label for="nama" class="">Nama :</label>
            <input type="text" class="form-control" value=" {{Auth::user()->nama}}" disabled>
            <br>
            <label for="email" class="">Email :</label>
            <input type="text" class="form-control" value=" {{Auth::user()->email}}" disabled>
            <br>
            <label for="no_hp" class="">No HP :</label>
            <input type="text" class="form-control" value=" {{Auth::user()->no_hp}}" disabled>
        </div>  
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<script src="assets/js/script.js"></script>

</body>

