<?php

$db_name = "agenda";
$db_user = "root";
$db_pass = "password";
$host = "127.0.0.1";
$porta = 3307;

try{

    $conn = new PDO("mysql:dbname=$db_name;porta=$porta;host=$host", $db_user, $db_pass);
    echo "Conexão bem sucedida com o banco".$db_name;

}catch(PDOException $error){
   echo $error->getMessage()."<br />";
   echo $error->getCode()."<br/>";
   echo $error->getFile()."<br />";
}