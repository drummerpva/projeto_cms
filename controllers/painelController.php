<?php

class painelController extends controller {

    public function index() {
        $u = new Usuarios();
        $u->verificarLogin();

        $dados = ['paginas' => []];

        $p = new Paginas();
        $dados['paginas'] = $p->getPaginas();

        $this->loadTemplatePainel("painel/home", $dados);
    }

    public function menus() {
        $u = new Usuarios();
        $u->verificarLogin();

        $dados = ['menus' => []];

        $m = new Menu();
        $dados['menus'] = $m->getMenu();

        $this->loadTemplatePainel("painel/menus", $dados);
    }

    public function configs() {
        $u = new Usuarios();
        $u->verificarLogin();
        if(!empty($_POST['site_title'])){
            $site_title = addslashes($_POST['site_title']);
            $home_welcome = addslashes($_POST['home_welcome']);
            $site_template = addslashes($_POST['site_template']);
            $c = new Config();
            $c->setPropriedade("site_title", $site_title);
            $c->setPropriedade("home_welcome", $home_welcome);
            $c->setPropriedade("site_template", $site_template);
            if(!empty($_FILES['home_banner']['tmp_name'])){
                move_uploaded_file($_FILES['home_banner']['tmp_name'], BASE_URL."assets/images/".$_FILES['home_banner']['name']);
                $c->setPropriedade("home_banner", $_FILES['home_banner']['name']);
            }
            header("Location: ".BASE_URL."painel/configs");
        }
        
        $dados = ['configs' => []];

        $m = new Menu();
        $dados['configs'] = $m->getMenu();

        $this->loadTemplatePainel("painel/config", $dados);
    }

    public function menuEditar($id) {
        if (!empty($id)) {
            $u = new Usuarios();
            $u->verificarLogin();
            $m = new Menu();
            if (!empty($_POST['nome'])) {
                $nome = addslashes($_POST['nome']);
                $url = addslashes($_POST['url']);
                $m->editarMenu($id, $nome, $url);
                header("Location: " . BASE_URL . "painel/menus");
                exit;
            }
            $dados = ['menu' => []];

            $dados['menu'] = $m->getMenu($id);

            $this->loadTemplatePainel("painel/menuEditar", $dados);
        } else {
            header("Location: " . BASE_URL . "painel/menus");
            exit;
        }
    }

    public function menuExcluir($id) {
        if (!empty($id)) {
            $id = addslashes($id);
            $u = new Usuarios();
            $u->verificarLogin();

            $m = new Menu();
            $m->excluirMenu($id);
            header("Location: " . BASE_URL . "painel/menus");
            exit;
        } else {
            header("Location: " . BASE_URL . "painel/menus");
            exit;
        }
    }

    public function menuAdd() {
        $u = new Usuarios();
        $u->verificarLogin();
        $m = new Menu();
        if (!empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $url = addslashes($_POST['url']);
            $m->adicionarMenu($nome, $url);
            header("Location: " . BASE_URL . "painel/menus");
            exit;
        }
        $dados = [];
        $this->loadTemplatePainel("painel/menuAdd", $dados);
    }

    public function paginaExluir($id) {
        if (!empty($id)) {
            $id = addslashes($id);
            $u = new Usuarios();
            $u->verificarLogin();
            $p = new Paginas();
            $p->excluirPagina($id);
            header("Location: " . BASE_URL . "painel");
            exit;
        } else {
            header("Location: " . BASE_URL . "painel");
            exit;
        }
    }

    public function paginaEditar($id) {
        if (!empty($id)) {
            $id = addslashes($id);
            $u = new Usuarios();
            $u->verificarLogin();
            $p = new Paginas();
            if (!empty($_POST['titulo'])) {
                $titulo = addslashes($_POST['titulo']);
                $corpo = $_POST['corpo'];
                $url = addslashes($_POST['url']);
                $p->editarPagina($titulo, $corpo, $url, $id);
                header("Location: " . BASE_URL . "painel");
                exit;
            }
            $dados = ['pagina' => []];

            $dados['pagina'] = $p->getPaginaId($id);

            $this->loadTemplatePainel("painel/paginaEditar", $dados);
        } else {
            header("Location: " . BASE_URL . "painel");
            exit;
        }
    }

    public function paginaAdd() {
        $u = new Usuarios();
        $u->verificarLogin();
        $p = new Paginas();
        $m = new Menu();
        if (!empty($_POST['titulo'])) {
            $titulo = addslashes($_POST['titulo']);
            $corpo = $_POST['corpo'];
            $url = addslashes($_POST['url']);
            $p->adicionarPagina($titulo, $corpo, $url);
            if (!empty($_POST['addMenu'])) {
                $m->adicionarMenu($titulo, $url);
            }
            header("Location: " . BASE_URL . "painel");
            exit;
        }
        $dados = [];
        $this->loadTemplatePainel("painel/paginaAdd", $dados);
    }

    public function login() {
        if (!empty($_SESSION['lgPainel'])) {
            header("Location: " . BASE_URL . "painel");
            exit;
        }
        $dados = ["erro" => null];
        if (!empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);
            $u = new Usuarios();
            $dados['erro'] = $u->fazerLogin($email, $senha);
        }

        $this->loadView("painel/login", $dados);
    }

    public function logout() {
        unset($_SESSION['lgPainel']);
        header("Location: " . BASE_URL . "painel");
    }

}
