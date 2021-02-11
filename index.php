<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de Login</title>
</head>
<body id="container">
    <?php 
        if(!isset($_SESSION['login'])){
            if(isset($_POST['acao'])){
                $login = 'suel';
                $senha = '123';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if($login == $loginForm && $senha == $senhaForm){
                    
                    $_SESSION['login'] = $login;
                    header('Location: index.php');
                }else{
                    echo 'Dados invalidos';
                    
                }
            }
            include 'login.php';
        }else{
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
            }
            include 'home.php';
        }
    ?>    
</body>
</html>