<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
</head>
<body>
    <?php 
        if(!isset($_SESSION['login'])){
            if(isset($_SESSION['acao'])){
                $login = 'suel';
                $senha = '123';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if($login == $loginForm && $senha == $senhaForm){
                    echo 'login realizado com  sucesso!';
                    $_SESSION['login'] = $login;
                    header('Location: index.php');
                }else{
                    echo 'Dados invalidos';
                    
                }
            }
            include 'login.php';
        }else{
            include 'home.php';
        }
    ?>
</body>
</html>