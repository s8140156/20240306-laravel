<!-- resources/views/layouts/app.blade.php -->
 
<html>
    <head>
        <title>App Name - @yield('title')</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        {{-- @section('sidebar')
            This is the master sidebar.
        @show --}}
		<nav class="navbar navbar-expand-sm bg-light navbar-light">
			<div class="container-fluid">
			  <ul class="navbar-nav">
				<li class="nav-item">
				  <a class="nav-link" href="{{route('cats.index')}}">Cats</a> <!--這是指route的路由名稱-->
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="{{route('dogs.index')}}">Dogs</a>
				</li>
			  </ul>
			</div>
		  </nav>
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>