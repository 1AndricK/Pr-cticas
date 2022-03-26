<?php
error_reporting(0);
  // mando llamar a la conexion de base de datos
  include 'include/conecta.php';
  if (isset($_POST["Registro"])) {
      $Nombre=$conecta-> real_escape_string ($POST("Nombre"));
      $Apellidos=$conecta-> real_escape_string ($POST("Apellidos"));
      $Telefono=$conecta-> real_escape_string ($POST("Telefono"));
      $Email=$conecta-> real_escape_string ($POST("Email"));
      $Fecha=$conecta-> real_escape_string ($POST("Fecha"));
      $Password=$conecta-> real_escape_string ($POST("Password"));
      $Nuser = "SELECT * usuarios WHERE Email = ´$Email´";
      $Vuser = $conecta->query($Nuser);
      if ($Vuser > 0) {
          $mensaje.="<div class=´alert alert-danger alert-dismissible fade´ role=´alert´>
                        <strong>Error de registro</strong> El Email ya se encuentra en la base de datos
                        <button type=´button´ class=´btn-close´ data-bs-disaiss=´alert´ sria-lab></button>          
                     </div>";
      }
            else {
                $Registro = "INSERT INTO usuarios.(Nombre,Apellidos,Telefono,Email,Fecha,Password)
                VALUES (´$Nombre´,´$Apellidos´,´$Telefono´,´$Email´,´$Fecha´,´$Password´)";
                $Inserta = $conecta->query($Registro);
                if ($Inserta > 0) {
                    $mensaje.="<div class=´alert alert-danger alert-dismissible fade´ role=´alert´>
                                    <strong>Error de registro</strong> El Email ya se encuentra en la base de datos
                                    <button type=´button´ class=´btn-close´ data-bs-disaiss=´alert´ sria-lab></button>          
                                </div>";
                }
            }
  }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registro de Usuario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row mt-4">
                 <h5 class="text-center">Registro de Usuario</h5>
            </div>
            <div class="row">
                <div class="card shadow">
                     <div class="container py-3">
                         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                             <input type="text" name="Nombre" placeholder="Nombre" class="form-control" required>
                             <input type="text" name="Apellidos" placeholder="Apellidos" class="form-control" required>
                             <input type="tel" name="Telefono" placeholder="Telefono" class="form-control" required>
                             <input type="email" name="Email" placeholder="Email" class="form-control" required>
                             <input type="date" name="Fecha" class="form-control" required>
                             <input type="password" name="pass" class="form-control" placeholder="Password" required>
                             <input type="submit" name="Registro" value="Registrar" class="btn btn-success btn-sm">
                         </form>
                     </div>
                </div>
            </div>
        </div>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>