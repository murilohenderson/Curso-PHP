<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de preço</title>
    <link rel="stylesheet" href="../ex000/style.css">
</head>
<body>
    <main>
        <?php 
            $valor = $_GET["preco"] ?? 0;
            $porcentagem = $_GET["porcentagem"] ?? 0;
        ?>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço</label>
            <input type="number" name="preco" id="preco" step="0.01" value="<?= $valor ?>">

            <label for="porcentagem">Porcentagem de reajuste</label>
            <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" step="1" value="<?= $porcentagem ?>" oninput="document.getElementById('valorPorcentagem').innerText = this.value + '%'">
            <span id="valorPorcentagem"><?= $porcentagem ?>%</span>

            <input type="submit" value="Reajustar">
        </form>
        <?php 
            echo "<h2>Resultado do reajuste</h2>";
            echo "<p>O produto que custava R$" . number_format($valor, 2, ",", ".") . ", com $porcentagem% de aumento, passa a custa R$" . number_format($valor * (1 + $porcentagem / 100), 2, ",", ".") . "</p>";
        ?>
    </main>
</body>
</html>