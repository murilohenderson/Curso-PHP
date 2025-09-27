<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario minimo</title>
    <link rel="stylesheet" href="../ex000/style.css">
</head>
<body>
    <main>
        <?php 
            $salario = $_GET["salario"] ?? 0;
            $salarioMinimo = 1518;
        ?>
        <h1>Salário mínimo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salario</label>
            <input type="number" name="salario" id="salario" value="<?= $salario ?>">
            <input type="submit" value="Calcular">
        </form>
        <section id="resultado">
            <h2>Resultado</h2>
            <?php 
                $resultadoSalarios = intdiv($salario, $salarioMinimo);
                $resultadoResto = $salario % $salarioMinimo;
                echo "<p>Quem recebe um salário de R$".number_format($salario, 2, ",", ".")." ganha $resultadoSalarios salários mínimos + R$".number_format($resultadoResto, 2, ",", ".")."</p>";
            ?>
        </section>
    </main>
</body>
</html>