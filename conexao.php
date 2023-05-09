<?php

$hostname = "localhost";
$bancoDeDados = "teste";
$usuario = "root";
$senha = "";


$mysqli = new mysqli($hostname, $usuario, $senha, $bancoDeDados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (".$mysqli->connect_errno.")".$mysqli->connect_error;
} else {
    echo "<h2>Conectado com sucesso!</h2>";
}

?>