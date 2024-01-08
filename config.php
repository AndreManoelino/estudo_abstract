<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "jogo_biblia";

$conn = new mysqli ($host, $user, $pass, $dbname);
if ($conn->connect_error){
    die("Falha na conexão com banco de dados: " . $conn->connect_error);


}


?>