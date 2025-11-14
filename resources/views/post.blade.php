@extends('layout.main')

@section('title', $post['title'])

@section('content')
<div class="mb-3">
  <a href="{{ url('/about') }}" class="text-decoration-none">← kembali</a>
</div>

<div class="card mb-4">
  <img src="{{ asset('images/' . $post['image']) }}" class="card-img-top" style="height:420px;object-fit:cover;" alt="{{ $post['title'] }}">
  <div class="card-body">
    <h1 class="h3">{{ $post['title'] }}</h1>
    <p class="lead">{{ $post['excerpt'] }}</p>
    <hr>
    <p>{{ $post['body'] }}</p>
  </div>
</div>
@endsection