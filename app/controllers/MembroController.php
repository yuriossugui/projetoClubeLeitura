<?php
namespace app\controllers;

use app\controllers\Controller;

class MembroController{

    public function index($params){
        Controller::view('membro');
    }
}