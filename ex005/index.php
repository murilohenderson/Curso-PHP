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
        <h1>Salário mínimo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salario</label>
            <input type="number" name="salario" id="salario" value="<?= $salario ?>">
            <input type="submit" value="Calcular">
        </form>
        <section id="resultado">
            <h2>Resultado</h2>
        </section>
    </main>
</body>
</html>