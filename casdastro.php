<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="tela.css">
</head>
 <body>
    
    <form method="post" action="cadastra.php">



            <div class="zin"> 
                <div class="card-l registro">  <!-- form-box register-->
                            <h2>Cadastro</h2>
                        <form action="zin">

                            <div class="item">  	<!-- input-box -->
                                <span class="icon"><ion-icon name="person"></ion-icon></span>
                                <label for="usuario">Usuário</label>
                                <input type="text" required name="name" id="usuario">	
                            </div>

                            <div class="item">  	<!-- input-box -->
                                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                                <label for="email">Email</label>
                                <input type="email" required name="email" id="email">	
                            </div>

                            <div class="item">		<!-- input-box -->
                                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>		
                                <label for="senha">Porta</label>
                                <input  type="password"  name="cabe"  id="senha" required>
                            </div>

                            <div class="lembrar">  <!-- remember-forgot-->
                            <label><input type="checkbox"> Concorde com os termos e condições</label>
                            </div>

                            <input class="bt" type="submit" value="Cadastrar">

                            <div class="registrar"> <!-- login-register -->
                                <p>já tem uma conta?<a href="index.php" class="regi-link"> Entrar </a></p> <!-- login-link -->
                            </div>
                        </form>
                </div>

            </div>
    </form>
 </body>
</html>