<?php
	$cabe = $_POST ["cabe"];
	$login = $_POST["login"];

	session_start();
	
	$_SESSION["login"] = $login;
	$_SESSION["cabe"] = $cabe;
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="tela.css">
	</head>
	<body class="bod">
		<form action="curso.php" method="post">
		
<header>
	<div class="comeco">

      <div class="logo">

     <h3>Ph da àgua</h3>

    <div class="foto-hearder">

      <i class="solid"> </i>

	</div>
	</div>
	</div>
</header>

<main>
    <section>
	 <iframe src="https://onedrive.live.com/embed?resid=C10C67AD3D584A5A%21468&authkey=!AJJbHi6KRK7uVR0&em=2" width="300" height="250" frameborder="0" scrolling="no"></iframe>
	</section>	
</main>	
	
	
	
	</form>
	</body>
</html>