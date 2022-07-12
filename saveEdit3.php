<?php
    
    include_once("conexao.php");

    if(isset($_POST['update']))
    {        
        $Produto = $_POST['produto'];
        $Unidade = $_POST['quantidade'];
        $id = $_POST['id'];

        $sqlUpdate = "UPDATE lista3 SET  Produto= '$Produto', Unidade='$Unidade'
        WHERE codigo= '$id'";

        $result = $mysqli->query($sqlUpdate);

        
    }
    header('Location: sistema3.php');

?>