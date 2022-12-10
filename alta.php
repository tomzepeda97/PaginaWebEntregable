<?php  

    $nombres   = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $tienda    = $_POST['tienda'];
    $direccion = $_POST['direccion'];
    $correo    = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $conexion = mysqli_connect('localhost', 'root', '', 'alta_usuario');
    if($conexion){
        $sql = "INSERT INTO usuarios VALUES (NULL, '".$nombres."', '".$apellidos."', '".$tienda."', '".$direccion."', '".$correo."', '".$contraseña."')";
        $inserta = mysqli_query($conexion, $sql);
        echo "<script> alert('Usuario Registrado con Exito a P O X E T I K $nombre'); window.location='index.php' </script>";
    }else{
        echo "Sin Conexión...";
    }
?>
