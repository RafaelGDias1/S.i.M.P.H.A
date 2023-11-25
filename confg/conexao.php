<?php

$servidor = "localhost";
$usuario = "johntccph";
$senha = "Rafa5151";
$banco = "projetotccph";


try{

$conn = new PDO ("mysql:host=localhost; dbname=projetotccph",'johntccph','Rafa5151');

//$row = $result->fetch_array(MYSQLI_ASSOC);
// Verifica a conexão
//echo "conectado";
$result = $conn->query("SELECT * FROM tb_usuario")->fetchAll();




}
catch(PDOException $erro){
 echo "ERRO ->" . $erro->getMessage();
}

?>
