<?php 

include "../infra/conexao.php";

$nome = trim($_POST['nome']);
$categoria = trim($_POST['categoria']);
$faixa = trim($_POST['faixa']);
$preco = trim($_POST['preco']);
$quantidade = trim($_POST['quantidade']);

$sql = "INSERT INTO brinquedos (nome, categoria, faixa_etaria, preco, quantidade) VALUES (?, ?, ?, ?, ?)";
$stmt = $conexao->prepare($sql);
if (!$stmt) {
    die("Erro ao cadastrar brinquedo: ");
}

$stmt->bind_param("sssdi", $nome, $categoria, $faixa, $preco, $quantidade);
if ($stmt->execute()) {
    echo "Brinquedo cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar brinquedo: " . $stmt->error;
}

$stmt->close();
header("Location: ../index.php");
?>