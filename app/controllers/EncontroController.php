<?php
namespace app\controllers;

use app\controllers\Controller;
use app\models\EncontroModel;
use app\models\LivroModel;
use app\models\MembroModel;

class EncontroController{

    public function cadEncontro(){

        $livroModel = new LivroModel();
        $membroModel = new MembroModel();

        $livro = $livroModel->listaLivro();
        $membro = $membroModel->listaMembro();

        Controller::view('CadEncontro',['livro'=>$livro,'membro'=>$membro]);

    }

    public function cadEncontroMembros(){
        $membroModel = new MembroModel();
        $membro = $membroModel->listaMembro();

        Controller::view('cadEncontroMembros',['membro'=>$membro]);
    }


}