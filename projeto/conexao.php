<?php

// Dados da conexão com o banco de dados
$host = 'localhost';
$dbname = 'crud_clientes';
$username = 'root';
$password = '';

// Cria uma instância da classe PDO
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
// Define o modo de erros para exceções
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Executa uma consulta SQL
$sql = "SELECT * FROM clientes";
$resultado = $pdo->query($sql);
if ($resultado) {
    
} else {
    echo "Erro de conexão com o banco de dados ".$pdo->connect_error;
}

?>