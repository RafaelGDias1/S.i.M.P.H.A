<?php

include('../../config.php');
/*  echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */
    //VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
    if($_POST) {
      $id = $_POST['id'];
      $querySelect = "SELECT * FROM tb_usuario  WHERE id_email= $id_email";
      $resultado = $conexao->query($querySelect);
      $email = $resultado->fetch();
      
      $id = $email["id"];
      $email = $email["email"];
      $senha_us = $email["senha_us"];


    }else{
      $id = "";
      $email = "";
      $senha_us = "";
    
    }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="css/estilo.css">
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

                            <?php
                            if (isset($_SESSION['status_cadastro'])) {
                                // A chave 'status_cadastro' está definida, então você pode acessá-la com segurança
                                $status_cadastro = $_SESSION['status_cadastro'];
                                // Faça o que for necessário com $status_cadastro
                            } else {
                                // A chave 'status_cadastro' não está definida, então você pode tratar o caso em conformidade
                            }
                            ?>
                            

                        <div class="cad">
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <label for="usuario"></label>
                            <input type="email" name="email" placeholder="Email" required>
                        </div>

                        <?php 
                        // endif;
                        // unset($_SESSION['status_cadastro']);
                        //if($_SESSION['users_existe']):
                           
                            if (isset($_SESSION['status_cadastro'])) {
                                // A chave 'status_cadastro' está definida, faça algo com ela
                                unset($_SESSION['status_cadastro']);
                            } else {
                                // A chave 'status_cadastro' não está definida
                                // Lide com a situação de acordo com a sua lógica
                            }
                            
                            if (isset($_SESSION['users_existe'])) {
                                // A chave 'users_existe' está definida, faça algo com ela
                            } else {
                                // A chave 'users_existe' não está definida
                                // Lide com a situação de acordo com a sua lógica
                            }
                            ?>

                        <div class="cad">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>		
                            <label for="senha"></label>
                            <input type="password" name="password" placeholder="Senha" required>
                        </div>
                        <?php
                        if (isset($_SESSION['status_cadastro'])) {
                            // A chave 'status_cadastro' está definida, você pode acessá-la com segurança
                            $status_cadastro = $_SESSION['status_cadastro'];
                            // Faça o que for necessário com $status_cadastro
                        } else {
                            // A chave 'status_cadastro' não está definida, então lide com o caso em conformidade
                        }

                        if (isset($_SESSION['users_existe'])) {
                            // A chave 'users_existe' está definida, você pode acessá-la com segurança
                            $users_existe = $_SESSION['users_existe'];
                            // Faça o que for necessário com $users_existe
                        } else {
                            // A chave 'users_existe' não está definida, então lide com o caso em conformidade
                        }
                        ?>
                    
                        <input class="btn" type="submit" value="entrar">
                    

                    <a href="telalogin.php"> Já tenho uma conta</a>


                     </div>
                </div>
            </div>
  

    </form>
    
    
</body>
</html>