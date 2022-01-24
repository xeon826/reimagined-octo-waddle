<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="antialiased">
  <header class='fixed top-0 left-0 w-full bg-sky-500/20'>
    <ul class='w-4/5 m-auto flex text-white text-lg font-extrabold py-4'>
      <li class='pr-6'><a href='/'>Home</a></li>
      <li class='pr-6'><a href='/wp_posts'>Recent Wordpress Posts</a></li>
      <li class='pr-6'><a href='/places'>Places Autocomplete</a></li>
    </ul>
  </header>
    <div class='pt-24 grid w-4/5 m-auto'>
        <h1 class='text-white grid-cols-12'>@yield('header')</h1>
        @yield('content')
    </div>
    <footer>
        <script type='text/javascript' src='{{ asset('js/app.js') }}'></script>
        <script src='https://maps.googleapis.com/maps/api/js?key={{ env('MAP_API_KEY') }}&callback=window.initMap&libraries=places&v=weekly' async defer></script>
    </footer>
</body>

</html>
