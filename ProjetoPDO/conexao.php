<?php

$dsn	= 'mysql:dbname=bancoteste;host=localhost';
$user	= 'root';
$pwd	= 'admin';

try{
	
	$banco = new PDO($dsn,$user,$pwd);
	
}catch(PDOException $e){
	echo 'Erro na conexão: '. $e->getMessage();	
}