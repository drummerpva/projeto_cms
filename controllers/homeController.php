<?php
    class homeController extends controller{
        public function index(){
            $dados = [
                "depoimentos" => []
            ];
            $d = new Depoimentos();
            $dados['depoimentos'] = $d->getDepoimentos(2);
            $this->loadTemplate('home',$dados);
        }
        
    }
