<?php 
class loginController extends controller{
    public function __construct(){
        parent::__construct();

        $alunos = new Alunos();


    }

    public function index(){
        $array = array();

        $this->loadView('login', $array);
    }
}