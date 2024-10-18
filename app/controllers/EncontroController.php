<?php
namespace app\controllers;

use app\controllers\Controller;
use app\models\EncontroModel;

class EncontroController{
    
    public function index(){
        Controller::view('encontro');
    }

    public function insertEncontro($params){
        $model = new EncontroModel();
        $model->insertEncontro($params->enc_data,$params->enc_local,$params->liv_titulo,$params->membro_id);

        Controller::view('encontro');
    }

}