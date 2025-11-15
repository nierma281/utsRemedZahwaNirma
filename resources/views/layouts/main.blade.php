<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title', 'Website')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/site.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container">
    <a class="navbar-brand" href="/">Home</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-3">
        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">2301010127 ZahwaAuliaPutri</a></li>
        <li class="nav-item"><a class="nav-link" href="#">2301010103 Nirmayana</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container my-4">
  @yield('content')
</main>

<footer class="border-top py-4 mt-5">
  <div class="container d-flex justify-content-between">
    <div>© 2025 Company, Inc</div>
    <div class="text-end">
      <small>Home &nbsp; About &nbsp; 2301010127 ZahwaAuliaPutri &nbsp; 2301010103 Nirmayana</small>
    </div>
  </div>
</footer>

</body>
</html>