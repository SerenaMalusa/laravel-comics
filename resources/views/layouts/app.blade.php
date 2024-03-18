<!DOCTYPE html>
<html lang="it">

<head>
  <!-- carachters and viewport tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- SEO tags -->
  <meta name="author" content="Serena Malusà" />
  <meta name="description" content="laravel exercise">

  <!-- title and icon -->
  <title>{{ env('APP_NAME')}} - @yield('title')</title>
  <link rel="icon" href="{{ url('/logo-small.ico') }}">

  <!-- css -->
  {{-- font awsome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  {{-- my css --}}
  @vite('resources/js/app.js')
  @yield('specific-css')
  
</head>

<body>

    <header>
        @include('partials.header')
    </header>
    <main>
        @include('partials.hero')
        
        <div class="container text-primary">

            @yield('main-content')
    
        </div>
    </main>
    <footer>
        @include('partials.footer')
    </footer>
    
</body>

</html>