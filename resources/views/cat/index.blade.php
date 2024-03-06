<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cat Index</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<body>

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
	  <div class="container mt-3">
		<h2>Cat List</h2>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, consequatur.</p>
		<a href="{{route('cats.create')}}">Add</a>&nbsp;&nbsp;<a href="{{route('cats.excel')}}">Excel</a>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>operate</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Amy</td>
					<td><a href="{{route('cats.edit')}}">edit</a>&nbsp;&nbsp;<a href="">del</a></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Amy</td>
					<td><a href="{{route('cats.edit')}}">edit</a>&nbsp;&nbsp;<a href="">del</a></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Amy</td>
					<td><a href="{{route('cats.edit')}}">edit</a>&nbsp;&nbsp;<a href="">del</a></td>
				</tr>
			</tbody>
		</table>
	  </div>
	
</body>
</html>