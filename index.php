<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
</head>
<body>
    <?php 
        if(!isset($_SESSION['login'])){
            echo 'ola mundo';
            if(isset($_POST['acao'])){
                echo 'formulario enviado';
            }

            include('login.php');
        }else{
            include('home.php');
        }

    ?>
</body>
</html>