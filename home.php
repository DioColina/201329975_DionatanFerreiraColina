<?php
    require_once('dados/produtos.php');
?>
<style>
    .carta-produto{
        width: 200px;
        text-align: center;
        margin: 30px;
    }
    .carta-produto img{
        width: 200px;
        height: 200px;
        border-radius: 100px;
    }
</style>

<?php
    foreach($produtos as $doces):
?>

<div class="carta-produto">
    <img src="mapa/imagens/<?php echo $doces['imagem']?>" alt="<?php echo $doces['nome']?>">
    <h3><?php echo $doces['nome']?></h3>
</div>

<?php

    endforeach
?>    