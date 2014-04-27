<!doctype html>
<html lang=en>
	<head>
		<meta charset="UTF-8">
		{{ HTML::style('css/mystyle.css') }}
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::script('js/jquery-1.11.0.min.js') }}
		{{ HTML::script('js/main.js') }}
	</head>
	<body>
		@yield('content')


	</body>
</html>