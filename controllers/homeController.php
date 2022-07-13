<?php 
class homeController extends controller{
    public function __construct(){
        parent::__construct();

        $alunos = new Alunos();

        if(!alunos->isLogged()){
            header("location: "+$BASE+"login");
        }
    }

    public function index(){
        $dados = array();

        $this->loadTemplate('home', $dados);
    }
}