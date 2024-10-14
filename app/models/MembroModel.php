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

    public function selectMembro($membro_id){
        $con = new Conexao();

        $sql = "SELECT * FROM tb_membro WHERE membro_id = :membro_id";

        $dic = [
            ':membro_id'=>$membro_id
        ];

        $stmt = $con->select($sql,$dic);
        return $stmt;
    }

    public function AlterarMembro($membro_id,$mem_nome,$mem_contato,$mem_livro_favorito){
        $con = new Conexao();

        $sql = "UPDATE tb_membro SET mem_nome = :mem_nome, mem_contato = :mem_contato, mem_livro_favorito = :mem_livro_favorito
        WHERE membro_id = :membro_id";

        $dic = [
            ':mem_nome' => $mem_nome,
            ':mem_contato'=>$mem_contato,
            ':mem_livro_favorito'=>$mem_livro_favorito,
            ':membro_id'=>$membro_id
        ];

        $stmt = $con->update($sql,$dic);
        return $stmt;
    }

    

}
