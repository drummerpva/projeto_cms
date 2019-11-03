<h1>Editar Menu</h1>
<form method="POST">
    Nome:<br/>
    <input type="text" name="nome" required value="<?php echo $menu['nome'] ?? "";?>"><br/><br/>
    URL:<br/>
    <input type="text" name="url" value="<?php echo $menu['url'] ?? "";?>"><br/><br/>
    <input type="submit" value="Salvar"/>
</form>