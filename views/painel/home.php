<h1>Páginas</h1>
<a href="<?php echo BASE_URL."painel/paginaAdd"?>">Adicionar Página</a><br/><br/>
<table width="100%">
    <tr>
        <th width="50" align="left">ID</th>
        <th align="left">URL</th>
        <th align="left">Titulo</th>
        <th align="left">Ações</th>
    </tr>
    <?php foreach ($paginas as $p){
        ?>
    <tr>
        <td><?php echo $p['id'];?></td>
        <td><?php echo $p['url'];?></td>
        <td><?php echo $p['titulo'];?></td>
        <td>
            <a href="<?php echo BASE_URL."painel/paginaEditar/".$p['id'];?>">[ EDITAR ]</a>
            <a href="<?php echo BASE_URL."painel/paginaExluir/".$p['id'];?>">[ EXCLUIR ]</a>
        </td>
    </tr>
            <?php
    }
?>
</table>