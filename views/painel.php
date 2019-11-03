<html>
    <head>
        <title>Painel Administrativo</title>
        <link href="<?php echo BASE_URL; ?>assets/css/estilos.css" rel="stylesheet" />
    </head>
    <body>
        <div class="menu">
            <ul>
                <a href="<?php echo BASE_URL."painel";?>"><li>Páginas</li></a>
                <a href="<?php echo BASE_URL."painel/menus";?>"><li>Menus</li></a>
                <a href="<?php echo BASE_URL."painel/configs";?>"><li>Configurações</li></a>
            </ul>
            <div class="menuRight">
                <a style="float:right;" href="<?php echo BASE_URL . "painel/logout"; ?>">Sair</a>
            </div>
        </div>
        <div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?> 

        </div>
        <div class="rodape">

        </div>



        <script src="<?php echo BASE_URL; ?>assets/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/script.js" type="text/javascript"></script>
    </body>

</html>