<div class="home_banner" style="background-image: url('<?php echo BASE_URL . "assets/images/" . $this->config['home_banner']; ?>');" ></div>
<div class="home_banner_txt"><?php echo $this->config['home_welcome']; ?></div>

<div class="home_depo">
    <h3>Depoimentos de clientes satisfeitos</h3>
    <?php foreach ($depoimentos as $dep) {
        ?>
    <b><?php echo $dep['nome'];?></b><br/>
    <?php echo $dep['texto'];?>
    <hr/>
        <?php
    }
    ?>
</div>

<div class="home_cta">
    Deseja conferir nossos serviços?<br/>
    <a href="<?php echo BASE_URL . "servicos"; ?>"><div>Conferir nossos serviços</div></a>
</div>