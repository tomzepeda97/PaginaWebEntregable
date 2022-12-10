<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro P O X E T I K</title>
</head>
<nav class="navbar navbar-light" style="background-color: #BABA3B;"> <!--para el encabezado y menu-->
    <a class="navbar-brand" href="#"> P  O  X  E  T  I  K</a>
    <ul class="nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Plantas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Acerca de</a>
        </li>
      </ul>
</nav>
<body>      
     <section class="form-registro">
         <h4>Bienvenido a POXETIK, ¡Registrate!</h4>

         <?php 
          if(!empty($user)) {
            echo '<br>Bienvenido.'.$user['email'].'
            <br>Estas dentro!
            <a href="logout.php">Saliste!</a>';  
          }else{
        ?>

         <form action="alta.php" method="post">
         <input class="controles" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
         <input class="controles" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
         <input class="controles" type="text" name="tienda" id="tienda" placeholder="Ingrese El Nombre de su Tienda">
         <input class="controles" type="text" name="direccion" id="direccion" placeholder="Ingrese su Direccion">
         <input class="controles" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
         <input class="controles" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su Contraseña">
         <p>Estoy de Acuerdo con <a href="#">Terminos y Condiciones</a></p>
         
         <input class="botones" type="submit" value="Registrar">
         </form>
         <p><a href="#">¿Ya Tengo Una Cuenta?</a></p>
         <?php }?>
     </section>
</body>
</html>