<!doctype html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<title>@yield('title', 'default title')</title>
	 
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width">
		@yield('meta')
	 
		<!-- stylesheets -->
		{{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
		@yield('styles')
		{{ HTML::style('public/css/app.css') }}
		<script>
			var URL = {
				'base' : '{{ URL::to('/') }}',
				'current' : '{{ URL::current() }}',
				'full' : '{{ URL::full() }}'
			};
		</script>
	</head>
<body>
 
 
@yield('navbar.prepend')
@include('app.navbar')
@yield('navbar.append')
 
 
<div id="main">
<div class="container">
 
@yield('main.prepend')
 
<div id="content">
@yield('content')
</div><!-- ./ #content -->
 
<div id="sidebar">
@yield('sidebar')
</div><!-- ./ #sidebar -->
 
@yield('main.append')
 
</div>
</div><!-- ./ #main -->
 
 
@yield('footer.prepend')
@include('app.footer')
@yield('footer.append')
 
 
<!-- scripts -->
{{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js') }}
{{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js') }}
@yield('scripts')
{{ HTML::script('public/js/app.js') }}
 
<script>

</script>
 
</body>
</html>