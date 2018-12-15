<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css" />
</head>

<body>
	@include('includes.header')
	<div class="container">
		@yield('content')
		<br/>
		@include('includes.messages')
	</div>
	
	<script type="text/javascript" src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
		(function(){
			CKEDITOR.replace('article-ckeditor');
		})();
	</script>
</body>
</html>