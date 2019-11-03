<?php
class paginaController extends controller{
    public function index($url){
        $dados = ["pagina"=>[]];
        $p = new Paginas();
        $dados = $p->getPagina($url);
        $this->loadTemplate("pagina",$dados);
    }
}