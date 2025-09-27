<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../ex000/style.css">
</head>
<body>
    <header>
        <h1>Resultado de processamento</h1>
    </header>
    <main>
        <?php 
        $numero1 = $_GET["numero1"] ?? 0;
        $numero2 = $_GET["numero2"] ?? 0;
        echo "<p>O número 1 escolhido foi <strong>$numero1</strong>.</p>";
        echo "<p>Seus antecessor é <strong>" . ($numero1 - 1) . "</strong> e seu sucessor é <strong>" . ($numero1 + 1) . "</strong>.</p>";
    
        echo "<p>O número 2 escolhido foi <strong>$numero2</strong>.</p>";
        echo "<p>Sorteando um número aleatório entre $numero1 e $numero2 </p>";
        echo "<p>O número sorteado foi <strong>" . rand($numero1, $numero2) . "</strong></p>";

        echo "<p>A soma entre $numero1 e $numero2 é <strong>" . ($numero1 + $numero2) . "</strong></p>";
        echo "<p>A multiplicação entre $numero1 e $numero2 é <strong>" . ($numero1 * $numero2) . "</strong></p>";
        echo "<p>A média entre $numero1 e $numero2 é <strong>" . (($numero1 + $numero2) / 2) . "</strong></p>";
        echo "<p>A diferença entre $numero1 e $numero2 é <strong>" . abs($numero1 - $numero2) . "</strong></p>";    
        echo "<p>O maior valor entre $numero1 e $numero2 é <strong>" . max($numero1, $numero2) . "</strong></p>";
        echo "<p>O menor valor entre $numero1 e $numero2 é <strong>" . min($numero1, $numero2) . "</strong></p>";
        echo "<p>Se o valor $numero1 fosse em reais, ou seja, R$$numero1, em dólar ele valeria $" . number_format($numero1 / 5.35, 2) . "</p>";
        ?>
        <p>
           <a href="javascript:history.go(-1)">Volta para a página anterior</a> 
        </p>
        
    </main>
</body>
</html>