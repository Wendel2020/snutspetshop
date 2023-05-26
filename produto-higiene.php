<?php 

    require "arrays/higiene.php";


    if(!isset($_GET["i"])){
        
        header("location: index.php");
        die; 
    }

    

    $indice = $_GET["i"];
    if(isset($higiene[$indice])){
            
    $f = $higiene[$indice];
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo-produto.css">
    <title>Higiene</title>
</head>
<body>
    <header class="cabecalho">   
    <a href="index.php"><img class="cabecalho-logo" src="imagens/logo.png" alt=""></a>
    </header>
    <main class="conteudo">
        
    
         <?php if(isset($f)){ ?>
            <? 
        
        ?>
        <section class="conteudo-esquerda">
            <img class="imagem-produto" src="<?=$f["foto"] ?>" alt="<?=$f["nome"] ?>">
        </section>
        <section class="conteudo-direita">
           
            <h1 class="titulo-produto"><?=$f["nome"] ?></h1>
            <h3 class="peso-produto"><?=$f["tamanho"] ?></h3>
            <h2 class="valor-produto"><?=$f["valor"] ?></h2>
           
            <button class="botao-comprar">Comprar</button>
            <?php } else{
                echo "<h3>Produto não encontrado</h3>";
            } ?>

        </section>
    </main>
    <footer class="rodape">

    </footer>
</body>
</html>