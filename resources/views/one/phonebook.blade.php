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
			<chat-message></chat-message>
			<chat-log></chat-log>
			<chat-composer></chat-composer>
			<add-card></add-card>
		</div>
		
		<script src="{{ asset('js/app.js') }}"></script>
	</body>
</html>