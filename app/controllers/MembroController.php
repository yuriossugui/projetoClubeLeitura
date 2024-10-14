<?php

namespace app\controllers;

use app\controllers\Controller;
use app\models\MembroModel;

class MembroController
{

    public function index()
    {
        $model = new MembroModel();
        $membro = $model->listaMembro();

        Controller::view('membro', ['membro' => $membro]);
    }

    public function store($params)
    {
        $model = new MembroModel();
        $model->insertMembro($params->mem_nome, $params->mem_contato, $params->mem_livro_favorito);

        $membro = $model->listaMembro();
        $msg = 'Membro cadastrado com  sucesso !';
        Controller::view('membro', ['membro' => $membro, 'msg'=>$msg]);
    }

    public function editarMembroIndex($params)
    {
        $model = new MembroModel();
        $membro = $model->selectMembro($params->membro_id);


        Controller::view('editarMembroIndex', ['membro' => $membro]);
    }

    public function AlterarMembro($params)
    {
        $model = new MembroModel();
        $model->AlterarMembro($params->membro_id, $params->mem_nome, $params->mem_contato, $params->mem_livro_favorito);

        $membro = $model->listaMembro();
        $msg = 'Alteração feita com sucesso !';
        Controller::view('membro', ['membro' => $membro, 'msg' => $msg]);
    }

    public function excluirMembro($params)
    {
        $model = new MembroModel();
        $model->excluirMembro($params->membro_id);

        $membro = $model->listaMembro();
        $msg = 'Membro excluido com sucesso !';
        Controller::view('membro', ['membro' => $membro, 'msg' => $msg]);
    }

}
