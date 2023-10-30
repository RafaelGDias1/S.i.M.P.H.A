<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
    <form method="post" action="cadastro.php">

    

    <script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" > </script> 
  <script  nomodule  src = "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js" > </script> 
  

  
   

           <div class="cad-card">
                <div class="cad-cadastro">
                    
                    <img src="img/SIMPHA- sem fundo.png" class="cad-image" alt="logo simpha">

                </div>

                <div class="cad-right">
                    <div class="cad-login">
                        
                        <h2>Cadastrar</h2>

                        <div class="cad">
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <label for="usuario"></label>
                            <input type="email" name="email" placeholder="Email" required>
                        </div>

                        <div class="cad">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>		
                            <label for="senha"></label>
                            <input type="password" name="password" placeholder="Senha" required>
                        </div>
                        
                    
                        <input class="btn" type="submit" value="entrar">
                    

                    <a href="telalogin.php"> Já tenho uma conta</a>


                     </div>
                </div>
            </div>
  

    </form>
    
    
</body>
</html>