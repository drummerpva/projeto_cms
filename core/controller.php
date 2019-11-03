<?php

class controller{
    private $config;
    
    public function __construct(){
        $c = new Config();
        $this->config = $c->getConfig();
    }
    
    public function loadView($viewName,$viewData = array()){
        extract($viewData);
        require "views/".$viewName.".php";
    }
    public function loadTemplate($viewName,$viewData = array()){
        require 'views/templates/'.$this->config['site_template'].".php";
    }
    public function loadTemplatePainel($viewName,$viewData = array()){
        require 'views/painel.php';
    }
    public function loadViewInTemplate($viewName,$viewData = array()){
        extract($viewData);
        require "views/".$viewName.".php";
    }
    public function loadMenu(){
        $menu = new Menu();
        $m = [];
        $m['menu'] = $menu->getMenu();
        $this->loadView("menu",$m);
    }
}