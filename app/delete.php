<?php 
require_once "../includes/functions.php"?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Usuário</title>
</head>
<body>
     <?php include "../includes/header.php"?>
    <h1>pagina para deletar</h1>
    <form action="" method="post">
        <label for="id">ID: </label>
        <input type="number" name="id" id="id">
        <input type="submit" value="apagar">
    </form>
    <?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        deletar($conexao, $_POST['id']);
    }
    ?>
    <a href="select.php">Consulta DB</a>
    <?php include "../includes/footer.php"?>
</body>
</html>