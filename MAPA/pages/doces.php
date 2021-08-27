<style>
    .produto-cl{
        width: 50%;
    }

    .produto-cr{
        width: 50%;
        margin-bottom: 70px;
    }

    .produto-cl img{
        width: 300px;
        height: 300px;
        border-radius: 150px;
     }

    .produto-cr p{
        font-weight: 26px;
        font-weight: lighter;
        color: darkred;
        margin-bottom: 70px;
    }

    .preco-unidade{
        font-size: 15px;
    }

    .botao{
        text-decoration: none;
        color: white;
        background-color: darkred;
        padding: 12px;
        font-weight: bold;
        border-radius: 7px;
    }

</style>

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

