<?php
require_once '../includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualiza</title>
</head>
<body>
    <?php include '../includes/header.php'?>
     <form action="" method="POST">
        <label for="id">ID: </label>
        <input type="text" name="id" id="id"><br>
        <label for ="nome">Nome:</label>
        <input type = "text" name="nome" id="nome"><br>
        <label for ="turma">Turma:</label>
        <input type = "text" name="turma" id="turma"><br>
        <label for ="nasc">Nascimento</label>
        <input type = "date" name="nasc" id="nasc"><br>
        <label for ="ativo">Ativo?</label>
        <input type = "radio" name="ativo" id="ativo" value="true">
        <label for="sim">SIM </label>
        <input type = "radio" name="ativo" id="ativo" value="false">
        <label for="nao">NÃO </label><br>
        <input type = "reset" value="limpar">
        <input type = "submit" value="cadastrar">
    </form>
    <a href="select.php">Consulta DB</a>
</body>
</html>
<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
    atualizar($conexao, $_POST['id'], $_POST['nome'], $_POST['turma'], $_POST['nasc'], $_POST['ativo']);
}
include '../includes/footer.php'
?>