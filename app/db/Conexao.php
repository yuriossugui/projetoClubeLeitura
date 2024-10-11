<?php

namespace app\db;

use PDO;

class Conexao
{
    private $db;

    function __construct()
    {
        $dsn = 'mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME']  . ';charset=utf8';
        $this->db = new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    function select($sql, $array = [])
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($array);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function insert($sql, $array = [])
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($array);
        return $this->db->lastInsertId();
    }

    function update($sql, $array = [])
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($array);
        return $stmt->rowCount();
    }

    function delete($sql, $array = [])
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($array);
        return $stmt->rowCount();
    }

    function lastInsertId()
    {
        return $this->db->lastInsertId();
    }
}