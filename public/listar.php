<?php

include "../infra/conexao.php";

$sql = "SELECT * FROM brinquedos";
$resultado = mysqli_query($conexao, $sql);
?>