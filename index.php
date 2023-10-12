<?php  
session_start();

require_once "conf.php";

if ( $_SERVER["REQUEST_METHOD"] == "POST") {
	$login = $_POST ['name'];
	$cabe = $_POST ['email'];
}

$sql = "SELECT * FROM users WHERE name = ? AND email = ?";

$stmt = $conn->prepare($sql); //prepara uma declaração slq
$stmt ->bind_param("ss", $name, $email); // valor de nome e email é passado 
$stmt->execute(); //executa a função

$result = $stmt->get_result(); // obtem o resultado da consulta de cima

	if ($result->num_rows == 1){ // verificar se a um registro retornado pela consulta
 
    $row - $result->fetch_assoc(); // obtem os dados do registro retornado e armazenar 

		if (password_verify($password,$row['password'])){ // se a senha for correta fara os passos seguites 
			
		$_SESSION["loggedin"] = true; // valida q o usuario foi autenticado 

		header("Loacation: ph.php");  // direciona para o site colocado(ph.php)

		exit;  //encerrar o script atual para evitar a execução de qualquer codigo adicional 

	}
}
else{
$error = "Usuario ou senha incorreta";
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PH da àgua</title>
		<link rel="stylesheet" href="tela.css">
</head>
<body>
<form action="ph.php" method="post">

  <script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" > </script> 
  <script  nomodule  src = "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js" > </script> 




  
	<header>

	   <h2 class="logo"> Logo </h2>
		<nav class="navegacao">
			<a href="#">contato</a>
			<a href="#">sobre</a>
			<a href="#">Serviços</a>
			<a href="#">Suporte</a>
			<button class="btnLogin-popup">Login</button>
        </nav>

	</header>	  

 <div class="zin">  <!-- wrapper-->
		<span class="icon-saida"><ion-icon name="close-outline"></ion-icon>
	</span>

		<div class="card-l login">  <!-- form-box login-->
				<h2>Login</h2>

				<form action="zin">

		    <div class="item">   <!-- input-box -->
				<span class="icon"><ion-icon name="mail"></ion-icon></span> 
				<label for="usuario">Email</label>
				<input type="email" required name="login" id="usuari" >	
			</div>

			<div class="item">	<!-- input-box -->
				<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>		
				<label for="senha">Senha</label>
				<input  type="password"  name="cabe" id="senhar" required >
			</div>

			<div class="lembrar"> <!-- remember-forgot-->
			<label><input type="checkbox"> Lembre de mim</label>
			<a href="casdastro.php"> Esqueceu sua senha?</a>

			</div>

			<input class="bt" type="submit" value="Entrar"> <!-- btn-->

			<div class="registrar"> <!-- login-register -->
				<p>Não tem uma conta?<a href="casdastro.php" class="registrar-link"> Registro </a></p> <!-- register-link -->
			</div>
			</form>
		</div>
 </div>
 </form>


</body>
</html>

	
	
	

	
	   
		