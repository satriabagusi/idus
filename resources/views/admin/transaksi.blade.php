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
        @foreach ($transactions as $transaksi)
            
        @endforeach
    </div>



@endsection