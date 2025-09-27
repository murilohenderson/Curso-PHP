<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ex000/style.css">
</head>
<body>
    <?php 
        // Capturando os dados do formulário retroalimentado
        $valor1 = $_GET["valor1"] ?? 0;
        $valor2 = $_GET["valor2"] ?? 0;
    ?>
    <main>
        <h1>
            Somador de valores
        </h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="valor1" value="<?= $valor1 ?>">
            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" id="valor2" value="<?= $valor2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>
            Resultado da soma
        </h2>
        <?php 
            $soma = $valor1 + $valor2;
            echo "<p>A soma entre $valor1 e $valor2 é $soma"
        ?>
    </section>
</body>
</html>