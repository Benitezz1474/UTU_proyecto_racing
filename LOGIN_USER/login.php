
<?php

session_start();

 if(isset($_SESSION["user"])){
    header("location: ../vista.php");
 }

if(isset($_POST["Loguear"])){

   
    $error = "";
    //obtengo las variables del DOM
    $user = $_POST["user"];
    $password = $_POST["password"];

    if(!empty($user)){

        $user = filter_var($user, FILTER_SANITIZE_STRING);
        $user = trim($user);
        $user = strtolower($user);
    }

    else $error .= "Ingrese usuario <br>";

    if(!empty($password)){

        $password = filter_var($password, FILTER_SANITIZE_STRING);
        $password = trim($password);
        $password = strtolower($password);
        $password = md5($password);
    }

    else $error .= "Ingrese clave <br>";


    if(empty($error)){

        //realizamos la consulta SQL

        try{


            //preparo el link a la BD
            $link = new PDO("mysql: host = localhost; dbname=pruebas","root","");
            
            //Preguntamos si el usuario existe
            $SQL = "SELECT * FROM users WHERE usuario = :user AND clave = :pass LIMIT 1";
            $query = $link->prepare($SQL);
            $query->execute( array(":user" => $user, ":pass"=>$password) );

            $result = $query->fetch();
            $query->closeCursor();

            if($result == true){

                $_SESSION["user"] = $user;

                header("location: ../index.php");
            }

            else { 
                $error = "El usuario y/o claves son incorrectas";
            };

        } catch(PDOExecute $e){
            echo "Error al conectar con la BD";
        }
    }



}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../styles/login_registro.css">
</head>
<body>
<section>
    
<h1>Debes Loguearte para continuar</h1>

<h2>Todo el contenido de racing al alcance de tu mano</h2>

 <form action="login.php" method = "POST">
    <input type="text" name="user" placeholder = "Usuario"> <br>
    <input type="password" name="password" placeholder = "Clave"> <br>
    <input type="submit" value="Enviar" name = "Loguear">

 </form>

 <a href="registro.php">¿NO tenés usuario? Entrá acá</a>


 <?php if(isset($_POST["Loguear"])){ ?>
 <?php if(empty($error)): ?>

    <div class="success">
        <p> Datos Enviados Correctamente!! </p>
    </div>

    <?php else : ?>

        <div class="error">
            <p> <?php echo $error ?> </p>
        </div>

    <?php endif ?>
    <?php } ?>


</section>
</body>
</html>