<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

    echo "Olá, " . $_POST["nome"] . ",  você é do sexo " . $_POST["sexo"] . ", nascido em " . $_POST["data_nascimento"] .  ", estado civil " . $_POST["estado_civil"] . ", de nacionalidade " . $_POST["nacionalidade"] . ", com RG " . $_POST["numero_rg"] . " e CPF " . $_POST["cpf"] . ". Você mora na " . $_POST["logradouro"] . " número " . $_POST["numero"] . " " . $_POST["complemento"] . ", no bairro " . $_POST["bairro"] . ", na cidade de " . $_POST["cidade"] . " no Estado de " . $_POST["estado"] . ", com CEP " . $_POST["cep"] . ". Seu telefone de contato é " . $_POST["telefone"] . " e seu e-mail é " . $_POST["e_mail"] . ". Seja bem-vindo ao sistema!!";
    ?>
</body>
</html>