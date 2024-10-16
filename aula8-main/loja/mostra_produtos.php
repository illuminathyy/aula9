<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando produtos</title>
</head>
<body>
<?php

$servidor = 'localhost';
$banco = 'loja';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

$codigoSQL ='SELECT `nome`, `descricao`, `preco`, `url` FROM `produto`';

$comando = $conexao->prepare($codigoSQL);

$comando->execute();

while($linha = $comando->fetch()) {
    echo $linha['nome'];
    echo "<br>";
    echo $linha['descricao'];
    echo "<br>";
    echo $linha['preco'];
    echo "<br>";
    echo $linha['url'];
    echo "<br>";}
?>
</body>
</html>
</body>
</html>