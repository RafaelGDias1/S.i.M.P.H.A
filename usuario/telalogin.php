<?php
session_start();
ob_start();
include_once ('../confg/conexao.php');
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

<?php  
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

 if(!empty($dados['entrar'])){ 
  //var_dump($dados);
  $query_email = "SELECT id_email, email, senha_us /*selecionar dados da tabela*/
  FROM tb_usuario /*usar tabela (tal)*/
  WHERE email =:email  /*escolher colucar e valor */
  LIMIT 1";
 $result_email = $conn->prepare($query_email);
 $result_email->bindParam(':email',$dados['email'], PDO::PARAM_STR);
 $result_email->execute();

if(($result_email) AND ($result_email->rowCount() !=0)){
 $row_email = $result_email->fetch(PDO::FETCH_ASSOC);
  //var_dump($row_email);

  if(password_verify($dados['senha_us'],$row_email['senha_us'])){
var_dump($row_email);
 $dados ['senha_us'] = password_hash($dados['senha_us'], PASSWORD_DEFAULT);
    $_SESSION['id_email'] = $row_email['id_email'];
    $_SESSION['email'] = $row_email['email'];
    header("Location: ../../web/pagPH.php");
  }else{
    $_SESSION['msg'] = "Erro: Senha ou usuário invalido(a)!";
  }
}else{
$_SESSION['msg'] = "Erro: Usuário ou senha inválido(a)!";
}

 }

 if(isset($_SESSION['msg'])){
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
 }
?>
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
                      <input type="email" name="email" placeholder="E-mail" required value="<?php if(isset($dados['email'])){ echo $dados['email'];}?>">
                  </div>

                  <div class="darde">
                          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>		
                          <label for="senha_us"></label>
                          <input type="password" name="senha_us" placeholder="Senha" required >
                  </div>
          
               
                  

                  <input class="butao" type="submit" value="entrar" name="entrar"> <!--btn-->
              
                  <a href="../registro/cadastrar.php">Não tenho conta</a>

              </div>
            </div>
      </div>
    </center>
  </main>
    
  </form>




</body>
</html>