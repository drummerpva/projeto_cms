<h1>Editar Página</h1>
<form method="POST">
    Nome:<br/>
    <input type="text" name="titulo" required value="<?php echo $pagina['titulo'] ?? ""; ?>"><br/><br/>
    URL:<br/>
    <input type="text" name="url"  value="<?php echo $pagina['url'] ?? ""; ?>"><br/><br/>
    Corpo:<br/>
    <textarea name="corpo" id="corpo"><?php echo $pagina['corpo'] ?? ""; ?></textarea><br/><br/>
    <input type="submit" value="Salvar"/>
</form>
<script type="text/javascript" src="<?php echo BASE_URL; ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript" >
    window.onload = function () {
        CKEDITOR.replace("corpo");
    };
</script>