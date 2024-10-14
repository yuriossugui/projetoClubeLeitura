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
        $msg = 'Cadastro realizado com sucesso !';
        Controller::view('livro',['msg'=>$msg]);
    }

}