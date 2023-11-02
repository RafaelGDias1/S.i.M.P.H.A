<?php

if(!isset($_SESSION)){
    session_start();
}

session_destroy();

header("Location: telalogin.php")

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<form method="post" action="telalogin.php">

    <nav>
        <input type="checkbox" id="check">
        <label for="check">
           <i class="burges" id="btn"></i> <!--fa fa-bars--> 
           <i class="burges-perdido" id="cancel"></i> <!--fa fa-times--> 
        </label>
        <img src="img/SIMPHA- sem fundo.png" >

        <ul>
            <li><a href="telalogin.php">Entrar</a></li>
            <li><a href="cadastrar.php">Cria uma conta</a></li>
           
        </ul>
       
    </nav>

<main>



</main>

    <footer>
        <div id="fundo_content">
            <div id="fundo_contacts">
                <h1>Logo</h1>
                <p>alalalalalalala</p>

                <div id="fundo_social_media">
                  <a href="#" class="fundo-link" id="instagram">
                    <i class="fa-brands fa-instagram"></i>
                  </a>

                  <a href="#" class="fundo-link" id="facebook">
                    <i class="fa-brands fa-facebook"></i>
                  </a>

                  <a href="#" class="fundo-link" id="whatsapp">
                    <i class="fa-brands fa-whatsapp"></i>
                  </a>
                </div>
            </div>
            <ul class="fundo-list">
                <li>
                    <h3>Blog</h3>
                </li>
                <li>
                    <a href="#" class="fundo-link">Tech</a>
                </li>
                <li>
                    <a href="#" class="fundo-link">Adventures</a>
                </li>
                <li>
                    <a href="#" class="fundo-link">Music</a>
                </li>
            </ul>
            <ul class="fundo-list">
                <li>
                    <h3>Products</h3>
                </li>
                <li>
                    <a href="#" class="fundo-link">App</a>
                </li>
                <li>
                    <a href="#" class="fundo-link">Desktop</a>
                </li>
                <li>
                    <a href="#" class="fundo-link">Cloud</a>
                </li>
            </ul>

            <div id="fundo_subscribe">
                <h3>Subscribe</h3>
                <p>lalalalalallalalalaalla</p>
                <div id="input_group">
                  <input type="email" id="email">
                  <button>
                  <i class="fa-regular fa-envelope"></i>

                  </button>
                </div>
            </div>
        </div>
     <div id="fundo_copyrigth">
        &#169
        2023 all rights reserved
     </div>
    </footer>


</form>
</body>
</html>