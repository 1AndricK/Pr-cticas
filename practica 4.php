<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Practica 2 JavaScript | Login</title>
</head>
<body>
    <div class="container mt-5">
         <div class="card shadow">
             <div class="row py-2">
               <form action="" method="post">  
                  <input type="text" placeholder="Digita la letra a validar" id="letra" class="form-control">
                 <div class="col">
                     <input type="submit" value="validar" class="btn btn-sm btn-info" onclick="validar();">
                 </div>
                </form>
             </div>
         </div>
    </div>
<script>
    // crear la funcion 
    function validar(){
       // estraer los datos 
       letra = document.getElementById('letra').value;
       // validar que no este vacio
       if(letra == ''){
          document.write("No se puede validar si el campo esta vacio");
       }
       else{
          switch(letra){
             case 'a':
             case 'e':
             case 'i':
             case 'o':
             case 'u':
             document.write("La letra que digitaste es la: "+letra+" y es una vocal");
             break;
             default:
                 document.write("La letra que digitaste es la: "+letra+" y es una consonante");                
          }
       } 
    }
</script>    
<script src="js/bootstrap.min.js"></script>    
</body>
</html>