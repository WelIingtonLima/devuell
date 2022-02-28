<html style="height: auto">
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH;?>style/css/all.css">
        <link href="<?php echo INCLUDE_PATH;?>style/style.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    </head>
    <body style="background:#282828">
        <div class="error">
            <div>
                <img class="cat-img" src="images/consultas.png">
            </div>
        </div><!--error-->
        <div class="msgSucess">
            <h1>Mensagem enviada com sucesso!</h1>   
        </div>
        
    </body>
</html>

<?php
//error_reporting(E_WARNING);
//ini_set(“display_errors”, 0 );

date_default_timezone_set('America/Sao_Paulo');

//Variáveis
$nome = $_POST['nome'];
$email = $_POST['email'];
$empresa = $_POST['empresa'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
$types = $_POST['types'];
$data_envio = date('d/m/Y');
$hora_envio = date('d/m/Y H:i:s');

//Compo E-mail
$assunto = "Contato pelo Site";
$mensagem = '
    <html>
        <meta charset="UTF-8">
         <body>
            <p><b>Nome: </b>'.$nome.'</p>
            <p><b>E-mail: </b>'.$email.'</p>
            <p><b>Empresa: </b>'.$empresa.'</p>
            <p><b>Telefone: </b>'.$telefone.'</p>
            <p><b>Tipo do projeto: </b>'.$types.'</p>
            <p><b>Mensagem: </b>'.$mensagem.'</p>
            <p>Este e-mail foi enviado em <b>'.$data_envio.'</b> às <b>'.$hora_envio.'</b></p>
        </body>
    </html>
';
//Emails para quem será enviado o formulário
$destino = "contato@devuell.com";

//Este sempre deverá existir para garantir a exibição correta dos caracteres
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= array(
    'From' => $nome,
    'Reply-To' => $email,
    'X-Mailer' => 'PHP/' . phpversion(8.0)
);

//Enviar
mail($destino, $assunto, $mensagem, $headers);

//REMOVER O "PROJETO_01" ANTES DE UPAR PARA O SERVIDOR
echo "<meta http-equiv='refresh' content='5;URL=/PROJETO_01/contato'>";


?>




$headers .= 'From: '.$nome."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();