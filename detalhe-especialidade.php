<?php include ("web/cabecalho.php");?>
<?php include("db/conexao.php");?>

<?php 

$especialidade = $_GET['especialidade'];
$resultado = mysqli_query($conexao, "select * from especialidades where especialidade='{$especialidade}' ");
while ($especia = mysqli_fetch_assoc($resultado)){
	$img = $especia['imagem'];
	$descricao = $especia['descricao'];
	$valor = $especia['valor'];
}

?>


<div class="jumbo jumbotron ">
	<h1><?php echo $especialidade?></h1>	
</div>

<div class="container outerpadding">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="panel">
					<div class="boximg">
						<img src="img/destaques/<?php echo utf8_encode($img);?>">
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
				<h4><b>Descrição:</b></h4>
				<p><?php echo utf8_encode($descricao);?></p>
				<div>
				<h4><b>Valor:</b></h4>
				<p><?php echo utf8_encode($valor);?></p>
				</div>
			</div>
		</div>
	</div>
</div>




<!--
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img src="img/destaques/<?php echo utf8_encode($img);?>">
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Descrição</h4>
				<p class="col-lg-12 col-md-12 col-sm-12 col-xs-12" ><?php echo utf8_encode($descricao) ?></p>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Valor:</h4> 
				<p class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php echo utf8_encode($valor) ?></p>
			</div>
		</div>
	</div>
</div>
-->


<?php include ("web/rodape.php");?>