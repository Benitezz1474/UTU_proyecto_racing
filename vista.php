<?php require "./Racing_Club/script.php"; ?>
<?php require "./Racing_Club/notice.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styleindex.css">
    <link rel="stylesheet" href="./Racing_Club/style.css">
    <script src="https://kit.fontawesome.com/7847242754.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<header>
        <div class="header__superior">
            <div class="logo">
            <img src="./IMGs/Logo.png" alt="">
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
                        <li><a href="index.php" id="selected"></a></li>
                        <li><a href="#">Equipo</a>
                            <ul>
                                <li><a href="./index.php">Actualidad</a></li>
                                <li><a href="calendario.html">Calendario</a></li>
                                <li><a href="resultado.html">Resultados</a></li>
                            </ul>
                        </li>
                        <li><a href="./login_Register/socios.php">Socios</a></li>
                        <li><a href="beneficios.html">Beneficios</a></li>
                        <li><a href="./contacto/index.php">Contacto</a></li>
                        <li><a href="#">Más</a>
                            <ul>
                                <li><a href="historia.html">Historia</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>

    </header>

    <!-- PORTADA -->

    <div class="portada">

    <div class="texto">
        <p>
            <!-- Mensaje Motivador -->
            Nunca pienso en las consecuencias de fallar un gran tiro… cuando se piensa
             en las consecuencias se está pensando en un resultado negativo - Michael Jordan
        </p>
        <button id = "btn_portada">GET STARTED</button>
    </div>
        
    </div>

    <article class = "postPortada">
        <section>
              <img src="./IMGs/marcas.jpg" alt="">
             <div>
                 <h2>Nuestro catálogo de marcas</h2>
                 <p>
                    En este mundial 2022 tenes que saber A DETALLE quienes son los patrocinadores mas destacados
                 </p>
             </div>
        </section>
        <section>
              <img src="./IMGs/album.png" alt="">
             <div>
                 <h2>Album Qatar 2022</h2>
                 <p>
                    Todavia estás a tiempo de participar en nuestro sorteo!!
                 </p>
             </div>
        </section>
        <section>
              <img src="./IMGs/uniforme.jpg" alt="">
             <div>
                 <h2>¿Nuevo Racing?</h2>
                 <p>
                    El nuevo unifrome del team racing club ya está a la venta!!
                 </p>
             </div>
        </section>
    </article>

    <!-- VIDEO -->

    <div class="videoPortada">

    <iframe width="560" height="315" src="https://www.youtube.com/embed/xXh8ygqBWOA" title="YouTube video player" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <!-- TABLA DE JUGADORES -->

    <article class = "tablaFondo" >
        <h1>Tabla de informacion</h1>
        
        <div class="informacion">
        
        <ul>
            <li> Consultá TODOS los datos de CADA jugador del club, no te pierdas nada. </li>
    
        </ul>
                
        </div>
        
        <section class="ficha">
        
    <table>
        <thead>
            <tr>
                <td>Perfil</td> 
                <td>Nombre</td> 
                <td>Partidos</td> 
                <td>Minutos</td> 
                <td>Goles</td>
            </tr>
        </thead>
    
        <tbody>
    
        <?php  while($row = $query->fetch()){ ?>
    
            <tr>
                <td> <img src= <?php echo $row[1]; ?> alt=""></td>
                <td><?php echo $row[2] ?></td>
                <td><?php echo $row[3] ?></td>
                <td><?php echo $row[4] ?> <i class="fa-regular fa-clock icon"></i></td>
                <td><?php echo $row[5] ?> <i class="fa-solid fa-futbol icon"></i></td>
            </tr>
            <?php } ?>
            
            <?php $query->closeCursor(); ?>
        </tbody>
    </table>
    </section>
</article> 

<!-- NOTICIAS  -->

<article class = "notice">
    <h1>Ultimas NOTICIAS</h1>
    <h2>Todo lo que necesitas saber, enterate de TODO lo que sucede</h2>
      <nav>
        <ul>


        <?php while($row=$query_notice->fetch()){ ?>

           <figure >
                <a href= <?php echo "./Racing_Club/noticias.php?noticia=$row[0]"?> ><img src=<?php echo $row[1]?>  alt=""></a>
                <h2><?php echo $row[2]?></h2>
                <p>
                   <?php echo $row[3]?>
                </p>
                
                <div class="social">
                    <ul>
                        <li><a href="https://web.whatsapp.com/" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://es-la.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="https://www.tiktok.com/es/" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                    </ul>
                </div>
                
            </figure>


        <?php } ?>
        <?php $query_notice->closeCursor(); ?>


        </ul>
      </nav>
</article>

<footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="./IMGs/Logo.png" alt="">
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
                    <a href="https://www.facebook.com/RacingOficial/" target="_blank" class="fa fa-facebook i"></a>
                    <a href="https://www.instagram.com/racingcluburu/?hl=en" target="_blank" class="fa fa-instagram i"></a>
                    <a href="https://twitter.com/RacingClubUru?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" class="fa fa-twitter i"></a>
                    <a href="https://www.youtube.com/channel/UCt4dEzlsm68Qi_O6hVscSMA" target="_blank" class="fa fa-youtube i"></a>
                </div>
            </div>
        </div>

        <div class="grupo-2">
            <small>&copy; 2022 <b>AUF</b> - "La Escuelita" - Todos los derechos Reservados</small>
        </div>
                            
    </footer>


</body>
</html>

