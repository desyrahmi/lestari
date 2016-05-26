<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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