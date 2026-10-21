<?php require "./data/conexao.php";
$id = $_GET["id"] ?? 0;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    if ($nome == "" || $senha == "" || $email == "") {
        $mensagem_erro = "Preencha todos os campos";
    } else {
        $sql = "UPDATE usuarios SET nome='$nome' , senha= '$senha', email='$email' WHERE id=$id ";
        $conn->query($sql);
        header("Location: listar-usuarios.php");
    }
}

$sql = "SELECT * FROM usuarios WHERE id=$id";
$resultado = $conn->query($sql);
$usuario = $resultado->fetch_object();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cadastrar-usuario.css">
    <title>Editar usuario</title>
</head>

<body>
    <h1>Editar Usuario</h1>

    <form method="POST">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?= $usuario->nome ?>" autocomplete="off" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $usuario->email ?>" autocomplete="off" required>

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" value="<?= $usuario->senha ?>" autocomplete="off" required>

        <div>
            <button type="submit">Editar</button>
            <button type="submit">Excluir</button>
        </div>
    </form>
</body>

</html>