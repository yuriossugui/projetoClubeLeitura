<?php 
namespace app\models;
use app\db\Conexao;

class MembroModel{
    private $mem_nome;
    private $mem_contato;
    private $mem_livro_favorito;

    public function listaMembro(){
        $con = new Conexao();

        $sql = 'SELECT * FROM tb_membro';

        $map = [];        

        $stmt = $con->select($sql,$map);
        return $stmt;
    }

    public function insertMembro($mem_nome,$mem_contato,$mem_livro_favorito){
        $con = new Conexao();

        $sql = "INSERT INTO tb_membro (mem_nome,mem_contato,mem_livro_favorito) 
        VALUES (
        :mem_nome,
        :mem_contato,
        :mem_livro_favorito
        )
        ";

        $dic = [
            ':mem_nome' => $mem_nome,
            ':mem_contato' => $mem_contato,
            ':mem_livro_favorito' => $mem_livro_favorito
        ];

        $stmt = $con->insert($sql,$dic);
        return $stmt;
    }
}