<?php
    namespace app\models;
    use app\db\Conexao;

    class LivroModel{
        
        public function listaLivro(){
            $con = new Conexao();
    
            $sql = 'SELECT * FROM tb_livro INNER JOIN tb_genero ON tb_livro.genero_id = tb_genero.genero_id';
    
            $map = [];
    
            $stmt = $con->select($sql,$map);
            return $stmt;
        }

        public function insertLivro($liv_titulo,$liv_autor,$genero_id,$liv_numero_paginas){
            $con = new Conexao();
    
            $sql = "INSERT INTO tb_livro (liv_titulo,liv_autor,genero_id,liv_numero_paginas) 
            VALUES (
            :liv_titulo,
            :liv_autor,
            :genero_id,
            :liv_numero_paginas)
            ";
    
            $dic = [
                ':liv_titulo' => $liv_titulo,
                ':liv_autor' => $liv_autor,
                ':genero_id' => $genero_id,
                ':liv_numero_paginas'=>$liv_numero_paginas
            ];
    
            $stmt = $con->insert($sql,$dic);
            return $stmt;
        }

        public function selectLivro($livro_id){

            $con = new Conexao();
    
            $sql = "SELECT * FROM tb_livro 
            INNER JOIN tb_genero ON tb_livro.genero_id = tb_genero.genero_id 
            WHERE livro_id = :livro_id";
    
            $dic = [
                ':livro_id'=>$livro_id
            ];
    
            $stmt = $con->select($sql,$dic);
            return $stmt;
        }

        public function updateLivro($liv_titulo,$liv_autor,$liv_numero_paginas,$genero_id,$livro_id){
            $con = new Conexao();
    
            $sql = "UPDATE tb_livro SET 
            liv_titulo = :liv_titulo, 
            liv_autor = :liv_autor,
            liv_numero_paginas = :liv_numero_paginas,
            genero_id = :genero_id   
            WHERE livro_id = :livro_id
            ";
    
            $dic = [
                ':liv_titulo' => $liv_titulo,
                ':liv_autor' => $liv_autor,
                ':liv_numero_paginas'=>$liv_numero_paginas,
                ':genero_id' => $genero_id,
                ':livro_id'=>$livro_id
            ];
    
            $stmt = $con->update($sql,$dic);
            return $stmt;
        }

        public function deleteLivro($livro_id){
            $con = new Conexao();
    
            $sql = "DELETE FROM tb_livro WHERE livro_id = :livro_id";
    
            $dic = [
                ':livro_id'=>$livro_id
            ];
    
            $stmt = $con->delete($sql,$dic);
            return $stmt;
        }

    }