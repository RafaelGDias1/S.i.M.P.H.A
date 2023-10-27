<?php



 

    require_once "config.php";

    function logout()
    {
        session_unset();
        session_destroy();
        header("Location: pagPH.php");
        exit;
    }

    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("Location: site.php");
        exit;
    }

    if (isset($_POST["logout"])) {
        logout();
        exit;
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


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" name="logout" value="logout">

    <h1>LOGADO</h1>

  
  
</body>
</html>