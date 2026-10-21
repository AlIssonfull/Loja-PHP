<?php require "./data/conexao.php";
    $sql = "Select * from usuarios";
    $resultado = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/listar-usuarios.css">
    <title>Listar Usuários</title>
</head>

<body>
    <?php include "./view/header.php" ?>
    
    <div class="Dlu">
        <h1>Usuarios</h1>
        <a href="/cadastrar-usuario.php" class="criar">criar usuarios</a>
    </div>

    <div class="usuarios">
        <?php while($usuario = $resultado->fetch_object()) :?>
        <div class="usuario">
            <div class="edit">
                <img src="https://placehold.co/200" alt="" class="ft">

                <a href="editar-usuario.php?id=<?= $usuario->id ?>"><img src="https://assets.streamlinehq.com/image/private/w_300,h_300,ar_1/f_auto/v1/icons/vector-icons-4/edit-flwwwz417de3u3nzvstgpu.png/edit-qtep4ftgzlsz4sl22a43m9.png?_a=DATAiZAAZAA0" alt=""></a>
            </div>

            <p>Id: <?= $usuario->id ?></p>
            <p>Nome: <?= $usuario->nome ?></p>
            <p>Email: <?= $usuario->email ?></p>
            <p>Senha: <?= $usuario->senha ?></p>
        </div>
        <?php endwhile; ?>
    </div>

    <?php include "./view/footer.php" ?>
</body>

</html>