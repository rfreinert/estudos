<?php
include 'conexao.php';

$id = $_GET['id'];

$stmt = $banco->prepare("DELETE from usuario WHERE id = ?");
$stmt->bindValue(1, $id);
$stmt->execute();


header("Location: index.php");