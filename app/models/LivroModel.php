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

    }