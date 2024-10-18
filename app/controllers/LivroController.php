<?php
namespace app\controllers;

use app\controllers\Controller;
use app\models\LivroModel;
use app\models\GeneroModel;

class LivroController{
    
    public function index(){
        $modelLivro = new LivroModel();
        $livro = $modelLivro->listaLivro();
        $modelGenero = new GeneroModel();
        $genero = $modelGenero->listarGenero(); 

        Controller::view('livro',['livro'=>$livro,'genero'=>$genero]);
    }

    public function store($params){
        $modelLivro = new LivroModel();
        $modelLivro->insertLivro($params->liv_titulo,$params->liv_autor,$params->genero_id,$params->liv_numero_paginas);
        
        $livros = $modelLivro->listaLivro(); 
        $msg = 'Cadastro realizado com sucesso !';
        $modelGenero = new GeneroModel();
        $genero = $modelGenero->listarGenero(); 

        Controller::view('livro',['msg'=>$msg,'livro'=>$livros,'genero'=>$genero]);
    }

    public function editar($params){
        $model = new LivroModel();
        $livro = $model->selectLivro($params->livro_id);
        $modelGenero = new GeneroModel();
        $genero = $modelGenero->listarGenero(); 

        Controller::view('editarLivro',['livro'=>$livro,'genero'=>$genero]);
    }

    public function updateLivro($params){
        $model = new LivroModel();
        $model->updateLivro($params->liv_titulo, $params->liv_autor, $params->liv_numero_paginas, $params->genero_id, $params->livro_id);
        
        $livro = $model->listaLivro();
        $modelGenero = new GeneroModel();
        $genero = $modelGenero->listarGenero(); 

        Controller::view('livro',['livro'=>$livro,'genero'=>$genero]);
    }

    public function deleteLivro($params){
        $model = new LivroModel();
        $model->deleteLivro($params->livro_id);

        $modelLivro = new LivroModel();
        $livro = $modelLivro->listaLivro();
        $modelGenero = new GeneroModel();
        $genero = $modelGenero->listarGenero(); 

        Controller::view('livro',['livro'=>$livro,'genero'=>$genero]);
    }

}