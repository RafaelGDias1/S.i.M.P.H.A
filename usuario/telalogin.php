<?php
include_once './conexao.php';
?>

<?php
//exemplo cripitografar a senha
//echo password_hash(478965, PASSWORD_DEFAULT);

?>


<?php  
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
 var_dump($dados);

 if(!empty($dados['entrar'])){
  var_dump($dados);
 }
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
    <form method="post" action="">

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
                          <input type="password" name="senha_us" placeholder="Senha" required>
                  </div>
          
               
                  

                  <input class="butao" type="submit" value="entrar"> <!--btn-->
              
                  <a href="../registro/cadastrar.php">Não tenho conta</a>

              </div>
            </div>
      </div>
    </center>
  </main>
    
  </form>




</body>
</html>