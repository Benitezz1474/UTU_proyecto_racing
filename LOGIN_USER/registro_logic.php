<?php 


session_start();

 if(isset($_SESSION["user"])){
    header("location: ../vista.php");
 }

 if(isset($_POST["Registrar"])){

    $error = "";
    //obtengo las variables del DOM
    $user = $_POST["user"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

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


    if(!empty($password2)){

        $password2 = filter_var($password2, FILTER_SANITIZE_STRING);
        $password2 = trim($password2);
        $password2 = strtolower($password2);
        $password2 = md5($password2);
    }

    else $error .= "Repita la clave <br>";

    if($password != $password2) $error .= "Las claves no coinciden <br>";

     
    if(empty($error)){

        //realizamos la consulta SQL

        try{

            //preparo el link a la BD
            $link = new PDO("mysql: host = localhost; dbname=pruebas","root","");
            
            //Preguntamos si el usuario existe
            $SQL = "SELECT * FROM users WHERE usuario = :user LIMIT 1";
            $query = $link->prepare($SQL);
            $query->execute( array(":user" => $user) );

            $result = $query->fetch();
            $query->closeCursor();

            if($result == false){

                //en caso de que no exista el usuario, lo insertamos!

                $SQL2 = "INSERT INTO users VALUES(NULL, :user, :pass)";
                $query2 = $link->prepare($SQL2);
                $query2->execute( array("user" => $user, ":pass" => $password) );

                $success =  "Datos Ingresados con exito!!";

                $_SESSION["user"] = $user;

                header("location: ../index.php");
            }

            else { 
                $error = "El usuario ya existe";
            };

        } catch(PDOExecute $e){
            echo "Error al conectar con la BD";
        }
    }

    
 }

?>