<?php
namespace app\controllers;
use app\models\LoginModel;

use app\controllers\Controller;

class LoginController{

    public function login(){
        Controller::view('login');
    }

    public function validacao($params){
        $model = new LoginModel($params->usu_nome,$params->usu_senha);
        $retorno = $model->validacao($params->usu_nome,$params->usu_senha);

        if($retorno[0]['COUNT(*)'] = 1){
            Controller::view('home');
        }else{
            $msg = 'Credenciais inválidas';
            Controller::view('login',['msg'=>$msg]);
        }
        
    }
}