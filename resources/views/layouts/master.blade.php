
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
	<link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="/css/navbar-top.css" rel="stylesheet">
     <link href="/css/sticky-footer.css" rel="stylesheet">
     @yield('scripts')
</head>

<body>
  @include('layouts.nav')
<main role='main' class='container-fluid'>
  <div class='jumbotron'>
  	@yield('main')
  </div>
</main>
@include('layouts.footer')
</body>
</html>