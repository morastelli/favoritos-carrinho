<?php
include("conecta.php");
$id_produto = $_GET["id_produto"];
$comando = $pdo->prepare("DELETE FROM produtos WHERE id_produto=$id_produto");
$resultado = $comando->execute();

header("Location: carrinho.php");
?>