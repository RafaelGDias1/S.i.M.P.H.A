<?php
session_start();
include_once ('../confg/conexao.php');
?>

<?php
//exemplo cripitografar a senha
//echo password_hash(478965, PASSWORD_DEFAULT);

?>


<?php  
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
 

 if(!empty($dados['entrar'])){ 
  var_dump($dados);
  $query_email = "SELECT id_email, email, senha_us /*selecionar dados da tabela*/
  FROM tb_usuario /*usar tabela (tal)*/
  WHERE email =:email  /*escolher colucar e valor */
  LIMIT 1";
 $result_email = $conn->prepare($query_usuario);
 $result_email->bindParam(':email',$dados['email'], PDO::PARAM_STR);
 $result_email->execute();

if(($result_email) AND ($result_email->rowCount() !=0)){
 $row_email = $result_email->fetch(PDO::FETCH_ASSOC);
  var_dump($row_email);
  if(password_verify($dados['senha_us'],$row_email['senha_us'])){
    echo "Usuário logadp";
  }else{
    $_SESSION['msg'] = "Erro: Senha inválida(o)!";
  }
}else{
$_SESSION['msg'] = "Erro: Usuário inválida(o)!";
}

 }

 if(isset($_SESSION['msg'])){
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
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