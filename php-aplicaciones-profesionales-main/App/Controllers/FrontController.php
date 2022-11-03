<?php
namespace App\Controllers;

public function home() {
    echo $this->templates->render('sections/home');
}