<?php
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $email=$_POST["email"];
     
    include "conexion.php"; //se vincula con el arhivo conexión. ../ es para retroceder un espacio de  carpeta (son rutas de los frameworks)
    
     $conn=Conectar(); //conecta la conexión
     $sql = "INSERT INTO `usuario` (`Nombre`, `Apellido`, `Correo_electronico`) VALUES ('$nombre', '$apellido', '$email')";

     //echo "<br>".$sql; //verifica si la consulta es correcta
     $redirectURL = 'http://localhost:8888/RETRO/index.html';

     if ($conn->query($sql) === TRUE) {
         echo '<script>alert("Registro guardado exitosamente"); window.location.href = "' . $redirectURL . '";</script>';
     } else {
         echo '<script>alert("Error al guardar el registro: ' . $conn->error . '");</script>';
     }
     Cerrar($conn);
    
?>