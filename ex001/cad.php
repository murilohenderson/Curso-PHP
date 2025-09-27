<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="/ex000/style.css">
</head>
<body>
    <header>
        <h1>Resultado de processamento</h1>
    </header>
    <main>
        <?php 
        $numero = $_GET["numero"] ?? 0;
        echo "<p>O número escolhido foi <strong>$numero</strong>.</p>";
        echo "<p>Seus antecessor é <strong>" . ($numero - 1) . "</strong> e seu sucessor é <strong>" . ($numero + 1) . "</strong>.</p>";
        ?>
        <p>
           <a href="javascript:history.go(-1)">Volta para a página anterior</a> 
        </p>
        
    </main>
</body>
</html>