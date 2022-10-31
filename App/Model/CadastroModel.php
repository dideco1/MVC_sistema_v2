<?php
namespace App\Model;
use App\DAO\CadastroDAO;

class CadastroModel extends Model
{
    public $id, $nome, $email, $senha;

    public function save()
    {
        include 'DAO/CadastroDAO.php';
        $dao = new CadastroDAO();

        if($this->id == null)
        {
            $dao->insert($this);
        }
        else
        {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        include 'DAO/CadastroDAO.php';
        $dao = new CadastroDAO();
        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/CadastroDAO.php';
        
        $dao = new CadastroDAO();
        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new CadastroDAO();
    }
    
    public function delete(int $id)
    {
        include 'DAO/CadastroDAO.php';
        $dao = new CadastroDAO();
        $dao->delete($id);
    }

}