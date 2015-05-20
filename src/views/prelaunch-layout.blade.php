<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{Config::get('prelaunch_site_title')}}</title>
</head>
<body>
	@yield('content')
	<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>