<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <?php 
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';

        $aluno1 = new Aluno();
        $aluno1->setNome("Pedro");
        $aluno1->setIdade(16);
        $aluno1->setSexo("M");
        $aluno1->setMatricula(12345);
        $aluno1->setCurso("Informática");
        $aluno1->pagarMensalidade();

        $bolsista1 = new Bolsista();
        $bolsista1->setNome("Maria");
        $bolsista1->setIdade(17);
        $bolsista1->setSexo("F");
        $bolsista1->setMatricula(54321);
        $bolsista1->setCurso("Administração");
        $bolsista1->setBolsa(50);
        $bolsista1->pagarMensalidade();
        $bolsista1->renovarBolsa();
    ?>
</body>
</html>