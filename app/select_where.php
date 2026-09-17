<?php
require_once '../includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "../includes/header.php"?>
    <h3>Consulta de Alunos</h3>
    
    <form action="" method="post">
        <label for="id">Aluno id:</label>
        <input type="number" name="id" id="id">
        <input type="submit" name="" id="">
    </form>
    <?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        consultar($conexao, $_POST['id']);
    }
    include '../includes/footer.php'
    ?>
</body>
</html>
