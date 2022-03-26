<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Password</title>
</head>
<body>
      <div class="container">
          <div class="card shadow text-center mt-4">
              <h4>Password</h4><hr>
              <div class="row">
                  <div class="col">
                    <input type="text" id="usuario" placeholder="Digita tu usuario" class="form-control">
                  </div>
                  <div class="col">
                    <input type="password" id="password" placeholder="Digata tu password" class="form-control">
                  </div>
                  <div class="col">
                    <input type="password" id="Cpassword" placeholder="Confirma tu password" class="form-control">
                  </div>
              </div>
              <div class="row mt-3">
                  <div class="container">
                      <button class="btn btn-sm btn-info" onclick="programar();">Ingresar</button>
                  </div>
              </div>
          </div>
      </div>       
<script>
    function programar(){
        user = "Programador";
        pass = "paquito";
        usuario = document.getElementById('usuario').value; 
        password = document.getElementById('password').value;
        Cpassword = document.getElementById('Cpassword').value;
        if(usuario == '' || password == '' || Cpassword == ''){
            alert("Todos los campos deben contener información o no podras ingresar al sistema");
        }
        else{
            if(password == Cpassword){
                if(user == usuario && password == pass){
                   document.write("Bienvenido al sistema: "+usuario);
                }
                else{
                    alert("No tienes permisos para ingresar no eres usuario");
                }
            }
            else{
                alert("Las contraseñas no coniseden verificalo");
            }
        }
    }
</script>      
<script src="js/bootstrap.min.js"></script>    
</body>
</html>