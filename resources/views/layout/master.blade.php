<!doctype html>
<header>
  @include('layout.link')
</head>
<body>

  @include('layout.nav')


  @hasSection('content')


  
  @yield('content')



  @endif
 
 @include('layout.footer')
  
</body>
</html>