<?php
namespace app\controllers;

use app\controllers\Controller;

class LivroController{
    
    public function index(){
        Controller::view('livro');
    }

}