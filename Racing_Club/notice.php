<?php

try{

    
//LINK PDO
$link = new PDO('mysql:host=localhost;dbname=pruebas;charset=utf8','root','');
//Sentencia SQL
$SQL = "SELECT * FROM notice";
//Ejecutamos la sentencia SQL
$query_notice = $link->prepare($SQL);
$query_notice -> execute();
//Cierro la sentencia para ejecutar otra

}catch(Exception $e){
    echo "Eror al conectar con la BD, informar a Fernando Benitez o GeanLuca Leon";
}

?>