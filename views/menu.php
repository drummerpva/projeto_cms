<ul>
    <?php foreach ($menu as $m) {
        ?>
    <a href="<?php echo BASE_URL.$m['url'];?>"><li><?php echo $m['nome'];?></li></a>
        <?php
    }
    ?>
</ul>