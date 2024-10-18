<?php
    namespace app\models;
    use app\db\Conexao;

    class EncontroModel{
        public function insertEncontro($enc_data,$enc_local,$livro_id,$membro_id){
            $con = new Conexao();

            $sql = "INSERT INTO tb_encontro (enc_data,enc_local,livro_id,membro_id) 
            VALUES (:enc_data,:enc_local,:livro_id,:membro_id)";

            $dic = [
                'enc_data'=>$enc_data,
                'enc_local'=>$enc_local,
                'livro_id'=>$livro_id,
                'membro_id'=>$membro_id
            ];

            $stmt = $con->insert($sql,$dic);
            return $stmt;
        }
        
    }