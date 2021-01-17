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
        
        if(!isset($SESSION['login'])){          
            if(isset($_POST['acao'])){

                $login = 'suel';
                $senha = '123';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if($login = $loginForm && $senha = $senhaForm){
                    echo 'Seja bem vindo,login realizado com sucesso';
                    header('Location: home.php');
                }else{
                    echo 'Dados incorretos';

                }
            }
            include 'login.php';
        }else{
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
            }
            include 'home.php';
        }
     

    ?>
</body>
</html>