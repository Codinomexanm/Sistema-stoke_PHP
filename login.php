<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Entrar</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link href="https://fonts.googleapis.com/css?family=Khula" rel="stylesheet">
    </head>
    <body>
        <div class="top"></div>
        <div class="conteudo">
            <div class="login">
        <form method="post" action="#">
            <br><br><br><br><br><br><br>
            Login: <input type="text" name="login" required="">
            <br> <br> <br>
            Senha: <input type="password" name="senha" required="">
            <br> <br> <br>
            <input type="submit" value="Acessar" class="entrar">
        </form>
            
        <Br>
        Login: adm <br> Senha: adm
        <br>
        <?php
        if(!empty($_POST)){
            $login=$_POST['login'];
           $senha=$_POST['senha'];
           
           if($login=="adm" and $senha=="adm"){
               session_start();
               $_SESSION['logado']="ok";
               header('location:index.php');
           }
 else {
               echo 'Login ou senha incorretos';
 }
        }
        
        ?>
        </div>
        </div>
    </body>
</html>


