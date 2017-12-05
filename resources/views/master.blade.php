<!DOCTYPE html>
<html>


<head>
	<title>@yield('title')</title>

	<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
        <script type="text/javascript" scr="{{ url('js/app.js') }}"></script>
</head>




<body>
@include('layouts.header')


@yield('content')


@include('layouts.footer')
</body>
</html>