<head>
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH;?>style/css/all.css">
    <link href="<?php echo INCLUDE_PATH;?>style/style.css" rel="stylesheet"/>
    <script src="<?php echo INCLUDE_PATH;?>js/scripts.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/jquery.js"></script>
</head>
<body>
    <div class="map">

    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7354.7665431737!2d-45.66762305396727!3d-22.825305358530663!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1629584380206!5m2!1spt-BR!2sbr" width=100% height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
    </div>

    <div class="contato-container">
        <div class="w50 right">
            <form action="consultas" method="POST" name="formulario" onsubmit="return alerta()">
                <img class="imghide" src="images/imgcontact2.png">
                <h2>NOS DIGA COMO QUER O SEU PROJETO <i class="far fa-file-code"></i></h2>
                <input type="text" name="nome" placeholder="Nome..." required>
                <div></div><!--Div-cega-->
                <input type="text" name="email" placeholder="E-mail..." required>
                <div></div><!--Div-cega-->
                <input type="text" name="empresa" placeholder="Empresa ou instituição...">
                <div></div><!--Div-cega-->
                <input type="number" name="telefone" placeholder="Telefone...">
                <div></div><!--Div-cega-->
                <select name="types" placeholder="Escolha o tipo do site " required>
                    <option value="NaoSelecionado">--Escolha o seu projeto--</option>
                    <option value="MktingSocialMedia">Marketing e Gestão de Mídias Sociais</option>
                    <option value="ecommercer">E-Commerce</option>
                    <option value="dynamic">Site Dinamico</option>
                    <option value="onepage">Site One-Page</option>
                </select><!--types-->
                <div></div><!--Div-cega-->
                <textarea name="mensagem" placeholder="Sua observação..."></textarea>
                <div></div><!--Div-cega-->
                <input type="submit" name="acao" value="ENVIAR">
                <div></div><!--Div-cega-->
            </form>
        </div><!--w50 right-->
        
        <div class="w50 left" color="white">
        <div class="justificado">
                <br>
                <h1>FALE CONOSCO!</h1>
                <h3><i class="fas fa-building"></i>   Endereço</h3>
                <p>Santo Antonio do Pinhal | São Paulo</p>
                <h3><i class="fab fa-whatsapp-square"></i>   WhatsApp</h3>
                <p>(12) 9 99613-9924</p>
                <h3><i class="fas fa-envelope"></i>   E-mail</h3>
                <p>contato@devuell.com</p>
            </div><!--justificado-->
            <div><img class="imgcontact" src="images/imgcontato.png"></div>
        </div><!--w50 left-->
        <div class="clear"></div>
    </div><!--contato-container-->
    
            
        
            <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=5512996139924" target="_blank">
                <i class="fa fa-whatsapp"></i>
            </a>
        
</body>


