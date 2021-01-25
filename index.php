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
            echo "chama pagina de login";
        }else{
            echo "vai para pagina home";
        }

    ?>
</body>
</html>