
<?php


$noticia = isset($_GET['noticia']) ? $_GET['noticia'] : 1;

$link = new PDO('mysql:host=localhost;dbname=pruebas;charset=utf8','root','');

$SQL = "SELECT * FROM notice WHERE id = :id";

$query_notice = $link->prepare($SQL);
$query_notice->execute( array(":id" => $noticia) );




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="noticia.css">
    <link rel="stylesheet" href="../styles/styleindex.css">

    <title>Noticias</title>
</head>
<body>



<header>
        <div class="header__superior">
            <div class="logo">
                <img src="../IMGs/Logo.jpg" alt="">
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
                        <li><a href="../login_Register/socios.php">Socios</a></li>
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

    
    <section>
    <?php while($row = $query_notice->fetch()){ ?>
    
        <h1><?php echo $row[2]?></h1>
        <h2><?php echo $row[3]?></h2>
        <img src=<?php echo $row[1]?> alt="">

        <p>
            <?php echo substr($row[4],0,1000);?>
        </p>

        <p>
        <?php echo substr($row[4],1000,2000);?>

        </p>

        <p>
        <?php echo substr($row[4],3000,3100);?>

        </p>

        <p>
            <?php echo substr($row[4],3100,3500);?>
            
        </p>
        
        
        <?php }?>
        
    </section>
    
    
    <a href="../index.php"><button>Volver a las noticias</button></a>

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