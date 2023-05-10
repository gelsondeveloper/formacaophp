<?php
include('conexao.php');

function limpar_texto($str) {
    $pattern = '/[^0-9]';
    $replacement = '';
    return preg_replace($pattern, $replacement, $str);
}

$erro = false; 

if (count($_POST) > 0) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    
    if(empty($nome) || strlen($nome) < 0) {
        $erro = "Precisa preencher o Nome";
    }
    
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = "Precisa preencher O email";
    }
    
    if ($erro) {
        echo "<p><b>$erro</b></p>";
    } else {
        
    // Dados para inserção
    $nome = $nome;
    $email = $email;
    $telefone = $telefone;
    $data_nascimento =  $data_nascimento;

    // Prepara a consulta SQL com parâmetros
    $sql = "INSERT INTO clientes (nome, email, telefone, data_nascimento) VALUES (:nome, :email, :telefone, :data_nascimento)";
    $stmt = $pdo->prepare($sql);
    
    // Executa a consulta com os valores dos parâmetros
    $stmt->execute(array(':nome' => $nome, ':email' => $email, ':telefone' => $telefone, ':data_nascimento' => $data_nascimento));
    
    echo "Inserção realizada com sucesso!";
    unset($_POST);
 
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
<input value="<?php if(isset($_POST['nome'])) echo $_POST['nome']?>" type="text" name="nome">
</p>
<p>
<label for="email">Email:</label>
<input value="<?php if(isset($_POST['email'])) echo $_POST['email']?>" type="email" name="email">
</p>
<p>
<label for="Telefone">Telefone:</label>
<input value="<?php if(isset($_POST['telefone'])) echo $_POST['telefone']?>" placeholder="Ex: +244 927474946" type="number" name="telefone">
</p>
<p>
<label for="data_nascimento">Data de Nascimento:</label>
<input value="<?php if(isset($_POST['data_nascimento'])) echo $_POST['data_nascimento']?>" type="date" name="data_nascimento">
</p>
<p>
<button name="salvar-cliente" type="submit">Salvar Cliente</button>
</p>


</form>

</div>

</body>
</html>

