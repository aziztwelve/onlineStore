<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }} ">
	<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
	<div id="app">

		<Myheader></Myheader>
			<router-link to="/one/home"> Home</router-link>
    		<router-link to="/one/about"> About</router-link>
		<Myfooter></Myfooter>


	</div>
	

	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>