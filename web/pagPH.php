<?php 
session_start();

 if(!empty($_SESSION['usuario'])){
    echo "OLa ". $_SESSION ['nome']." , bem";
 }
 else{
    $_SESSION['msg'] = "Deslogado";
   
  }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site</title>
</head>
<body>

<?php 
$servidor = "localhost";
$usuario = "johntccpph";
$senha = "Rafa5151";
$dbname = "projetotccph";




$connph = mysqli_connect ($servidor, $usuario, $senha, $dbname );

$db = mysqli_select_db($connph, "projetotccph");

$sql = mysqli_query($connph, "SELECT * FROM phreading") or die( 
    mysqli_error($connph) //caso haja um erro na consulta 
  );

  while($connph = mysqli_fetch_assoc($sql)) { 
    echo "-----------------------------------------<br />"; 
    echo "ph:".$connph["ph"]."<br />"; 
    echo "hora:".$connph["hora"]."<br />"; 
  }
?>


    <h1>LOGADO</h1> 

<a href="pag1.php">Sair</a>
  
</form>
</body>
</html>