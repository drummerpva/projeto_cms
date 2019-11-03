<h1>Adicionar Pagina</h1>
<form method="POST">
    Titulo:<br/>
    <input type="text" name="titulo" required ><br/><br/>
    URL:<br/>
    <input type="text" name="url"  ><br/><br/>
    Criar Menu Automaticamente?<br/>
    <input type="checkbox" name="addMenu" value="sim"/><br/><br/>
    Corpo:<br/>
    <textarea name="corpo" id="corpo"></textarea><br/><br/>
    <input type="submit" value="Adicionar"/>
</form>
<script type="text/javascript" src="<?php echo BASE_URL; ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript" >
    window.onload = function () {
        CKEDITOR.replace("corpo");
    };
</script>