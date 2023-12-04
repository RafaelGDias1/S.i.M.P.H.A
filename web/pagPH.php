<?php 
include_once("../confg/conexao.php");
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
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Web Site</title>
</head>
<body>
<nav>


<?php 
include_once("../confg/conexao.php");
//session_start();

 if(!empty($_SESSION['usuario'])){
    echo "OLa ". $_SESSION ['nome']." , bem";
 }
 else{
    $_SESSION['msg'] = "Deslogado";
   
  }

?>
        <input type="checkbox" id="check">
        <label for="check">
           <i class="burges" id="btn"></i> <!--fa fa-bars--> 
           <i class="burges-perdido" id="cancel"></i> <!--fa fa-times--> 
        </label>

       <img src="../img/SIMPHA- sem fundo.png">

        <ul>
            <li><a href="pag1.php">Sair</a></li>
           
        </ul>
       
    </nav>



    <main>

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

    echo "<table borde='1'>"; 
    echo "<td>ph:".$connph["ph"]."<td> <br/>"; 
    echo "<td>hora:".$connph["hora"]." <td><br/>"; 
  }
?>

</main>





  
</form>
</body>
</html>