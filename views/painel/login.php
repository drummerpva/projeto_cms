<?php echo $erro ?? "";?>
<form method="POST">
    E-mail:<br/>
    <input type="email" name="email" required/><br/><br/>
    Senha:<br/>
    <input type="password" name="senha" required/> <br/><br/>
    <input type="submit" value="Entrar"/>
</form>