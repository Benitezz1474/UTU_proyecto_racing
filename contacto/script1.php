<?php


if(isset($_POST['Enviar'])){
    
    $success;
    $error = "";


    $user = $_POST['user'];
    $email = $_POST['mail'];
    $message = $_POST['message'];

    if(empty($user)) $error .= "Ingrese user <br>";

    else if(!empty($user)){

        $user = filter_var($user, FILTER_SANITIZE_STRING);
        $user = trim($user);
        $user = strtolower($user);
    }

    if(empty($email)) $error .= "Ingrese mail <br>";

    else{

        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $email = trim($email);
            $email = htmlspecialchars($email);
        }
    }

    if(empty($message)) $error.= "Ingrese message <br>";

    else{

        $message = filter_var($message,FILTER_SANITIZE_STRING);
    }

    //en caso de que las validaciones estén bien hechas (SIN ERRORES) se enviará el formulario

    if(empty($error)){

        $success = true;

        //envair correo
    }

    

}

?>