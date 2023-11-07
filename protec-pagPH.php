<?php 

include('config.php');
if (!isset($_SESSION)) {
    session_start();

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

      $sql_code = "SELECT * FROM users WHERE email = '$email' AND password = '$password' "; // vai selecionar dados da tabela users
      echo($sql_code);
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
    

      if (!isset($_SESSION['id'])) {
        die("Você não pode acessar esta página porque não está logado.<p><a href=\"telalogin.php\">Voltar</a></p>");
    } 
    
    else {
       echo "Você foi logado";
    }


    } 
}    



}


?>
