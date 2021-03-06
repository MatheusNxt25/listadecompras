<?php

    include_once("conexao.php");

    $sql = "SELECT * FROM lista2 ORDER BY Produto ASC";

    

    if(!empty($_GET['pesquisar']))
    {

        $Produto = $_GET['pesquisar'];

        $sql = "SELECT * FROM lista2 WHERE  Produto= '$Produto'";
        
    }

    $result = $mysqli->query($sql);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="styleSistema.css">
    <title>Listas De Produtos</title>
    <style>

        .table-bg{
            background:  rgb(0,0,0,0.6);
            border-radius: 15px 15px 0 0;
        }
    </style>
    
</head>
<body class="body">
    <nav class="navbar navbar-dark bg-primary">
  
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Lista 2</a>
        <a href="sistema1.php" class="btn btn-info">Lista 1</a>
        <a href="sistema2.php" class="btn btn-info">Lista 2</a>
        <a href="sistema3.php" class="btn btn-info">Lista 3</a>
        <form action="sistema2.php" method="GET">
            <input type="search" name="pesquisar">
            <button type="submit">IR</button>
        </form>
        <a href="CadastroList2.php" class="btn btn-success">Cadastrar</a>
        <a href="home.php" class="btn btn-danger">Sair</a>
    </div>    
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                   
                    <th scope="col">Produtos</th>
                    <th scope="col">Unidades</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        
                        echo "<td>".$user_data["Produto"]."</td>";
                        echo "<td>".$user_data["Unidade"]."</td>";
                        echo "<td>
                            <a class='btn btn-primary' href='edit2.php?id=$user_data[codigo]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                </svg>
                            </a>
                            <a  class='btn btn-danger' href='del2.php?id=$user_data[codigo]'  >
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                    <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                                    <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                                </svg>
                            </a>
                        </td>";
                        echo "</td>";
                    }
                ?>
            </tbody>
        </table>
    </div>
<body>