<?php

class Usuarios extends Model {

    public function verificarLogin(){
        if(empty($_SESSION['lgPainel'])){
            header("Location: ".BASE_URL."painel/login"); 
        }
    }
    public function fazerLogin($email, $senha){
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(":email",$email);
        $sql->bindValue(":senha",$senha);
        $sql->execute();
        if($sql->rowCount()>0){
            $sql = $sql->fetch(PDO::FETCH_ASSOC);
            $_SESSION['lgPainel'] = $sql['id'];
            header("Location: ".BASE_URL."painel");
        }else{
            return "Usuário e/ou senha inválidos!<br/>";
        }
    }
    
}
