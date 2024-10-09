<?php
namespace app\controllers;

use app\controllers\Controller;

class LoginController{

    public function login(){
        Controller::view('login');
    }

}