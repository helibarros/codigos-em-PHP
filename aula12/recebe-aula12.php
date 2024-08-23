<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 PHP</title>
    <link rel="stylesheet" href="aula12.css">
</head>
<body>

<?php
$nome = $_POST['nome'];
$senha = $_POST['senha'];

if ($nome == "Maria" && $senha == "12345") {
  echo "<h2>Autenticação realizada com sucesso!</h2>";
} else {
  echo "<h2>Você não tem permissão de visualizar essa página<h2/>";
}
?>
</body>
</html>