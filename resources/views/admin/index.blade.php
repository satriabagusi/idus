@extends('template.admin')
@section('title', 'iDus - Dashboard Admin')
@section('container')

<div class="container-fluid">
    <h1 class="display-4 mt-2">Admin Dashboard</h1>

    <div class="row mt-5">
        <div class="col">
            <h5 class="display-5">Selamat Datang, {{Auth::user()->nama}}</h5>
        </div>
    </div>
</div>





@for ($i = 0; $i < 10; $i++)
    <br>
@endfor
@endsection
