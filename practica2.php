<?php
include 'include/conecta.php';
if(isset($_POST['registro'])){
$descripcion = $_POST['descripcion']; 
$Precio = $_POST['precio'];
if($descripcion == ''){
    echo "Necesito la descripcion";
}
else if($Precio == ''){
 echo "Necesito el Precio";
}
else{
  $registro = "INSERT INTO producto(Descripcion,Precio)VALUES('$descripcion','$Precio')";
  $registros = $conecta->query($registro);
  if($registros > 0){
      echo "Registro Exitoso";
  }  
  else{
      echo "Error al registrar en la base de datos";
  }
}


}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
      <div class="container py-4">
           <h1 class="text-center">Registro</h1>
            <div class="card shadow">
             <div class="row py-5 container">
               <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                   <input type="text" placeholder="Descripción de producto" name="descripcion" class="form-control">
                   <input type="text" placeholder="Precio" name="precio" class="form-control mt-2">
                   <input type="submit" name="registro" value="Registro" class="btn btn-sm btn-success mt-3">
               </form>  
              </div>
            </div>
      </div>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>