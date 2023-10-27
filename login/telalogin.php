<?php



session_start();




?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
   

    <form method="post" action="site.php">


    <script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" > </script> 
  <script  nomodule  src = "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js" > </script> 

  
  <div class="zin"> 

  <span class="icon-saida"><ion-icon name="close-outline"></ion-icon>
	</span>


   <div class="card-l login">
    <h1>Login</h1>

            

            <div class="item">
                <span class="icon"><ion-icon name="mail"></ion-icon></span> 
                <label for="email">Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="item">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>		
                    <label for="password">Senha</label>
                    <input type="password" name="password" required>
            </div>

            

            <input class="bt" type="submit" value="loga">

        
            <div class="registrar">
            <a href="cadastrar.php">Ainda não é cadastrado?</a><br>
            </div>
            <
      </form>
     </div>
  </div>
    

</body>
</html>