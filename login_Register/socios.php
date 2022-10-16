<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socio </title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/stylesoc.css">
    <link rel="stylesheet" href="../styles/styleindex.css">

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
                                <li><a href="../calendario.html">Calendario</a></li>
                                <li><a href="../resultado.html">Resultados</a></li>
                            </ul>
                        </li>
                        <li><a href="../Login_Register/socios.php">Socios</a></li>
                        <li><a href="../beneficios.html">Beneficios</a></li>
                        <li><a href="../contacto/index.php">Contacto</a></li>
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


        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para enterarte de los beneficios</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no sos socio de Racing?</h3>
                        <p>Regístrate para que puedas ser socio</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="./login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="clave">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="./registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="clave">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

           
           <a href="../LOGIN_USER/cerrar.php">
            <p class="cerrar">
                Cerrar Sesion
            </p>
           </a>
           

        </main>


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



        <script src="script.js"></script>

       
</body>
</html>