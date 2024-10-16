<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apaga ID</title>
</head>
<body>
    <?php

    $id = $_GET['id'];

    $comandosql = "DELETE FROM quetimeteu WHERE `quetimeteu`.`id` = $id";

    $servidor = 'localhost';
    $banco = 'times';
    $usuario = 'root';
    $senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

try {
    $resultado = $conexao->exec($comandosql);

    if($resultado != 0 ) {
	echo "Item apagado!";
    } else {
	echo "Erro ao executar o comando!";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;

    ?>
</body>
</html>