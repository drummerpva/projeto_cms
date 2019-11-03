<?php

class Depoimentos extends Model {
    public function getDepoimentos($limite = 0){
        $array = [];
        $sql = $this->db->query("SELECT * FROM depoimentos  ORDER BY RAND() ".(($limite) ? "LIMIT $limite" : ""));
        if($sql->rowCount()>0){
            $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        
        return $array;
    }
}
