<?php require "script1.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contacto">
    <link rel="stylesheet" href="../styles/styleindex.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>


    <title>Validar forms V2</title>
</head>
<body>

<header>
        <div class="header__superior">
            <div class="logo">
            <img src="../IMGs/Logo.png" alt="">
            </div>
        </div>    

        <div class="container__menu">

            <div class="menu">
               
                <input type="checkbox" id="check__menu">
                <label for="check__menu" id="label__check">

                    <i class="fas fa-bars icon__menu"></i>
                </label>
                <nav>
                    <ul>
                        <li><a href="../index.php" id="selected"></a></li>
                        <li><a href="#">Equipo</a>
                            <ul>
                                <li><a href="../index.php">Actualidad</a></li>
                                <li><a href="../calenadario.html">Calendario</a></li>
                                <li><a href="../resultado.html">Resultados</a></li>
                            </ul>
                        </li>
                        <li><a href="../Login_Register/socios.php">Socios</a></li>
                        <li><a href="../beneficios.html">Beneficios</a></li>
                        <li><a href="./index.php">Contacto</a></li>
                        <li><a href="#">Más</a>
                            <ul>
                                <li><a href="../historia.html">Historia</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>

    </header>




<form action= <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> method = "POST">

<input type="text" name="user" id="" placeholder = "Ingrese user" value = "">
<input type="email" name="mail" id="" placeholder ="Ingrese mail" value = "">
<textarea name="message" id="" cols="30" rows="10" placeholder ="Ingrese mensaje"></textarea>
<input type="submit" value="Enviar" name ="Enviar">

<?php if(!empty($error)){ ?>

    <div class = "error">
        <p> <?php echo $error ?> </p>
    </div>

<?php }?>


<?php if(!empty($success)){ ?>

    <div class="success">
        <p> Datos Enviados Correctamente!! </p>
    </div>


<?php } ?>
</form>


<footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                    <img src="../IMGs/Logo.png" alt="">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Racing Club de Montevideo es un club de fútbol de Montevideo en Uruguay. </p>
                <p>Actualmente participa en la Segunda División Profesional de Uruguay luego de su descenso al final de la temporada 2019.</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/RacingOficial/" target="_blank" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/racingcluburu/?hl=en" target="_blank" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/RacingClubUru?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" class="fa fa-twitter"></a>
                    <a href="https://www.youtube.com/channel/UCt4dEzlsm68Qi_O6hVscSMA" target="_blank" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>

        <div class="grupo-2">
            <small>&copy; 2022 <b>AUF</b> - "La Escuelita" - Todos los derechos Reservados</small>
        </div>
                            
    </footer>



    
</body>
</html>