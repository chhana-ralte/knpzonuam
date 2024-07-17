<!DOCTYPE html>
<html lang="en">
<head>
  <title>KNP Zonuam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/bial">KNP Zonuam</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="/hruaitute">Hruaitute</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/attmaster">Hminglamna</a>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="/search">Zawnawlna</a>
        </li>
      </ul>
      <form class="d-flex" action="/searchresult" method="get">
        <input class="form-control me-2" type="text" placeholder="Search" name=search>
        <!-- <button class="btn btn-primary" type="submit">Search</button> -->
      </form>
      <ul class="navbar-nav me-auto">
      @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">{{ auth()->user()->username }}</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Change password</a></li>
            <li><button class="dropdown-item" form="logout-form">Logout</button></li>
          </ul>
          </li>
            <form method="post" id="logout-form" action="/logout" type="hidden">
              @csrf
            </form>
      @else
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>    
      @endif
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mt-5">
  <div class="container p-2 border shadow">
  <p align="center"><h3>{{ $heading }}</h3></p></div>
  {{ $slot }}
</div>

</body>
</html>


