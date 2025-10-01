<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treinando Programação Orientada ao Objeto</title>
</head>
<body>
    <pre>
        <?php 
            require_once "Caneta.php";
            $c1 = new Caneta();
            $c1 -> cor = "Preto";
            // $c1 -> ponta = "0.3";
            // $c1 -> tampada = true;
            $c1 -> modelo = "Bic Cristal";
            // $c1 -> carga = 90;
            
            $c1 -> rabiscar();

            $c2 = new Caneta();
            $c2 -> cor = "Azul";
            // $c2 -> ponta = "0.8";
            // $c2 -> tampada = false;
            $c2 -> modelo = "Compactor";
            // $c2 -> carga = 50;
            
            $c2 -> rabiscar();
            
            print_r($c2);
            print_r($c1);
        ?>
    </pre>
    
</body>
</html>