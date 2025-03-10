<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cadastro - processamento</title>
</head>
<body>
    <?php
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];

    echo "<h1> Dados recebidos </h1>";
    echo $nome;
    echo "<p><strong>Nome:</strong> $nome </p>";
    echo "<p><strong>Endereço:</strong> $endereco</p>";
    echo "<p><strong>Cidade:</strong> $cidade</p>";
    ?>
</body>
</html>
