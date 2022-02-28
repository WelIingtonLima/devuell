
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <title>login</title>
</head>

<body>

    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
         
            <div class="logomarca"><img src="<?php echo INCLUDE_PATH ;?>images/novalogo.png"></div>
            
            <div class="container">
            
                <div class="form">
                    <?php
                if(isset($_POST['acao'])){
                $user = $_POST['user'];
                $password = $_POST['password'];
                $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
                $sql->execute(array($user,$password));
                    if($sql->rowCount() == 1){
                        header("location: main.php");
                    }else{
                        echo 'senha incorreta';
                    }
                }
            ?>
                    <h2>Login</h2>
                    <form method="POST">
                        <div class="inputBox">
                            <input type="text" name="user" placeholder="Usuário" required>
                        
                            <input type="password" name="password" placeholder="Senha" required>
                        
                            <input type="submit" name="acao" value="Entrar">
                        </div>
                        <p class="forget">Esqueceu a senha? <a href="#">Clique aqui!</a></p>
                        <p class="forget">Não tem uma conta? <a href="#">Criar conta!</a></p>
                    </form>
                </div><!--form-->
            </div><!--container-->
        </div><!--box-->
    </section>
</body>
</html>