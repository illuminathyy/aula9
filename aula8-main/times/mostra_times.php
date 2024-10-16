<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando times</title>
</head>
<body>
<?php


$servidor = 'localhost';
$banco = 'times';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

$comandoSQL = 'SELECT * FROM `quetimeteu`';

$comando = $conexao->exec($comandoSQL);

while($linha = $comando->fetch()) {
    echo $linha['nome'];
    echo "<br>";
    echo $linha['pontos'];
    echo "<br>";
    $id = $linha['id'];
    echo "<a href='apagatimes.php?id=$id'>apaga</a><br>";
  }

  try {
    $comando = $conexao->exec($codigoSQL);

    $resultado = $comando->execute(array('nm' => $_GET['nome'], 'pts' => $_GET['pontos']));

    if($resultado) {
	echo "Comando executado!";
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