<?php
    
    if(isset($_POST['submit']))
    {

        
    include_once('conexao.php');
    
    $Produto = $_POST['produto'];
    $Unidade = $_POST['quantidade'];

    $result = mysqli_query($mysqli, "INSERT INTO lista2(Produto,Unidade) VALUES ('$Produto','$Unidade')");
    }
    
    // teste para salvar dados
    //if(isseT($_POST['submit']))
    //{
     //   print_r("Produto: " . $_POST['produto']);
       // print_r("<br>");
       // print_r("Unidades: " . $_POST['quantidade']);
    //}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadastraDeProdutoLista2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">
    <a href="sistema2.php" class="Voltar">Voltar</a>
    <div class="box">
        <form action="sistema2.php" method="post">
            <fieldset class="fieldset">
                <legend class="legend"><b>Lista 2</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="produto" id="produto" class="inputList" required>
                    <label for="produto" class="labelInput" >Nome do Produto</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="Number" name="quantidade" id="quantidade" class="inputList" required>
                    <label for="quantidade" class="labelInput" >Unidades</label>
                </div>
                <br>
                <br>
                <input type="submit" name="submit" id="submit"  >
            </fieldset>
        </form>
    </div>
</body>
</html>