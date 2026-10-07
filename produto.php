<?php include "./data/produtos.php";
$id = $_GET['id'];
$produtoSelecionado = null;
for ($i = 0; $id < count($produtos); $i++) {
    if ($produtos[$i]->id == $id) {
        $produtoSelecionado = $produtos[$i];
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/produto.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>
        Lojinha | <?= $produtoSelecionado ? $produtoSelecionado->nome : "Produto não encontrado" ?>
    </title>
</head>

<body>
    <?php include "./view/header.php" ?>

    <main>
        <img src="<?= $produtoSelecionado->imagem ?>" alt="<?= $produtoSelecionado->nome ?>">

        <div class="infos">
            <h1><?= $produtoSelecionado->nome ?></h1>
            <h2>Descrição: <?= $produtoSelecionado->descricao ?></h2>

            <div class="info">
                <p>Preço: R$<?= $produtoSelecionado->preco ?></p>
                <p>Estoque: <?= $produtoSelecionado->estoque ?></p>
                <p>Marca: <?= $produtoSelecionado->marca ?></p>
            </div>

            <div class="comprar">
                <p class="botao compra">Comprar</p>
                <p class="botao carrinho">Adicionar ao Carrinho</p>
            </div>
        </div>
    </main>

    <?php include "./view/footer.php" ?>
</body>

</html>