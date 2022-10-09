<?php
namespace App\DAO;
use \PDO;

abstract class DAO
{
    protected $conexao;

    public function __construct()
    {        
        $dsn = "mysql:host=localhost:3306;dbname=db_sistema";        
        $this->conexao = new PDO($dsn, 'root', '1234');
    }
}