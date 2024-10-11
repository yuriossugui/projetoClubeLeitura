<?php
namespace app\controllers;
use app\models\LoginModel;

use app\controllers\Controller;
session_start();
class LoginController{

    public function login(){
        Controller::view('login');
    }

    public function logout(){
        session_unset();
        session_destroy();
        $_SESSION['user'] = '';
        Controller::view('login');
    }

    public function validacao($params){
        $model = new LoginModel($params->usu_nome,$params->usu_senha);
        $retorno = $model->validacao($params->usu_nome,$params->usu_senha);

        if($retorno[0]['COUNT(*)'] == 1){

            $_SESSION['user'] = $params->usu_nome;
            Controller::view('home');
        }else{
            $msg = 'Credenciais inválidas';
            Controller::view('login',['msg'=>$msg]);
        }
        
    }

    public function pegaNome(){
        if(isset($_SESSION['user'])){
            return $_SESSION['user'];
        }
        return false;
    }

    public function auth(){
        if(!isset($_SESSION['user'])){
            header('Location: /login');
        }
    }
}