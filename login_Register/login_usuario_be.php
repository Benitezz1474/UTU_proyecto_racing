<?php

include 'conexion_be.php';

$correo = $_POST['correo'];
$clave = $_POST['clave'];


$validar_login = mysqli_query($conexion, "SELECT * FROM users2 WHERE correo = '$correo' AND clave = '$clave' ");


// $result = mysqli_fetch_row($validar_login);

var_dump($result);

if(mysqli_num_rows($validar_login) > 0){
    header("location: ../beneficios.html");
    exit;
}



// if(mysqli_affected_rows($conexion) > 0){
//     header("location: www.google.com");
// }

else{
    echo '
    <script>
        alert ("Usuario no existe,verifique los datos introducidos");
        window.location = "./socios.php";
    </script>
    ';
    exit;
}

?>