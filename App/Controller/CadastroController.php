<?php
namespace App\Controller;
use App\Model\CadastroModel;

class CadastroController extends Controller
{
    public static function form()
    {
        include 'Model/CadastroModel.php';
        $model = new CadastroModel();

        if(isset($_GET['id']))
        {
            $model = $model->getById( (int) $_GET['id']);
        }

        parent::render('Cadastro/cadastro_form', $model);
    }

    public static function save()
    {
        parent::isAuthenticated();
        include 'Model/CadastroModel.php';

        $model = new CadastroModel();
        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];

        $model->save();
        header("Location: /cadastro/lista");
    }

    public static function lista()
    {
        include 'Model/CadastroModel.php';
        $model = new CadastroModel();
        $model->getAllRows();

        parent::render('Cadastro/cadastro_lista', $model); 
    }

    public static function delete()
    {
        parent::isAuthenticated();
        include 'Model/CadastroModel.php';
        $model = new CadastroModel();
        $model->delete( (int) $_GET['id']);

        header("Location: /login");
    }
}