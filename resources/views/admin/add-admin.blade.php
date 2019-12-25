@extends('template.admin')
@section('title', 'iDus - Tambah Admin')
@section('container')

<div class="container-fluid mt-2 mb-5">
    
    <!-- Alert Session -->
    @if (Session::has('message'))
    <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">
             {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <!-- Alert Session -->


    <div class="col-4">
        <h1 class="display-4">Tambah Admin</h1>
        <hr>
    </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-5">
                    <form method="POST" action="{{ route('add-admin') }}" enctype="multipart/form-data">
                        @csrf
                            <label for="nama" class=" col-form-label ">{{ __('Nama Lengkap') }}</label>

                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}"  >
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="email" class=" col-form-label ">{{ __('E-Mail') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  >
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                        
                            <label for="password" class=" col-form-label ">{{ __('Password') }}</label>
                            
                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  >
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        
                            <label for="password-confirm" class=" col-form-label ">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  >

                            <label for="no_hp" class=" col-form-label ">{{ __('Nomor Handphone') }}</label>
                                <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}"  maxlength="14">
                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                            <label for="alamat" class=" col-form-label ">{{ __('Alamat Lengkap') }}</label>
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}"  >
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="avatar" class=" col-form-label ">{{ __('Avatar') }}</label>
                                <div class="col-md-12 pr-2">
                                <input type="file" accept=".jpg, .png, .jpeg |image/*" class="custom-file-input @error('alamat') is-invalid @enderror" id="avatar" name="avatar" >
                                <label class="custom-file-label" for="avatar">Pilih foto...</label>
                                @error('avatar')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror

                                <button type="submit" class="btn btn-primary mt-4 mb-5">
                                    {{ __('Tambah Admin') }}
                                </button>
                    </form>
                </div>
            </div>
    </div>
</div>
<br>
<br>


@endsection