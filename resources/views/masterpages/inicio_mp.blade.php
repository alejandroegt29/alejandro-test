<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>inicio</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/css.css">
</head>
<body>
	
	<div id="app">
		<nav class="navbar navbar-default">
	  		<div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">WebSiteName</a>
		    </div>
			<ul>
				<li><a @click="ruta_index" href="#">vista1</a></li>
				<li><a @click="ruta_vista2" href="#">vista2</a></li>
				<li><a href="#">vista3</a></li>
			</ul>
		  </div>
		</nav>
	
		<div v-html="contenedor" >
		
		</div>
	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.4"></script>


<script>
	
	new Vue({
		el:"#app",
		data:{
			contenedor:[]
		},
		created:function (){
			this.ruta_index();
		},
		methods:{
			ruta_index:function (){
				
				 this.$http.get('/vista1').then(response => {

				   console.log(response.body);
				    this.contenedor = response.body;

				  }, response => {
				    // error callback
				  });
			},
			ruta_vista2:function (){
				
				 this.$http.get('/vista2').then(response => {

				   console.log(response.body);
				    this.contenedor = response.body;

				  }, response => {
				    // error callback
				  });
			}
		},

	})

</script>

</body>
</html>