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
  

  <div class="card-l login">
   <h1>Cadastrar</h1><br>

     
            

            <div class="item">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
				<label for="usuario">Email</label>
                <input type="email" name="email" required><br>
            </div>

            <div class="item">
               <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>		
			   <label for="senha">Senha</label>
               <input type="password" name="password" required><br>
            </div>

           <input class="bt"  type="submit" value="loga">

           <div class="registrar">
                <a href="index.php">Faça Login</a>
            </div>
  </div>
    </form>
    
    
</body>
</html>