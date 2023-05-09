<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

<form action="" method="POST">
    <h1>Formulário com PHP</h1>
    Nome: <input type="text" name="nome"><br><br>
    E-mail: <input type="email" name="email"> <br><br>
    website: <input type="url" name="website"> <br><br>
    Comentário: <textarea name="comentario" cols="30" rows="3"></textarea> <br><br>
    Gênero: <input name="genero" type="radio" value="Masculino"> Masculino
    <input type="radio" name="genero" value="Femenino"> Femenino
    <br><br>
    <button name="enviado" type="submit">Enviar</button>
    <h1>Dados enviados:</h1>

    <?php
    if(isset($_POST['enviado'])) {

        if (empty($_POST['nome']) || strlen($_POST['nome'] < 100)) {
            echo '<p class="error">Preencha o campo nome</p>';
            die();
        }

        if (empty($_POST['email'])|| filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo '<p class="error">Preencha o campo email</p>';
            die();
        }

        
        if (empty($_POST['website']) || filter_var($_POST['website'], FILTER_VALIDATE_URL)) {
            echo '<p class="error">Preencha corretamente o campo website</p>';
            die();
        }
        
        $genero = "Não selecionado";

        if (isset($_POST['genero'])) {
            $genero = $_POST['genero'];
            if ($genero != "maculino" && $genero != "feminino") {
                echo '<p class="error">Preencha corretamente o campo gênero</p>';
                die();
            }
        }

        echo '<p><b>Nome: </b>'.$_POST['nome'].'<p>';
        echo '<p><b>E-mail: </b>'.$_POST['email'].'<p>';
        echo '<p><b>website: </b>'.$_POST['website'].'<p>';
        echo '<p><b>Comentário: </b>'.$_POST['comentario'].'<p>';
        echo '<p><b>Gênero: </b>'.$genero.'<p>';
    }  
    
    ?>
</form>
    
</body>
</html>