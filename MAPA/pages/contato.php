<?php
    $action = "form";
    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "form";
        
    if($action == "form"):
?>
    <form action="?page=contato&action=enviar" method="POST" class="form-contato">
        <div class="form-titulo"><h1>Contato e Pedidos</h1></div>

        <div>
            <input type="text" placeholder="Nome" name="Nome">
        </div>

        <div>
            <input type="text" placeholder="E-mail" name="E-mail">
        </div>

        <div>
            <input type="text" placeholder="Telefone" name="Telefone">
        </div>

        <div>
            <textarea name="Mensagem" placeholder="Digite aqui seu pedido ou mensagem" rows="10"></textarea>
        </div>

        <div>
            <button>Enviar</button>
        </div>
    </form>
<?php endif?>

<?php 
    if($action == "enviar"):
?>
    <div class="mensagem">
        <strong>sua mensagem foi enviada com sucesso.</strong>
        <p>Entraremos em contato em breve.</p>
    </div>
<?php
    endif
?>