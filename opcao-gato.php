<?php 
	 require "arrays/gato.php"; 


?>





<!DOCTYPE html>
<html>
<head>
	<title>Gato</title>
	<link rel="stylesheet" type="text/css" href="css/lista-produtos.css">
</head>
<body>
<header class="cabecalho">
	<a href="index.php"><img class="cabecalho-logo" src="imagens/logo.png" alt=""></a>
    </header>
	<div class="container">
		
			<?php foreach($gato as $i => $f){ ?>


		<div class="card">
            <a href="produto-gato.php?i=<?=$i?>">
			    <img src="<?=$f["foto"]?>" alt="<?=$f["nome"] ?>">
            </a>
			<h3><a href="produto-gato.php?i=<?=$i?>"><?=$f["nome"] ?></a></h3>
			
		</div>


		<?php } ?>
			
		
	</div>
	<footer class="rodape"></footer>
</body>
</html>