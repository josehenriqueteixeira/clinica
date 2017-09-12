
<?php
if(mysqli_query($conexao, $query)) { 
	?>
    <script>
    window.location='../home.php';
    alert('Contato Enviado com Sucesso!');
    </script>
<?php } else { ?>
       <script>
    alert('Contato não enviado');
    </script>
<?php } ?>

