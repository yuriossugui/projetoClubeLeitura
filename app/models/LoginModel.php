<?php
namespace app\models;
use app\db\Conexao;

class LoginModel{

    private $usu_nome;
    private $usu_senha;
    private $usu_email;
    private $usu_tipo;

    public function validacao($usu_nome,$usu_senha){
        $con = new Conexao();
        $sql = 'SELECT COUNT(*) FROM tb_usuario WHERE usu_nome = :usu_nome AND usu_senha = :usu_senha';

        $dic = [
            ':usu_nome'=>$usu_nome,
            ':usu_senha'=>$usu_senha 
        ];

        $stmt = $con->select($sql, $dic);
        return $stmt;
    }

}