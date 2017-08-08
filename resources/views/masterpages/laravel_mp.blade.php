<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/css.css">
</head>
<body>

	
	<nav class="navbar navbar-default">
	  		<div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">WebSiteName</a>
		    </div>
			<ul>
				@if (Session::has('activar'))
					<li><a href="desactivar">Desactivar</a></li>
				@endif

				@if (empty(Session::get('activar')))
				<li><a href="activar">activar</a></li>
				@endif
				<li><a href="view1">view1</a></li>
				<li><a href="view2">view2</a></li>
				<li><a href="view3">view3</a></li>
				<li>en {{Session::get('activar')}} </li>
			
				
				

			</ul>
		  </div>
		</nav>

		@yield('content')

		@if (Session::has('activar'))
			
			<script>
				alert("activo");
			</script>

		@endif
</body>
</html>