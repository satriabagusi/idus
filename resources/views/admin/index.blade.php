@extends('template.admin')

@section('container')

<div class="container ">
    <h1 class="display-4 mt-5">Admin Dashboard</h1>
</div>



@for ($i = 0; $i < 10; $i++)
    <br>
@endfor
@endsection
