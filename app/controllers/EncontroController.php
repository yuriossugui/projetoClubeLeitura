<?php
namespace app\controllers;

use app\controllers\Controller;

class EncontroController{
    
    public function index(){
        Controller::view('encontro');
    }

}