<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro</title>
    <style>
    body{
        background-color: black;
        font-size: 25px;
        font-family:serif;
    }
    h1{
        color:#CA2400;
        font-size: 45px;
    }
    label{
        color:white;
        width:230px;
        display: inline-block;
    }
    input{
        width:239px;
    }
    </style>
</head>
<body>
    <center>
    <h1> Cadastro </h1>
    <form action="/cadastro/save" method="post">

    <input type="hidden" value="<?= $model->id ?>" name="id" />
    <label>Nome:</label>
    <input name="nome" type="text" value="<?= $model->nome ?>" placeholder="adm da silva" required/>
    <br>
    <label>E-mail:</label>
    <input name="email" type="text" value="<?= $model->email ?>" placeholder="adm@etec.com" required/>
    <br>
    <label>Senha:</label>
    <input name="senha" type="password" placeholder="123" required/>
    <br>
    <?php if(isset($_GET['erro']))
    {
        echo '<span style="color:#CA2400;"> E-mail ou senha estão incorretos </span>';
    }
    ?>
    <br>
    <button type="submit">Cadastrar</button>  
    </form>    
    <a href="/login">Login</a>
    <br>
    <a href="/cadastro/lista"> Lista de Usuários </a>
    </center> 
</body>
</html>