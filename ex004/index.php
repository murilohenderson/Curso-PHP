<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="../ex000/style.css">
</head>
<body>
    <main>
        <?php 
                $dividendo = $_GET["dividendo"] ?? 0;
                $divisor = $_GET["divisor"] ?? 1;
                $quocienteDivisao = intdiv($dividendo, $divisor);
                $restoDivisao = $dividendo % $divisor;
        ?>
        <h1>Divisor</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="Divideno">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">
            <label for="Divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>">
            <input type="submit" value="Dividir">
        </form>
        <section id="resultado">
            <h2>Resultado da divisão</h2>
            <?php 
                echo "<pre>$dividendo</pre>";
                echo "<pre>÷ $divisor</pre>";
                echo "<pre>-----</pre>";
                echo "<pre>$quocienteDivisao</pre>";
                echo "<pre>Resto: $restoDivisao</pre>";
            ?>
        </section>
    </main>
</body>
</html>