<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Test Site</title>
    @include('modules.headScripts')
  </head>
  <body class="@yield('bodyClass')" data-simplebar>
    <header class="header @yield('header-class')">
      @hasSection('header')
        @yield('header')
      @endif
  	</header>
    <main>
     	@yield('content')
    </main>
    @hasSection('footer')
      @yield('footer')
    @endif
    @include('modules.footScripts')
  </body>
</html>