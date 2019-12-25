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
            <form action="">
            <img src="{{url('assets/img/user/', Auth::user()->avatar)}}" alt="" class="img-fluid rounded float-left" width="150px">
        </div>
        <div class="col-5">
            <div class="row justify-content-end">
                <a href="/admin/profile/{{Auth::user()->id}}" class="btn btn-danger text-light"><i class="fas fa-long-arrow-alt-left"></i> Batal</a>
            </div>
            <label for="nama" class="">Nama :</label>
            <input type="text" class="form-control" value=" {{Auth::user()->nama}}" >
            <br>
            <label for="email" class="">Email :</label>
            <input type="text" class="form-control" value=" {{Auth::user()->email}}" >
            <br>
            <label for="no_hp" class="">No HP :</label>
            <input type="text" class="form-control" value=" {{Auth::user()->no_hp}}">
            <br>
        </form>
        </div>  
    </div>
</div>



@endsection