<?php
    namespace app\controllers;
    use app\models\GeneroModel;
    use app\controllers\Controller;

    class GeneroController{
        
        public function generoIndex(){
            $model = new GeneroModel();
            
            $genero = $model->listarGenero();

            if(!isset($genero)){
                $msg = 'Nenhum gênero encontrado !';
                Controller::view('genero',['msg'=>$msg]);
            }else{
                Controller::view('genero',['genero'=>$genero]);
            }
        }

        public function insertGenero($params){
            $model = new GeneroModel();
            $model->insertGenero($params->gen_nome);

            $genero = $model->listarGenero();
            $msg = 'Gênero cadastrado com sucesso !';
            Controller::view('genero',['genero'=>$genero,'msg'=>$msg]);
        }

        public function selectGenero($params){
            $model = new GeneroModel();

            $genero = $model->selectGenero($params->genero_id);

            Controller::view('editarGenero',['genero'=>$genero]);
        }

        public function updateGenero($params){
            $model = new GeneroModel();

            $model->updateGenero($params->genero_id,$params->gen_nome);

            $genero = $model->listarGenero();
            $msg = 'Alteração realizada com sucesso !';
            Controller::view('genero',['genero'=>$genero,'msg'=>$msg]);
        }

        public function deleteGenero($params){
            $model = new GeneroModel();

            $model->deleteGenero($params->genero_id);

            $genero = $model->listarGenero();
            $msg = 'Exclusão realizada com sucesso !';
            Controller::view('genero',['genero'=>$genero,'msg'=>$msg]);
        }

    }