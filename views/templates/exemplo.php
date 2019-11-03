<html>
    <head>
        <title><?php echo $this->config['site_title'] ?? "Erro: Configurar o site_title"; ?></title>
        <link href="<?php echo BASE_URL; ?>assets/css/exemplo.css" rel="stylesheet" />
        <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
        <div class="menu">

        </div>
        <div class="topo">

        </div>
        <div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?> 

        </div>
        <div class="rodape">

        </div>



        <script src="<?php echo BASE_URL; ?>assets/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/script.js" type="text/javascript"></script>
    </body>

</html>