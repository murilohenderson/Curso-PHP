<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle remoto</title>
</head>
<body>
    <pre>
        <?php 
            require_once 'Controle.php';

            $controle = new Controle();
        
            $controle -> abrirMenu();
            $controle -> ligar();
            $controle -> abrirMenu();
        ?>
    </pre>
</body>
</html>