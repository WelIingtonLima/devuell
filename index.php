<?php include('config.php')?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>DEVUELL</title>
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH;?>style/css/all.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH;?>style/style.css" rel="stylesheet"/>
        <link href="classes/painel.php">
        <meta charset="UTF-8">
        <meta name="keywords" content="web,webdesign,design,marketing,dev,desenvolvimentoweb">
        <meta name="Description" content="Desing e Desinvolvimento de Sites">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default%22%3E">
        </script>
        <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="194x194" href="icon/favicon-194x194.png">
        <link rel="icon" type="image/png" sizes="192x192" href="icon/android-chrome-192x192.png">
        <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#f1f1f1">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url) {
            case 'sobre':
                echo '<target target="sobre" />';
                break;
            
            case 'projetos':
                echo '<target target="projetos" />';
                break;
                
            case 'consultas':
                echo '<target target="consultas" />';
                break;    
        }
    ?>
    <header>
        <div class="center">
            <div class="logo left">
                <a href="/"><img src="<?php echo INCLUDE_PATH;?>images/gif.gif" id="logo"/></a>
            </div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>projetos">Projetos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class=" botao-menu">
                    <i class="fas fa-bars" id="icon"></i> 
                </div><!--botao menu-->
                <ul id="menu">
                    <li><a href="<?php echo INCLUDE_PATH;?>"><b>Home</b></a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>projetos">Projetos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                </ul>
            </nav>
        </div><!--center-->
        <div class="clear"></div>
    </header>
    
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            if($url == 'consultas'){
                include('pages/consultas.php');
            }
            if($url != 'sobre' && $url != 'projetos'){
                $pagina404 = true;
                include('pages/404.php');
            }else{
                include('pages/home.php');
            }
            
        
        }
        
    ?>

        <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
            <div class="center">
                <a href="/"><img class="logorodape" src="<?php echo INCLUDE_PATH ;?>images/novalogo.png"></a>
                <p>Todos os direitos reservados - Devuell 2021</p>
            </div><!--center-->
            <div class="clear"></div>
        </footer>
        <script src="<?php echo INCLUDE_PATH;?>js/jquery.js"></script> 
        <script src="<?php echo INCLUDE_PATH;?>js/scripts.js"></script>
        <script src="https://kit.fontawesome.com/2a85882907.js" crossorigin="anonymous"></script>
    <?php
        if($url == 'contato'){
    ?>
        
        <script src="<?php echo INCLUDE_PATH;?>js/map.js"></script>
    <?php } ?>
    <script src="<?php echo INCLUDE_PATH; ?>js/fadeBox.js"></script>
    </body>
</html>


