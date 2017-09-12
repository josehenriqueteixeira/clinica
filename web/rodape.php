	<footer class="rodape">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="contato col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<?php include ("db/informacoes-rodape.php");?>
							<h3><b>Contato:</b></h3>
							<p><b>Telefone:</b> <?php echo $telefone?> / <?php echo $telefone2?></p>
							<p><b>E-mail:</b> <?php echo $email?></p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 endereco">
							<h3><b>Endereço:</b></h3>
							<p><?php echo utf8_encode($endereco)?></p>
							<p><?php echo utf8_encode($cidade)?> / CEP: <?php echo ($cep)?></p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 redes-sociais">
							<div class="col-sm-12 col-xs-12 redes-sociais2">
								<h3><b>Redes Sociais:</b></h3>
								<a class="btn btn-social-icon btn-twitter">
									<span class="fa fa-twitter"></span>
								</a>
								<a class="btn btn-social-icon btn-facebook">
									<span class="fa fa-facebook"></span>
								</a>
								<a class="btn btn-social-icon btn-linkedin">
									<span class="fa fa-linkedin"></span>
								</a>
								<a class="btn btn-social-icon btn-instagram">
									<span class="fa fa-instagram"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>