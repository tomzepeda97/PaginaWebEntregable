<?php
    require 'database.php';

    $message = '';

    if (!empty($_POST['email'])&&!empty($_POST['password'])){
      $sql = "INSERT INTO alta_usuario (email, password) VALUES (:email, :password)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':email', $_POST['email']);
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $stmt->bindParam(':password', $password);

      if ($stmt->execute()){
        $message = 'Alta De Usuario con Éxito!';
      } else {
        $message = 'Alta De Usuario Incorrecto!';
      }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Singup</title>
</head>
<nav class="navbar navbar-light" style="background-color: #BABA3B;"> <!--para el encabezado y menu-->
    <a class="navbar-brand" href="#"> P  O  X  E  T  I  K</a>
    <ul class="nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Plantas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index2.php">Registrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Acerca de</a>
        </li>
      </ul>
</nav>
<body>
    <?php if(!empty($message)): ?>
    <p><?= $message ?></p>
    <?php endif; ?>

<section class="form-registro">
         <h4>Bienvenido a P O X E T I K, ¡Ingresa!</h4>
    <form action="login.php" method="post">
         <input class="controles" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
         <input class="controles" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su Contraseña">
        <input class="botones" type="submit" value="Ingresar">
    </form>
</nav>
</section>
</body>
</html>