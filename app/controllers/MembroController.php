<?php
namespace app\controllers;

use app\controllers\Controller;
use app\models\MembroModel;

class MembroController{

    public function index(){
        $model = new MembroModel();
        $membro = $model->listaMembro();

        Controller::view('membro',['membro'=>$membro]);
    }

    public function store($params){
        $model = new MembroModel();
        $model->insertMembro($params->mem_nome,$params->mem_contato,$params->mem_livro_favorito);

        $membro = $model->listaMembro();

        Controller::view('membro',['membro'=>$membro]);
    }
}