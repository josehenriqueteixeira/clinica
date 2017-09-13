<?php include("web/cabecalho.php") ?>


<div class="container" id="carrossel">        
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators indicador">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		</ol>

		<!--Imagens produtos-->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="img/banner/banner1.jpg" alt="...">
				<div class="carousel-caption">

				</div>
			</div>
			<div class="item">
				<img src="img/banner/royal-nutricao.png" alt="...">
				<div class="carousel-caption">
				</div>
			</div>    
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>        
</div>

<!--Produtos em destaque-->
<?php include ("destaques.php"); ?>
	<!--Parceiros
	Obs: Verificar quantos parceiros irá ter.-->
	<div class="jumbotron jumbo parceiro-responsivo">
		<div class="container">
			<div class="row parceiros">
				<h3>Nossos Parceiros:</h3>
				<div class="col-lg-2 col-md-2">
					<div class="thumbnail">
						<img src="img/parceiros/royal.png">
					</div>
				</div>
				<div class="col-lg-2 col-md-2">
					<div class="thumbnail">
						<img src="img/parceiros/virbac.png">
					</div>
				</div>
				<div class="col-lg-2 col-md-2">
					<div class="thumbnail">
						<img src="img/parceiros/pedigree.png">
					</div>
				</div>
				<div class="col-lg-2 col-md-2">
					<div class="thumbnail">
						<img src="img/parceiros/fisiocare.png">
					</div>
				</div>
				<div class="col-lg-2 col-md-2">
					<div class="thumbnail">
						<img src="img/parceiros/bayer.png">
					</div>
				</div>
				<div class="col-lg-2 col-md-2">
					<div class="thumbnail">
						<img src="img/parceiros/magnus.png">
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include("web/rodape.php") ?>