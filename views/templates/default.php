<html>
    <head>
        <title><?php echo $this->config['site_title'] ?? "Erro: Configurar o site_title"; ?></title>
        <link href="<?php echo BASE_URL; ?>assets/css/<?php echo $this->config['site_template'];?>.css" rel="stylesheet" />
    </head>
    <body>
        <div class="topo">

        </div>
        <div class="menu">
            <?php 
                $this->loadMenu();
            ?>
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