<?php

// Dados da conexão com o banco de dados
$host = 'localhost';
$dbname = 'crud_clientes';
$username = 'root';
$password = '';

// Cria uma instância da classe PDO
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Executa uma consulta SQL
$sql = "SELECT * FROM clientes";
$resultado = $pdo->query($sql);
if ($resultado) {
    echo "<h3>Conectado com sucesso!</h3> ";
} else {
    echo "Erro de conexão com o banco de dados ".$pdo->connect_error;
}

?>