<?php

include "../infra/conexao.php";

$id = $_GET['id'];
$sql = "SELECT * FROM brinquedos WHERE id = ?";
$resultado = mysqli_query($conexao, $sql);

$brinquedo = mysqli_fetch_assoc($resultado);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Brinquedo</title>
</head>
<body>

<header>
    <h1>Editar Brinquedo</h1>
</header>

<main>
    <h2>Editar Brinquedo</h2> 
    <form action="public/atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $brinquedo['id']; ?>">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $brinquedo['nome']; ?>" required>

        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" name="categoria" value="<?php echo $brinquedo['categoria']; ?>" required>

        <label for="faixa">Faixa Etária:</label>
        <input type="text" id="faixa" name="faixa" value="<?php echo $brinquedo['faixa_etaria']; ?>" required>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" value="<?php echo $brinquedo['preco']; ?>" required>

        <label for="quantidade">Quantidade em Estoque:</label>
        <input type="number" id="quantidade" name="quantidade" min="0" value="<?php echo $brinquedo['quantidade']; ?>" required>

        <button type="submit">Atualizar</button>
</main>
</body>
</html>