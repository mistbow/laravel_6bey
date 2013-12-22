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
		{{ HTML::style('css/app.css') }}
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
 
 
<div class="container">
@if(Session::has('message'))
	<p class="alert">{{ Session::get('message') }}</p>
@else
<div class="alert alert-info">
	<a href="/">6bey又一次蛋疼的改版界面了</a>
</div> 
@endif
        
    <div class="row">
        <div class="span9">
            <div class="content-unit">
                @include('app.sort')
                @yield('content')
            </div><!-- end content-unit -->
            	@yield('topic_replies')
            	@yield('create_reply')
            </div> <!-- end span9 -->
            <div class="span3 sidebar">
               @yield('sidebar')
            </div><!-- end span3 -->
    </div><!-- end row-->
</div><!-- end container -->
 
 
@yield('footer.prepend')
@include('app.footer')
@yield('footer.append')
 
 
<!-- scripts -->
{{ HTML::script('http://code.jquery.com/jquery-latest.js') }}
{{ HTML::script('packages/bootstrap/js/bootstrap.min.js') }}
@yield('scripts')
{{ HTML::script('public/js/app.js') }}
 
<script>

</script>
 
</body>
</html>