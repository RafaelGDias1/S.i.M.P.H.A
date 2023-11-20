<?php

$servidor = "localhost";
$usuario = "johntccph";
$senha = "Rafa5151";
$banco = "projetotccph";


try{

$conexao = new PDO ("mysql:host=localhost; dbname=projetotccph",'johntccpph','Rafa5151');
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Verifica a conexão
echo "conectado";
$result = $conexao->query("SELECT * FROM tb_usuario")->fetchAll();




}
catch(PDOException $erro){
 echo "ERRO ->" . $erro->getMessage();
}

?>
