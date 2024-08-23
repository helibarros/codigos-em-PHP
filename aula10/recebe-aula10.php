<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style10_1.css">
</head>

<body>
<h1>Mundos Literários</h1>
    <h2>Página de Confirmação</h2>
    <?php
    

    echo "<p>Olá, " . $_POST["nome"] . ",  você é do sexo " . $_POST["sexo"] . ", nascido em " . $_POST["data_nascimento"] .  ", estado civil " . $_POST["estado_civil"] . ", de nacionalidade " . $_POST["nacionalidade"] . ", com RG " . $_POST["numero_rg"] . " e CPF " . $_POST["cpf"] . ". Você mora na " . $_POST["logradouro"] . " número " . $_POST["numero"] . " " . $_POST["complemento"] . ", no bairro " . $_POST["bairro"] . ", na cidade de " . $_POST["cidade"] . " no Estado de " . $_POST["estado"] . ", com CEP " . $_POST["cep"] . ". Seu telefone de contato é " . $_POST["telefone"] . " e seu e-mail é " . $_POST["e_mail"] . ". Seja bem-vindo ao sistema!!</p><br>";

    echo "<p>Obrigado pela Sua Confirmação!<br>

Agradecemos sinceramente por se registrar no Mundos Literários. Estamos empolgados para tê-lo como parte da nossa comunidade apaixonada por literatura.<br>

Seu interesse é muito importante para nós. Em breve, entraremos em contato com você para compartilhar novidades, atualizações e oportunidades emocionantes que temos preparadas. Fique atento ao seu e-mail!<br>

Seja bem-vindo a uma jornada literária cheia de descobertas e aventuras. Estamos ansiosos para começar essa nova história com você!</p><br>";
    ?>
</body>
</html>