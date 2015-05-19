<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf_token" content="{{ csrf_token() }}">
	<title>{{Config::get('prelaunch_site_title')}}</title>
	<link rel="stylesheet" href="{{ elixir('css/prelaunch.css') }}">
	<link href="{{ asset('favicon.ico') }}" rel="icon" type="image/x-icon" />
</head>
<body>
	@yield('content')
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
	@yield('pagescripts')
</body>
</html>