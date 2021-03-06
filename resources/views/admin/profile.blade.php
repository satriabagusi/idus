@extends('template.admin')
@section('title', 'iDus - Tambah Admin')
@section('container')

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



@endsection