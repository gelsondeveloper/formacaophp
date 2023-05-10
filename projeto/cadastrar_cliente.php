<?php
$erro = false; 

if (count($_POST) > 0) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];

    if(empty($nome) || strlen($nome) < 0) {
        $erro = "Precisa preencher o Nome";
    }

    if(empty($email) || strlen($email) < 0) {
        $erro = "Precisa preencher o Nome";
    }

    if(empty($telefone) || strlen($telefone) < 0) {
        $telefone = $telefone;
    }

    if ($erro) {
        echo "<p><b>$erro</b></p>";
    } else {
        
    }

    
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Clientes</title>
    <link rel="stylesheet" href="style-global.css">
</head>
<body>
    <h2 class="d-flex justify-content--center">Cadastrar Cliente</h2>
    <a href="/clientes.php">Voltar para a Lista</a>
    <div class="d-flex justify-content--center" style="border: 2px solid black">
        <form action="" method="POST">
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome">
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="email" name="email">
            </p>
            <p>
                <label for="Telefone">Telefone:</label>
                <input placeholder="Ex: +244 927474946" type="number" name="telefone">
            </p>
            <p>
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" name="data_nascimento">
            </p>
            <p>
                <button name="salvar-cliente" type="submit">Salvar Cliente</button>
            </p>
        
        
        </form>
        
    </div>
   
</body>
</html>

