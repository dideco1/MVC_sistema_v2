<?php
namespace App\DAO;
use \PDO;
use App\Model\CadastroModel;

class CadastroDAO extends DAO
{
    function __construct()
    {
        parent::__construct();
    }

    public function insert(CadastroModel $model)
    {
        $sql = "INSERT INTO usuario (nome, email, senha)
        VALUES (?, ?, sha1(?))";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM usuario";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function update(CadastroModel $model)
    {
        $sql = "UPDATE usuario SET nome=?, email=?, senha=sha1(?) WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    }

    public function selectById(int $id)
    {
        include_once 'Model/CadastroModel.php';

        $sql = "SELECT * FROM usuario WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM usuario WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}