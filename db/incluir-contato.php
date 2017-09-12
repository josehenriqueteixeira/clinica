<?php include("conexao.php"); ?>

<?php

$nome = $_GET["nome"];
$email = $_GET["email"];
$telefone = $_GET["telefone"];
$mensagem = $_GET["mensagem"];

$query = "insert into contato (nome, email, telefone, mensagem) values ('{$nome}', '{$email}', '{$telefone}', '{$mensagem}' ) ";?>

<?php include("mensagem-contato.php");?>



