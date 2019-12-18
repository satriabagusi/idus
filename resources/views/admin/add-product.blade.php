@extends('template.admin')

@section('container')

<div class="container-fluid">
    <h1 class="display-4 mt-2">Tambah Produk</h1>

    <div class="row mt-5 justify-content-center">
        <div class="col-5">
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                    <label for="nama_produk" class=" col-form-label ">{{ __('Nama Produk') }}</label>
                        <input id="nama_produk" type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{ old('nama_produk') }}"  >
                        @error('nama_produk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                        <label for="quantity" class=" col-form-label ">{{ __('Quantity') }}</label>
                        <input id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}"  >
                        @error('quantity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    <label for="jenis" class=" col-form-label ">{{ __('Jenis Produk') }}</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="jenis">
                        <option value="Handphone">Handphone</option>
                        <option value="Laptop">Laptop</option>
                        <option value="Aksesoris">Aksesoris</option>
                      </select>
                        @error('jenis')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                        <label for="harga" class=" col-form-label ">{{ __('Harga') }}</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                          </div>
                        <input id="harga" type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}"  >
                    </div>
                        @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                
                    <label for="deskripsi" class=" col-form-label ">{{ __('Deskripsi Produk') }}</label>
                        <textarea id="deskripsi" type="text-area" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}"  >
                        </textarea>
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <label for="image" class=" col-form-label ">{{ __('Gambar Produk') }}</label>
                        <div class="col-md-12 pr-2">
                        <input type="file" accept=".jpg, .png, .jpeg |image/*" class="custom-file-input @error('alamat') is-invalid @enderror" id="image" name="image" >
                        <label class="custom-file-label" for="image">Pilih foto...</label>
                        @error('image')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror

                        <button type="submit" class="btn btn-primary mt-4 offset-md-5">
                            {{ __('Register') }}
                        </button>
            </form>
        </div>
    </div>
</div>





@for ($i = 0; $i < 10; $i++)
    <br>
@endfor
@endsection
