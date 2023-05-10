<?php
include('conexao.php');
try {    
    // Prepara a consulta SQL
    $sql = "SELECT * FROM clientes";
    $stmt = $pdo->prepare($sql);
    
    // Executa a consulta
    $stmt->execute();
    
    // Obtém os resultados da consulta
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Processa os resultados
    foreach ($resultados as $linha) {
        echo $linha['nome'] . ' - ' . $linha['email'] . '<br>';
    }
} catch (PDOException $e) {
    echo "Erro ao consultar o banco de dados: " . $e->getMessage();
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <p>Estes são os clientes cadastrados no seu sistema:</p>
    <table>
        <thead>
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>TELEFONE</th>
            <th>NASCIMENTO</th>
            <th>DATA DE CRIAÇÃO</th>
        </thead>
        <tbody>
            <?php if($resultados == 0) { ?>
            <tr>
                <td colspan="7"></td>
             
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>