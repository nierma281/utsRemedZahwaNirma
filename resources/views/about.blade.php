@extends('layouts.main')

@section('title', 'About')

@section('content')
@foreach($posts as $post)
  <div class="card mb-4 shadow-sm">
    <img src="{{ asset('images/' . $post['image']) }}" class="card-img-top" style="height:360px;object-fit:cover;" alt="{{ $post['title'] }}">
    <div class="card-body text-center">
      <h3 class="card-title">{{ $post['title'] }}</h3>
      <p class="card-text">{{ $post['excerpt'] }}</p>
      <a href="{{ url('/post/' . $post['slug']) }}">Read More →</a>
    </div>
  </div>
@endforeach
@endsection