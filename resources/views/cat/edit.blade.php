<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cat Create</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	{{-- <link rel="stylesheet" href="http://localhost/css/style.css"> --}}
	{{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
<body>
	{{-- <h1>Hello CSS PINK!!!</h1> --}}

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
	  <form action="{{route('cats.store')}}" method="post">
		@csrf
		<div class="container mt-3">
		  <h2>Cat Create</h2>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, consequatur.</p>
		  <div class="row">
			  <div class="col">name</div>
		  </div>
		  <div class="row">
			  <div class="col"><input type="text" class="form-control" name="name" id=""></div>
		  </div>
		  <div class="row">
			<div class="col">mobile</div>
		</div>
		<div class="row">
			<div class="col"><input type="text" class="form-control" name="mobile" id=""></div>
		</div>
		  <div class="row mt-3">
			<div class="d-grid gap-2"><button class="btn btn-success" type="submit">submit</button></div> <!--這邊傳送出去的button type=submit-->
		</div>
	</form>
</body>
</html>