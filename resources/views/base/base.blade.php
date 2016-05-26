<html>
<head>
	<title>@yield('title')</title>
	<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet"/>
	@yield('moreStyles')
</head>
<body>
	@yield('navbar')
	<div>
		@yield('content')
	</div>
	@yield('moreScripts')
</body>
</html>