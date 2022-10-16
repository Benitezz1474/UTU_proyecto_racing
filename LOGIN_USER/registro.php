
<?php require_once "registro_logic.php" ?>


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
    
<h1>Debes registrarte para continuar</h1>

<h2>Todo el contenido de racing al alcance de tu mano</h2>

 <form action="registro.php" method = "POST">
    <input type="text" name="user" placeholder = "Usuario"> <br>
    <input type="password" name="password" placeholder = "Clave"> <br>
    <input type="password" name="password2" placeholder = "Repetir Clave"> <br>
    <input type="submit" value="Enviar" name = "Registrar">

 </form>

 <a href="login.php">¿Ya tenés usuario? Entrá acá</a>

 <?php if(isset($_POST["Registrar"])){ ?>
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