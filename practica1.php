<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/Bootstrap.min.css">
	<title>Practica Bootstrap | Js | Php</title>
</head>
<body>
  <div class="row d-flex justify-content-center">
  	 <h2 class="text-center display-6 mt-5">Registro</h2>
  	 <div class="col-sm-10 col-md-10 col-lg-10 py-5">
  	 	<div class="card shadow bg-light">
  	 		<div class="container">
  	 			<form action="" method="Post">
  	 				<input type="text" class="form-control mt-3" name="Nombre" id="Nombre" placeholder="Nombre">
  	 				<input type="date" class="form-control mt-3" name="Edad" id="Edad" placeholder="Edad">
  	 				<textarea name="Direccion" id="Dirieccion" class="form-control mt-3" placeholder="Direccion"></textarea>
  	 				<input type="tel" class="form-control mt-3" name="Telefono" id="Telefono" placeholder="Telefono" >
  	 				<input type="email" class="form-control mt-3" name="Email" id="Email" placeholder="Email">
  	 				<input type="submit" value="Enviar" onclick="Enviar();" class="btn btn-sm btn-success mt-3">
  	 			</form>
  	 		</div>
  	 	</div>
  	 </div>
  </div>
<script>
	function Enviar(){
		campo = document.getElementById('Nombre').value;
		campo1 = document.getElementById('Edad').value;
		campo2 = document.getElementById('Dirieccion').value;
		campo3 = document.getElementById('Telefono').value;
		campo4 = document.getElementById('Email').value;
		if(campo == ''){
          alert("Por favor digita tu Nombre no puede estar vacio");
		}
		else if(campo1 == ''){
          alert("Por favor digita tu Edad no puede estar vacio");
		}
		else if(campo2 == ''){
          alert("Por favor digita tu Direccion no puede estar vacio");
		}
        else if(campo3 == ''){
          alert("Por favor digita tu Telefono no puede estar vacio");
		}
		else if(campo4 == ''){
          alert("Por favor Email tu Edad no puede estar vacio");
		}
         	 window.location.assign("registro.php")
	}
</script>
<script src="js/Bootstrap.min.js"></script>
</body>
</html>