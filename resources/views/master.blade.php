<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Basics</title>

    @include('include.style')
  </head>
  <body>
    @include('include.navbar')

    <div class="container">

        @yield('content')

    </div>


    @include('include.script')
  </body>
</html>
