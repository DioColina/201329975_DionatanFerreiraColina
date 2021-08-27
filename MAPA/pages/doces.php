<?php

    require_once('dados/produtos.php');

    $id = null;

    if (isset ($_GET['id'])){
        $id = $_GET['id'];

        if(!isset($produtos[$id]))
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

    <div class="produto-cl">
        <img src="imagens/<?php echo $produtos[$id]['imagem']?>" alt="<?php echo $produtos[$id]['nome']?>">
    </div>
    <div class="produto-cr">
        <h1><?php echo $produtos[$id]['nome']?></h1>
        <h2><?php echo "R$ ".number_format($produtos[$id]['preco'], 2, ",", ".")?> <span class="preco-unidade">/unidade</span></h2>
        <p>
            <?php echo $produtos[$id]['descricao']?>
        </p>

        <a href="index.php?page=contato" class="botao">
            Fazer Pedido
        </a>
    </div>

<?php
    }
?>

