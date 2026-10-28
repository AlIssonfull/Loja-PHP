<?php 
require "./data/conexao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>

<body>
    <h1>LOGIN</h1>
    <div class="form">
        <form method="POST">
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" autocomplete="off" required placeholder="Coloque seu email">
            </div>

            <div>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" autocomplete="off" required placeholder="Coloque sua senha">
            </div>

            <div><button type="submit">Entrar</button></div>
        </form>
    </div>
</body>

</html>