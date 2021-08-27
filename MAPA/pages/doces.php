<?php

    require_once('mapa/dados/produtos.php');

    $id = null;

    if (isset ($_GET['id'])){
        $id = $_GET['id'];

        if(!isset($doces[$id]))
            $id = null;
    }
        
    if(is_null($id)){
?>
    <div>
        Código nulo ou não existente.
    </div>
<?php
    }else{
?>

    <div>
        <img src="images/<?php echo $doces[$id]['imagem']?>" alt="<?php echo $doces[$id]['nome']?>">
    </div>
    <div>
        <h2><?php echo $doces[$id]['nome']?></h2>
        <p>
            <?php echo $doces[$id]['descricao']?>
        </p>
</div>

<?php
    }
?>

