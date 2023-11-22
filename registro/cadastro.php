<?php
  /*include("./config.php");
  
  session_start();
    
$email = mysqli_real_escape_string($conn,trim($_POST['email']));
$senha_us =  mysqli_real_escape_string($conn,trim(md5($_POST['senha_us'])));

$sql = "select count(*) as total from usuario where tb_usuario = '$email'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($resilt);

if($row['total'] == 1) {
 $_SESSION['usuario_existe'] = true;
 header('Location: cadastrar.php');
 exit;
}

$sql = "INSERT INTO tb_usuario( id, email, senha_us) VALUES ('email','senha_us''1)";

if($conn->query($sql) === true){
    $_SESSION ['status_cadastro'] = true;
}

$conn->close();

header('Location: cadastrar.php');
exit;

   ?>










    