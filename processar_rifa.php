<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $premio = $_POST['premio'];
    $data_sorteio = $_POST['data_sorteio'];
    $valor_numero = $_POST['valor_numero'];
    $quantidade_numeros = $_POST['quantidade_numeros'];

    // Gera a lista de números da rifa
    $rifa = [];
    for ($i = 1; $i <= $quantidade_numeros; $i++) {
        $rifa[] = [
            'numero' => $i,
            'status' => 'Disponível',  // Inicialmente todos os números estão disponíveis
            'premio' => $premio,
            'data_sorteio' => $data_sorteio,
            'valor' => $valor_numero
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rifa Gerada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Rifa Gerada</h1>
        <p><strong>Prêmio:</strong> <?php echo htmlspecialchars($premio); ?></p>
        <p><strong>Data do Sorteio:</strong> <?php echo htmlspecialchars($data_sorteio); ?></p>
        <p><strong>Valor do Número:</strong> R$ <?php echo number_format($valor_numero, 2, ',', '.'); ?></p>
        <p><strong>Quantidade de Números:</strong> <?php echo htmlspecialchars($quantidade_numeros); ?></p>

        <h2>Lista de Números da Rifa</h2>
        <table>
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Status</th>
                    <th>Prêmio</th>
                    <th>Data do Sorteio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rifa as $numero): ?>
                    <tr>
                        <td><?php echo $numero['numero']; ?></td>
                        <td><?php echo $numero['status']; ?></td>
                        <td><?php echo $numero['premio']; ?></td>
                        <td><?php echo $numero['data_sorteio']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.html">Criar outra rifa</a>
    </div>
</body>
</html>
