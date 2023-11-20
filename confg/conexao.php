<?php

$servidor = "localhost";
$usuario = "johntccph";
$senha = "Rafa5151";
$banco = "projetotccph";


try{

$conn = new PDO ("mysql:host=localhost; dbname=projetotccph",'johntccpph','Rafa5151');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Verifica a conexão
//cho "conectado";
$result = $conn->query("SELECT * FROM tb_usuario")->fetchAll();




}
catch(PDOException $erro){
 echo "ERRO ->" . $erro->getMessage();
}

?>
