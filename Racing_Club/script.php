<?php

try{

    
//LINK PDO
$link = new PDO('mysql:host=localhost;dbname=pruebas;charset=utf8','root','');
//Sentencia SQL
$SQL = "SELECT * FROM racing";
//Ejecutamos la sentencia SQL
$query = $link->prepare($SQL);
$query -> execute();
//Cierro la sentencia para ejecutar otra


}catch(Exception $e){
    echo "Eror al conectar con la BD, informar a Fernando Benitez o GeanLuca Leon";
}

?>