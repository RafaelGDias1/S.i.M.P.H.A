
<?php

session_start();
ob_start();

$CadEntrar = filter_input(INPUT_POST, 'CadEntrar', FILTER_SANITIZE_STRING);
if($CadEntrar){
    include_once ('../confg/conexao.php');
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
   // var_dump($dados);
  $dados['senha_us'] = password_hash($dados['senha_us'], PASSWORD_DEFAULT);

  $result_email = "INSERT INTO tb_usuario ( email, senha_us) VALUES (
    '".$dados['']."', 
    '".$dados['email']."', 
    '".$dados['senha_us']."')";

  $resultado_email = mysqli_query($conn , $result_email);
  if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "cadastro feito com sucesso!";
    header("Location: ../web/pagPH.php");

  }else{
    $_SESSION['msg'] = "Erro ao cadastra!";

  }
}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" > </script> 
  <script  nomodule  src = "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js" > </script>
    <form method="POST" action="../web/pagPH.php">


           <div class="cad-card">
                <div class="cad-cadastro">

                    <img src="../img/SIMPHA- sem fundo.png" class="cad-image" alt="logo simpha">

                </div>

                <div class="desc-simpha">

                  <p>O sistema SIMPHA é um sistema de monitoramento 
                    de PH prático, na tela do seu aparelho! 
                  </p>

                </div>

                <div class="cad-right">
                    <div class="cad-login">
                        
                      <h2>Cadastrar</h2>

                        <?php
                          if(isset($_SESSION['msg'])){
                          echo $_SESSION['msg'];
                          unset ($_SESSION['msg']);

                          }
                        ?> 
                            

                      <div class="cad">
                          <span class="icon"><ion-icon name="mail"></ion-icon></span>
                          <label for="usuario"></label>
                          <input type="email" name="email" placeholder="Email" required>
                      </div>


                      <div class="cad">
                          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>		
                          <label for="senha"></label>
                          <input type="password" name="senha_us" placeholder="Senha" required>
                      </div>
                      
                      <input class="btn" type="submit" value="entrar" name="CadEntrar">
                  

                      <a href="../usuario/telalogin.php"> Já tenho uma conta</a>

                    </div>
                </div>
              </div>
  

    </form>
    
    
</body>
</html>