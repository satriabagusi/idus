@extends('template.admin')
@section('title', 'iDus - Tambah Admin')
@section('container')

<div class="container-fluid mt-2 mb-5">
        <div class="col-4">
            <h1 class="display-4">Status Transaksi</h1>
            <hr>
        </div>
</div>

{{-- @foreach ($transactions as $transaksi) --}}
        <div class="row ml-5 ">
            <div class="col-6 ">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-primary">Nama Pembeli</li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{url('assets/img/product/1577279121.jpg')}}" alt="" width="120px">
                            </div>
                            <div class="col-5">
                                Nama barang
                                <br>
                                Jumlah :
                            </div>
                        </div>
                        <hr>
                    </li>
                </ul>
            </div>
        </div>
        {{-- @endforeach --}}



@endsection