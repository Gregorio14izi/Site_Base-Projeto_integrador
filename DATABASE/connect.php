<?php 
//arquivo para ser chamado sempre que precisar conectar ao banco de dados, por exemplos quando formos fazer um CRUD pelo php 

$host = "192.168.10.24";
$dbname = "escola";
$user = "escola";
$pass = "escola";

try {
    $conexao = new PDO(
        "pgsql:host=$host;dbname=$dbname",
        $user,
        $pass
    );
    echo "Conexão com o Postgres realizada!<br>";
} catch(PDOException $e) {
    echo "Erro: ". $e->getMessage();
}
?>