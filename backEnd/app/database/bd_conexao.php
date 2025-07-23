<?php

$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "password";
$db_name = "agenda";
$db_port = 3307;

try {
    $conn = new PDO("mysql:host=$db_host;port=$db_port;dbname=$db_name", $db_user, $db_pass);
    echo "Conexão bem sucedida com o banco $db_name";
} catch (PDOException $error) {
    echo $error->getMessage() . "<br />";
    echo $error->getCode() . "<br/>";
    echo $error->getFile() . "<br />";
}
