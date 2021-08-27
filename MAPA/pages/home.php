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
    foreach($produtos as $id =>$doces):
?>

<a href="index.php?page=doces&id=<?php echo $id?>">
    <div class="carta-produto">
        <img src="imagens/<?php echo $doces['imagem']?>" alt="<?php echo $doces['nome']?>">
        <h3><?php echo $doces['nome']?></h3>
    </div>
</a>

<?php

    endforeach
?>    