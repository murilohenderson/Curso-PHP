<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <link rel="stylesheet" href="../ex000/style.css">
</head>
<body>
    <main>
        <?php 
            $nota1 = $_GET["nota1"] ?? 0;
            $nota2 = $_GET["nota2"] ?? 0;
            $pesoNota1 = $_GET["pesoNota1"] ?? 1;
            $pesoNota2 = $_GET["pesoNota2"] ?? 1;
        
        ?>
        <h1>Média</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="nota1">Nota 1</label>
                <input type="number" name="nota1" id="nota1" step="0.1" value="<?= $nota1 ?>">
                <label for="peso1">Peso da nota 1</label>
                <input type="number" name="pesoNota1" id="pesoNota2" step="0.1" value="<?= $pesoNota1 ?>">
                <label for="nota2">Nota 2</label>
                <input type="number" name="nota2" id="nota2" step="0.1" value="<?= $nota2 ?>">
                <label for="peso2">Peso da nota 2</label>
                <input type="number" name="pesoNota2" id="pesoNota2" step="0.1" value="<?= $pesoNota2 ?>">
                <input type="submit" value="Calcular">
            </form>
            <?php 
                $mediaSimples = ($nota1 + $nota2) / 2;
                $mediaPonderada = ($nota1 * $pesoNota1 + $nota2 * $pesoNota2) / ($pesoNota1 + $pesoNota2);
                echo "<p>A média simples entre $nota1 e $nota2 é igual a ".number_format($mediaSimples, 2, ",", ".")."</p>";
                echo "<p>A média ponderada entre $nota1 e $nota2 é igual a ".number_format($mediaPonderada, 2, ",", ".")."</p>";
            ?>
    </main>
    
</body>
</html>