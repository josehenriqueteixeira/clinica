<?php include ("web/cabecalho.php");?>

<div class="jumbo jumbotron">
			<h1> Contato </h1>
		</div>
		<!--Mapa-->
		<div class="map-responsive">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.6918512375682!2d-46.73591588502058!3d-23.651204184638292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce517269f80ba7%3A0x37ae2db5a4dc040c!2sAv.+Maria+Coelho+Aguiar%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1503632771168" width="800" height="600" frameborder="0" style="border:0" allowfullscreen>
			</iframe>
		</div>

		
		<!--Formulário-->

		<div class="container">
			<div class="row">
				<h2>Fale Conosco</h2>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<form accept-charset="UTF-8" action="db/incluir-contato.php" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<input type="text" class="form_nome col-lg-12 col-md-12 col-sm-12 col-xs-12" id="nome" name="nome" placeholder="Nome" required="required" value=""/>
							<input type="email" class="form_email col-lg-12 col-md-12 col-sm-12 col-xs-12" id="email" name="email" placeholder="E-mail" required="required"  value="" />
							<input type="number" class="form_telefone col-lg-12 col-md-12 col-sm-12 col-xs-12" id="telefone" name="telefone" placeholder="Telefone" value=""/>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<textarea class="texto-area col-lg-12 col-md-12 col-sm-12 col-xs-12" type="text" id="msg" name="mensagem" required="required" placeholder="Mensagem" valeu=""></textarea>
							<input class="submit col-lg-12 col-md-12 col-sm-12 col-xs-12" type="submit" name="commit">
						</div>
						<div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<br>
		<br>

<?php include ("web/rodape.php");?>