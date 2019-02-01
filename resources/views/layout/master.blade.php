<!doctype html>
<header>
	@include('layout.link')
</head>
<body>
	<div id="app">
		
		@include('layout.nav')
		@hasSection('content')
		
		@yield('content')
		@endif
		
		@include('layout.footer')
	</div>
</body>
</html>