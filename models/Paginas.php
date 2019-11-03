<?php

class Paginas extends Model {

    public function getPagina($pag) {
        $array = [];
        $sql = $this->db->prepare("SELECT * FROM paginas WHERE url = ?");
        $sql->execute([$pag]);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch(PDO::FETCH_ASSOC);
        }
        return $array;
    }
    public function getPaginaId($pag) {
        $array = [];
        $sql = $this->db->prepare("SELECT * FROM paginas WHERE id = ?");
        $sql->execute([$pag]);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch(PDO::FETCH_ASSOC);
        }
        return $array;
    }

    public function getPaginas() {
        $array = [];
        $sql = $this->db->query("SELECT id, titulo, url FROM paginas");
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $array;
    }

    public function excluirPagina($id) {
        $sql = $this->db->prepare("DELETE FROM paginas WHERE id = ?");
        $sql->execute([$id]);
    }

    public function adicionarPagina($titulo, $corpo, $url) {
        $sql = $this->db->prepare("INSERT INTO paginas(titulo, corpo, url) VALUES(:titulo, :corpo, :url)");
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":corpo", $corpo);
        $sql->bindValue(":url", $url);
        $sql->execute();
    }

    public function editarPagina($titulo, $corpo, $url, $id) {
        $sql = $this->db->prepare("UPDATE paginas SET titulo = :titulo, corpo = :corpo, url = :url WHERE id = :id");
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":corpo", $corpo);
        $sql->bindValue(":url", $url);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

}
