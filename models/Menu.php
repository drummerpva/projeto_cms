<?php

class Menu extends Model {

    public function getMenu($id = NULL) {
        $array = [];
        $sql = $this->db->query("SELECT * FROM menu " . (($id) ? "WHERE id = $id" : ""));
        if ($sql->rowCount() > 0) {
            if ($id) {
                $array = $sql->fetch(PDO::FETCH_ASSOC);
            } else {
                $array = $sql->fetchAll(PDO::FETCH_ASSOC);
            }
        }
        return $array;
    }
    public function editarMenu($id, $nome, $url){
        $sql = $this->db->prepare("UPDATE menu SET nome = :nome, url = :url WHERE id = :id");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":url", $url);
        $sql->bindValue(":id", $id);
        $sql->execute();
        
    }
    public function adicionarMenu($nome, $url){
        $sql = $this->db->prepare("INSERT INTO menu(nome, url) VALUES(:nome, :url)");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":url", $url);
        $sql->execute();
    }

    public function excluirMenu($id) {
        $sql = $this->db->prepare("DELETE FROM menu WHERE id = ?");
        $sql->execute([$id]);
    }

}
