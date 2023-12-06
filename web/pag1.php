<?php 
 session_start();
 unset($_SESSION['id'], $_SESSION ['nome'],  $_SESSION['email']);
 

$_SESSION['msg'] = "Deslogado";

header("Location: ")
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./../css/estilo.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<form method="post" action="../usuario/telalogin.php">

    <nav>
        <input type="checkbox" id="check">
        <label for="check">
           <i class="burges" id="btn"></i> <!--fa fa-bars--> 
           <i class="burges-perdido" id="cancel"></i> <!--fa fa-times--> 
        </label>
       <img src="../img/SYMPHA - LOGO 2 1.png">

        <ul>
            <li><a href="../usuario/telalogin.php">Entrar</a></li>
            <li><a href="../registro/cadastrar.php">Cria uma conta</a></li>
            <li><a href="../registro/cadastrar.php">Suporte</a></li>
            
        </ul>
       
    </nav>

<main>



</main>

    <footer>
        <div id="fundo_content">
            <div id="fundo_contacts">
          
            
                <p>Siga nas redes</p>

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
        </div>
    </footer>


</form>
</body>
</html>