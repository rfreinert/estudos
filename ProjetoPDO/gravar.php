<?php
include 'topo.php';
include 'conexao.php';

$stmt = $banco->prepare('INSERT into usuario (nome, endereco, telefone) values (?,?,?)');

$stmt->bindValue(1, $_POST["nome"]);
$stmt->bindValue(2, $_POST["endereco"]);
$stmt->bindValue(3, $_POST["telefone"]);

$stmt->execute();

header("Location: index.php");