<?php

include "infra/conexao.php";
$sql = "SELECT * FROM brinquedos";

$stmt = $conexao->prepare($sql);

if (!$stmt) {
    die("Erro ao preparar o brinquedo.");
}

$stmt->execute();

$resultado = $stmt->get_result();

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Brinquedos</title>
</head>
<body>
    
<header> 
    <h1>CRUD Brinquedos</h1>
</header>

<main>
    <h2>Cadastre um Novo Brinquedo</h2>

    <form " method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" name="categoria" required>

        <label for="faixa">Faixa Etária:</label>
        <input type="text" id="faixa" name="faixa" required>

        
        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" required>

        <label for="quantidade">Quantidade em Estoque:</label>
        <input type="number" id="quantidade" name="quantidade" min="0" required>

        <button type="submit">Cadastrar</button>
    </form>

    <div>
        <h2>Lista de Brinquedos Cadastrados</h2>
        <table border="1">

    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Faixa Etária</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>

        <?php while ($brinquedo = $resultado->fetch_assoc()) { ?>

            <tr>

                <td><?= $brinquedo['id'] ?></td>

                <td> <?= htmlspecialchars($brinquedo['nome']) ?></td>

                <td> <?= htmlspecialchars($brinquedo['categoria']) ?></td>

                <td><?= htmlspecialchars($brinquedo['faixa_etaria']) ?></td>

                <td>R$ <?= number_format($brinquedo['preco']) ?></td>

                <td><?= $brinquedo['quantidade'] ?></td>

                <td>
                    <a href="public/edit.php?id=<?= $brinquedo['id'] ?>">Editar</a>

                    <a href="public/delete.php?id=<?= $brinquedo['id'] ?>">Excluir</a>

                </td>

            </tr>

        <?php } ?>

    </tbody>

</table>
    </div>
</main>
</body>
</html>