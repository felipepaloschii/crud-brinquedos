<?php

include "../infra/conexao.php";

$sql = "SELECT * FROM brinquedos";
$stmt = $conexao->prepare($sql);

if (!$stmt) {
    die("Erro ao preparar a consulta.");
}

$stmt->execute();

$resultado = $stmt->get_result();

$brinquedos = $resultado->fetch_all(MYSQLI_ASSOC);
?>