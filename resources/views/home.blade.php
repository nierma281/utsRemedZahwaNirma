@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="row g-4">
  @foreach($profiles as $p)
  <div class="col-md-6">
    <div class="card shadow-sm">
      <img src="{{ asset('images/' . $p['image']) }}" class="card-img-top" style="height:260px;object-fit:cover;" alt="{{ $p['name'] }}">
      <div class="card-body">
        <h5 class="card-title">{{ $p['name'] }}</h5>
        <p class="card-text">{{ $p['bio'] }}</p>
        <p class="text-muted">{{ $p['id'] }}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection