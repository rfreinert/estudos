<?php
include 'conexao.php';

$stmt = $banco->prepare("UPDATE usuario set nome = ?, endereco = ?, telefone = ? WHERE id = ?");

$stmt->bindValue(1, $_POST["nome"]);
$stmt->bindValue(2, $_POST["endereco"]);
$stmt->bindValue(3, $_POST["telefone"]);
$stmt->bindValue(4, $_POST["id"]);

$stmt->execute();

header("Location: index.php");