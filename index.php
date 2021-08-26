<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docil - Doces Artesanais</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">

<style>
    body {
     margin: 0;
     font-family: 'Poppins', sans-serif;   
    }

    header {
        height: 100px;
        background-color: #a94b00;
        text-align: center;
        padding: 10px;
    }

    .logo {
        height: 80px;
        padding-top: 10px;
        
    }

    nav {
        background-color: #c08457;
    }

    nav ul{
        list-style: none;
        width: 100%;
        margin: 0px;
        padding: 0px;
        display: flex;
        justify-content: center;
    }

    nav ul li{
        padding-top: 12px;
        padding-bottom: 12px;
        padding-left: 23px;
        padding-right: 23px;
    }

    .content{
        min-height: 450px;
    }

    footer{
        background-color: #c08457;
        min-height: 55px;
        padding: 40px;
    }

    .container{
        max-width: 800px;
        display: flex;
        margin: auto;
        padding-top: 35px;
        flex-wrap: wrap;
    }

</style>

</head>
<body>
  
    <header>
        <img src="mapa/imagens/LOGO BLACK.png" alt="Logo" class="logo">
    </header>

    <nav>
        <ul>
            <li>Home</li>
            <li>Quem Somos</li>
            <li>Contato</li>
            <li>Localização</li>
        </ul>
    </nav>
 
    <div class="content">
        <div class="container">
            <?php
                include('home.php');
             ?>
        </div>
    </div>

    <footer>
        RA: 201329975 / Nome: Dionatan Ferreira Colina
    </footer>
</body>
</html>