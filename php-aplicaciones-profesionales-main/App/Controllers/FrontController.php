<?php
namespace App\Controllers;

use League\Plates\Engine;

class FrontController {
    private $templates;

    public function __construct(){
        $this->templates = new Engine('../views');
        //$dotenv = Dotenv::createImmutable('../');
        //$dotenv->load();
    }

    public function home() {
        echo $this->templates->render('sections/home');
    }

    public function error404(){
        echo $this->templates->render('sections/404');
    }

}