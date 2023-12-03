<?php
//require ('../confg/conexao.php');
session_start();
ob_start();

$CadEntrar = filter_input(INPUT_POST, 'CadEntrar', FILTER_SANITIZE_STRING);
if($CadEntrar){
    include_once ('../confg/conexao.php');
    $conn = filter_input_array(INPUT_POST, FILTER_DEFAULT);
   //var_dump($conn);
  $conn['senha'] = password_hash($conn['senha'], PASSWORD_DEFAULT);

  $result_usuario = "INSERT INTO tb_usuario ( nome, email, usuario, senha) VALUES (
     '".$conn['nome']."', 
     '".$conn['email']."', 
    '".$conn['usuario']."', 
    '".$conn['senha']."')";

  $resultado_usuario = mysqli_query($conn , $result_usuario);
  if(mysqli_insert_id($conn)){
    $_SESSION['msgcard'] = "cadastro feito com sucesso!";
    header("Location: ../usuario/telalogin.php");

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
    <form method="post" action="..//usuario/telalogin.php">


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
                          if(isset($_SESSION['msgcard'])){
                          echo $_SESSION['msgcard'];
                          unset ($_SESSION['msgcard']);

                          }
                        ?> 
                              <div class="cad">
                          <span class="icon"><ion-icon name="mail"></ion-icon></span>
                          <label for="usuario"></label>
                          <input type="text" name="nome" placeholder="Nome" required>
                      </div>

                      <div class="cad">
                          <span class="icon"><ion-icon name="mail"></ion-icon></span>
                          <label for="usuario"></label>
                          <input type="email" name="usuario" placeholder="Email" required>
                      </div>


                      <div class="cad">
                          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>		
                          <label for="senha"></label>
                          <input type="password" name="senha_us" placeholder="Senha" required>
                      </div>
                      
                      <input class="btn" type="submit" value="loga" name="CadEntrar">
                  

                      <a href="../usuario/telalogin.php"> Já tenho uma conta</a>

                    </div>
                </div>
              </div>
  

    </form>
    
    
</body>
</html>