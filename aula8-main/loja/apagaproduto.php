<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apaga ID</title>
</head>
<body>
    <?php

    $comandosql = "DELETE FROM produto WHERE `produto`.`id` = :id";

    $servidor = 'localhost';
    $banco = 'loja';
    $usuario = 'root';
    $senha = '';

    

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

try {
    $comando = $conexao->prepare($comandosql);

    $resultado = $comando->execute(array('id' => $_GET['id']));

    if($resultado) {
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