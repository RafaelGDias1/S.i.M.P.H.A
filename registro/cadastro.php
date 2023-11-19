<?php
  include('config.php');
  
      //VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
      if($_POST) {
          //passando todos os itens do post para as sua variaveis
          $id_email = trim($_POST['id_email']);
          $email = trim($_POST['email']);
          $senha_us =trim($_POST['senha_us']);
         
          
         if(is_numeric($id)) {
          $sql = "
          UPDATE users SET
          tipo_email = '$tipo',
          email_email = '$email',
          autor_email = '$autor'
          WHERE id_email  = $id_email
          ";
          } else {
          $sql = "
          INSERT INTO users (email, senha_us ) VALUES
          (
              '$email',
              '$senha_us',
              '',
              '0'
          )
          ";
      }
      $query = $conexao->prepare($sql);
      $query->execute(); 
      }
      header('Location: ./web/pagPH.php');
      exit;
  
  
  

   ?>










    