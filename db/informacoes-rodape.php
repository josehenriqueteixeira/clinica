<?php include ("conexao.php");?>

<?php

$result = mysqli_query ($conexao, "select * from informacoes");

$informacao = mysqli_fetch_assoc($result);

$telefone = $informacao ['telefone'];

$telefone2 = $informacao ['telefone2'];
$email =  $informacao ['email'];
$endereco = $informacao ['endereco'];
$cidade = $informacao ['cidade'];
$cep = $informacao ['cep'];

?>