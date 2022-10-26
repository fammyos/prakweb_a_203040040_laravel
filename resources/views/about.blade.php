@extends('layouts.main')

@section('container')
<h1 class="mb-4 mt-4">Halaman about</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail">
@endsection