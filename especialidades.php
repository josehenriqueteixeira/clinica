<?php include("web/cabecalho.php"); ?>

<?php include("db/conexao.php");?>

<div class="titulo-especia">
	<h3>Especialidades</h3>	
</div>


<div class="container outerpadding">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<?php
			$resultado = mysqli_query($conexao, "select * from especialidades");

			while ($especia = mysqli_fetch_assoc($resultado)){
				$especialidade = $especia['especialidade'];
				$img = $especia['imagem'];

				include("especia.php");
			}

			?>

		</div>
	</div>
</div>

<?php include("web/rodape.php");?>