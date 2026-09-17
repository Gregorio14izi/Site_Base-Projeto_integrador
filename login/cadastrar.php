<!-- ### Login.
RF:
1. Cadastrar usuário.
2. Página de login.
3. Página de logout.
4.|Verificar usuário logado. -->

<?php
require_once '../includes/functions.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main>
        <h1>Cadastre-se por aqui</h1>
        <form action="" method="POST">
        <label for ="email">Email:</label>
        <input type = "email" name="email" id="email" required><br>
        <label for ="senha">Senha:</label>
        <input type ="password" name="senha" id="senha" required><br>
        <input type = "submit" value="cadastrar">
    </form>
    <?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        cadastrar_user($conexao, $_POST['email'], $_POST['senha']);
    }
    ?>
    </main>
</body>
</html>