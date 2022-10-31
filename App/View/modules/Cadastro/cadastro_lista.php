<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body{
        background-color: black;
        font-size: 20px;
        font-family:serif;

    }
    legend{
        color:white;
        font-size: 45px;
    }
    th{
        color: white;
        text-align:center;
    }
    td{
        color: #CA2400;
        text-align:center;
    }
    a:hover{
        color:#CA2400;
    }
    a:active{
        color:white;
    }
    button{
        position:absolute;
        top: 0px;
        color:white;
        background-color:grey;
    }
    </style>
    
</head>
<body>
    <center>
        <legend> Lista de Usuários</legend>
        <table border="2">
            <tr>
                <th>&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha (criptografada)</th>
            </tr>

            <?php foreach($model->rows as $item): ?>
            <tr>
                <td> <a href="/cadastro/delete?id=<?= $item['id'] ?>">X</a> </td>
                <td><?= $item['id'] ?></td>
                <td>&nbsp<a href="/cadastro/form?id=<?= $item['id'] ?>"> <?= $item['nome'] ?> </a>&nbsp</td>
                <td>&nbsp<?= $item['email'] ?>&nbsp</td>
                <td>&nbsp<?= $item['senha'] ?>&nbsp</td>

            </tr>
            <?php endforeach ?>

            
            <?php if(count($model->rows) == 0): ?>
                <tr>
                    <td colspan="10">Nenhum registro encontrado.</td>
                </tr>
            <?php endif ?>



        </table>
    </center>
    <a href="/cadastro">
        <button> Voltar </button>
    </a>
</body>