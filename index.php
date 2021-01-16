<?php 
    session_start();
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
</head>
<body>
    <?php
      echo "Página index";
      if(isset($_POST['acao'])){
          include 'login.php';
      }else{
          include 'home.php';
      }

    ?>
</body>
</html>