<h1>Menus</h1>
<a href="<?php echo BASE_URL."painel/menuAdd"?>">Adicionar Menu</a><br/><br/>
<table width="100%">
    <tr>
        <th width="50" align="left">ID</th>
        <th align="left">Nome</th>
        <th align="left">URL</th>
        <th align="left">Ações</th>
    </tr>
    <?php foreach ($menus as $m){
        ?>
    <tr>
        <td><?php echo $m['id'];?></td>
        <td><?php echo $m['nome'];?></td>
        <td><?php echo $m['url'];?></td>
        <td>
            <a href="<?php echo BASE_URL."painel/menuEditar/".$m['id']?>">[ EDITAR ]</a>
            <a href="<?php echo BASE_URL."painel/menuExcluir/".$m['id']?>">[ EXCLUIR ]</a>
        </td>
    </tr>
            <?php
    }
?>
</table>