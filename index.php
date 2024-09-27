<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vinhos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .vinho {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .barato {
            background-color: #e7f3fe;
            border-color: #b8daff;
        }
    </style>
</head>
<body>
    <h1>Lista de Vinhos</h1>
    <?php foreach ($vinhos as $vinho): ?>
        <div class="vinho <?php echo $vinho->verificarPreco() ? 'barato' : ''; ?>">
            <h2><?php echo $vinho->getNome(); ?></h2>
            <p>Tipo: <?php echo $vinho->getTipo(); ?></p>
            <p>Preço: R$ <?php echo number_format($vinho->getPreco(), 2, ',', '.'); ?></p>
            <p>Safra: <?php echo $vinho->getSafra(); ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>