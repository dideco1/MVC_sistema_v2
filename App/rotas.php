<?php
include 'autoload.php';
use App\Controller\{
    PessoaController,
    ProdutoController,
    CategoriaProdutoController,
    FuncionarioController,
    LoginController,
    CadastroController
};

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{
    # Rota Menu
    case '/menu':
        include 'menu.php';
    break;
    
    # Rotas Login
    case '/login':
        LoginController::index();
    break;

    case '/login/auth':
        LoginController::auth();
    break;

    case '/logout':
        LoginController::logout();
    break;

    # Rotas Pessoa
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;

    # Rotas Produto
    case '/produto':
        ProdutoController::lista();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
        ProdutoController::delete();
    break;

    # Rotas Categoria Produto
    case '/categoriaproduto':
        CategoriaProdutoController::lista();
    break;

    case '/categoriaproduto/form':
        CategoriaProdutoController::form();
    break;

    case '/categoriaproduto/save':
        CategoriaProdutoController::save();
    break;

    case '/categoriaproduto/delete':
        CategoriaProdutoController::delete();
    break;

    # Rotas Funcionário

    case '/funcionario':
        FuncionarioController::lista();
    break;

    case '/funcionario/form':
        FuncionarioController::form();
    break;

    case '/funcionario/save':
        FuncionarioController::save();
    break;

    case '/funcionario/delete':
        FuncionarioController::delete();
    break;  

    # Rotas Cadastro

    case '/cadastro':
        CadastroController::form();        
    break;

    case '/cadastro/save':
        CadastroController::save();
    break;

    case '/cadastro/lista':
        CadastroController::lista();
    break;

    case '/cadastro/delete':
        CadastroController::delete();
    break;
        
    
 

    default:
        LoginController::index();
    break;
}