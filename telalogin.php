<?php

include('config.php');

if(isset($_POST['email']) || isset($_POST['password'])){   //caso exista email ou senha
      if(strlen($_POST['email']) ==0){
          echo "Preencha seu e-mail";
      }
      else if(strlen($_POST['password']) == 0){
        echo "Preencha sua senha";
      } 
      else{
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = $mysqli->real_escape_string($_POST['password']);

        $sql_code = "SELECT * FROM users WHERE email = '$email' AND 'password' = '$password'"; // vai selecionar dados da tabela users
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:" . $mysqli->connect_error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
          $usuario = $sql_query->fetch_assoc();

          if(isset($_SESSION)){
            session_start();
          }

          $_SESSION['id'] = $usuario['id'];

          header("Location: pagPH.php");

        } 
        else{
          echo "não logado";
        }
      } 
}    

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
   

    <form method="post" action="pagPH.php">


    <script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" > </script> 
  <script  nomodule  src = "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js" > </script> 

  
  <div class="card"> <!--cad-card-->
     <div class="card-logo"> <!--cad-cadastro-->
        <img src="img/SIMPHA- sem fundo.png" class="card-image" alt="logo simpha">
     </div>


        <div class="card-rigth"> <!--cad-rigth-->
            <div class="card-login"> <!--cad-login-->

              <h2>Login</h2>

                <div class="darde"> <!--cad-->
                    <span class="icon"><ion-icon name="mail"></ion-icon></span> 
                    <label for="email"></label>
                    <input type="email" name="email" placeholder="Email" required>
                </div>

                <div class="darde">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>		
                        <label for="password"></label>
                        <input type="password" name="password" placeholder="Senha" required>
                </div>

                

                <input class="butao" type="submit" value="entrar"> <!--btn-->
            
                <a href="cadastrar.php">Não tenho conta</a>

           </div>
        </div>
  </div>
    
  </form>
</body>
</html>