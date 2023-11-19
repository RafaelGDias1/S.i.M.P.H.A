<?php

$servidor = "localhost";
$usuario = "johntccph";
$senha = "Rafa5151";
$banco = "projetotccph";


try{

$conexao = new PDO ("mysql:host=$servidor; dbname=$banco",
$usuario,
$senha);

// Verifica a conexão
return $conexao;
}catch(PDOException $e){
 echo '<p>' .$e->getMessage(). '</p>';
}

?>
