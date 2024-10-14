<?php
    namespace app\models;
    use app\db\Conexao;

    class GeneroModel{

        public function listarGenero(){
            $con = new Conexao();

            $sql = "SELECT * FROM tb_genero";

            $stmt = $con->select($sql,[]);
            return $stmt;
        }

        public function insertGenero($gen_nome){
            $con = new Conexao();

            $sql = "INSERT INTO tb_genero (gen_nome) VALUES (:gen_nome)";

            $dic = [
                ':gen_nome' => $gen_nome
            ];

            $stmt = $con->insert($sql,$dic);
            return $stmt;
        }

        public function selectGenero($genero_id){
            $con = new Conexao();

            $sql = "SELECT * FROM tb_genero WHERE genero_id = :genero_id";

            $dic = [
                ':genero_id' => $genero_id
            ];

            $stmt = $con->select($sql,$dic);
            return $stmt;
        }

        public function updateGenero($genero_id,$gen_nome){
            $con = new Conexao();

            $sql = "UPDATE tb_genero SET gen_nome = :gen_nome WHERE genero_id = :genero_id";

            $dic = [
                ':genero_id'=>$genero_id,
                ':gen_nome'=>$gen_nome
            ];

            $stmt = $con->select($sql,$dic);
            return $stmt;
        }

        public function deleteGenero($genero_id,){
            $con = new Conexao();

            $sql = "DELETE FROM tb_genero WHERE genero_id = :genero_id";

            $dic = [
                ':genero_id'=>$genero_id,
            ];

            $stmt = $con->select($sql,$dic);
            return $stmt;
        }

    }