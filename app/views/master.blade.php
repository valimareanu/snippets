<!doctype html>
<html lang="en">
<head>
	<title></title>
	{{ HTML::style('css/vendors/bootstrap.css') }}
	{{ HTML::style('css/main.css') }}

	@yield('stylesheets')
	
</head>
<body>
	<div class="container">
		@yield('container')
	</div>
	{{ HTML::script('js/vendors/jquery.js') }}
	{{ HTML::script('js/vendors/tabby.js') }}
		
	@yield('scripts')

	<script type="text/javascript">
		$('textarea').tabby();
	</script>
</body>
</html>
