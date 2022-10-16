<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

//Encriptar clave
// $clave = hash('sha512', $clave);
// $clave = md5($clave);


$query = "INSERT INTO users2(nombre_completo, correo, usuario, clave) 
           VALUES('$nombre_completo', '$correo', '$usuario', '$clave')";


//Verificar Correo no se repita

$verificar_correo = mysqli_query($conexion, "SELECT * FROM users2 WHERE correo='correo' ");
if(mysqli_num_rows($verificar_correo) > 0){
    echo '
     <script>
          alert("Este correo esta registrado");
          window.location = "./socios.php";
     </script>
    ';
    exit();
}


//Verificar nombre que no se repita

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM users2 WHERE usuario='usuario' ");
if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
     <script>
          alert("Este usuario esta registrado");
          window.location = "./socios.php";
     </script>
    ';
    exit();
}


$ejecutar = mysqli_query($conexion, $query);
if($ejecutar){
    echo '
      <script>
           alert("Usuario Almacenado exitosamenete");
           window.location = "./socios.php";
      </script>
    ';
}else{
    echo '
      <script>
           alert("Intentalo de nuevo usuario no almacenado");
           window.location = "./socios.php";
      </script>
    ';
}
 mysqli_close($conexion);
?>