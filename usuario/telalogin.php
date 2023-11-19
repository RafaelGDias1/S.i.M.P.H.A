<<<<<<< HEAD:usuario/telalogin.php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

</body>
   
  <main>
    <form method="post" action="pagPH.php">

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

                  <div class="darde"> <!--cad-->
                      <span class="icon"><ion-icon name="mail"></ion-icon></span> 
                      <label for="email"></label>
                      <input type="email" name="email" placeholder="E-mail" required>
                  </div>

                  <div class="darde">
                          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>		
                          <label for="password"></label>
                          <input type="password" name="password" placeholder="Senha" required>
                  </div>
          <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                  <div class="">
                    Usuário ou senha inválida(s)
                  </div>
                   <?php } ?>

                  <input class="butao" type="submit" value="entrar"> <!--btn-->
              
                  <a href="cadastrar.php">Não tenho conta</a>

              </div>
            </div>
      </div>
    </center>
  </main>
    
  </form>
=======
<?php

include('config.php');
 
echo("estou login");


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

  <form method="post" action="pagPH.php">

    <script type= "module" src= "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script> 
    <script nomodule src= "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 

    <center>
    <!--<div class="card">  cad-card-->
      <div class="card-logo"> <!--cad-cadastro-->
        <!-- <img src="img/SIMPHA- sem fundo.png" class="card-image" alt="logo simpha"> !-->
      </div>

        <div class="card-rigth"> <!--cad-rigth-->
          <div class="card-login"> <!--cad-login-->

            <h2>Login</h2>

            <div class="darde"> <!--cad-->
              <span class="icon"><ion-icon name="mail"></ion-icon></span> 
              <label for="email"></label>
              <input type="email" name="email" placeholder="E-mail" required>
            </div>

            <div class="darde">
              <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>		
              <label for="password"></label>
              <input type="password" name="password" placeholder="Senha" required>
            </div>

            <input class="butao" type="submit" value="entrar"> <!--btn-->
        
            <a href="cadastrar.php">ou<br> Não tenho conta</a>

          </div>
        </div>
    <!--</div> !-->
    </center>
  </form>
  
</body>
>>>>>>> d5c368f1fbf175ed61661582f6f78807bafa37e8:telalogin.php
</html>