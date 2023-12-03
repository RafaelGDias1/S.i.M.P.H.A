<?php
include_once("../confg/conexao.php");
session_start();
?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

  <main>
    <form method="POST" action="../web/pagPH.php">

    <script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" > </script> 
    <script  nomodule  src = "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js" > </script> 

    <center>
      <div class="card"> <!-- cad-card-->
      <div class="card-logo"> <!--cad-cadastro-->
        <!-- <img src="img/SIMPHA- sem fundo.png" class="card-image" alt="logo simpha"> !-->
      </div>


            <div class="card-rigth"> <!--cad-rigth-->
            <p></p>
              <div class="card-login"> <!--cad-login-->

                <h2>Login</h2>
                <?php  
                if (isset($_SESSION['msg'])){
                  echo $_SESSION['msg'];
                  unset($_SESSION['msg']);
                }
                if (isset($_SESSION['msgcard'])){
                  echo $_SESSION['msgcard'];
                  unset($_SESSION['msgcard']);
                }
                ?>

                <div class="darde"> <!--cad-->
                    <span class="icon"><ion-icon name="mail"></ion-icon></span> 
                    <label for="email"></label>
                    <input type="test" name="usuario" placeholder="E-mail" required>
                </div>

                <div class="darde">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>		
                        <label for="senha"></label>
                        <input type="password" name="senha" placeholder="Senha" required >
                </div>
        
              
                

                <input class="butao" type="submit" value="Acessar" name="btloga"> <!--btn-->
            
                <a href="../registro/cadastrar.php">Não tenho conta</a>

              </div>
            </div>
      </div>
    </center>
  </main>
    
  </form>




</body>
</html>