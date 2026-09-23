<?php

include "../infra/conexao.php";
$brinquedo = mysqli_query($conexao, "SELECT * FROM brinquedo");
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

    <form action="public/cadastrar.php" method="POST">
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
        <table>
            <thead>
                <tr>
                    <td><?php echo $brinquedo['nome']; ?></td>
                    <td><?php echo $brinquedo['categoria']; ?></td>
                    <td><?php echo $brinquedo['faixa_etaria']; ?></td>
                    <td><?php echo $brinquedo['preco']; ?></td>
                    <td><?php echo $brinquedo['quantidade']; ?></td>
                    <td>
                        <a href="public/edit.php?id=<?php echo $brinquedo['id']; ?>">Editar</a>
                        <a href="public/excluir.php?id=<?php echo $brinquedo['id']; ?>">Excluir</a>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</main>
</body>
</html>