<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Rifa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Formulário de Criação de Rifa</h1>
        <form action="processar_rifa.php" method="POST">
            <label for="premio">Prêmio:</label>
            <input type="text" id="premio" name="premio" required>

            <label for="data_sorteio">Data do Sorteio:</label>
            <input type="date" id="data_sorteio" name="data_sorteio" required>

            <label for="valor_numero">Valor do Número:</label>
            <input type="number" id="valor_numero" name="valor_numero" required>

            <label for="quantidade_numeros">Quantidade de Números:</label>
            <input type="number" id="quantidade_numeros" name="quantidade_numeros" required>

            <button type="submit">Gerar Rifa</button>
        </form>
    </div>
</body>
</html>
