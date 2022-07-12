<?php
    
    if(!empty($_GET['id']))
    {

        
        include_once('conexao.php');
        
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM lista2 WHERE  codigo=$id";

        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $id = $user_data['codigo'];
                $Produto = $user_data["Produto"];
                $Unidade = $user_data['Unidade'];
            }
            
            
        }
        else
        {
            header('Location: sistema2.php');
        }

   

    }
    
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadastraDeProdutoLista2</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #update{
    background-image: linear-gradient(to right,rgb(122, 102, 235),rgb(199, 118, 247));
    width: 100%;
    padding: 8px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
    }
    </style>
</head>
<body class="body">
    <a href="sistema2.php" class="Voltar">Voltar</a>
    <div class="box">
        <form action="saveEdit2.php" method="post">
            <fieldset class="fieldset">
                <legend class="legend"><b>Lista 2</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="produto" id="produto" class="inputList" value="<?php echo $Produto ?>" required>
                    <label for="produto" class="labelInput" >Nome do Produto</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="Number" name="quantidade" id="quantidade" class="inputList" value="<?php echo$Unidade ?>" required>
                    <label for="quantidade" class="labelInput" >Unidades</label>
                </div>
                <br>
                <br>
                <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>
</html>