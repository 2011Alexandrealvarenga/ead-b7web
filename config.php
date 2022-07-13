<?php 
// require 'environment.php';

define("BASE", "http://localhost:8080/PHP/cursos/b7web/ead-b7web/");

// global $config;
// $config = array();
// if(ENVIRONMENT == 'development'){
    // $config['dbname'] = 'ead_b7web';
    // $config['host'] = 'localhost';
    // $config['dbuser'] = 'root';
    // $config['dbpass'] = '';
// }else{
    // $config['dbname'] = 'ead_b7web';
    // $config['host'] = 'localhost';
    // $config['dbuser'] = 'root';
    // $config['dbpass'] = '';
// }
// $dbname = 'ead_b7web';
// $dbhost = 'localhost';
// $dbuser = 'root';
// $dbpass = '';
$pdo = new PDO("mysql:dbname=ead_b7web;dbhost=localhost",'root','');