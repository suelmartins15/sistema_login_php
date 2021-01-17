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
        
        if(!isset($SESSION['logi'])){
            include_once 'home.php';
        }else{
            include 'login.php';
        }
     

    ?>
</body>
</html>