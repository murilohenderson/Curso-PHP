<pre>
    <?php 
        require_once 'Lutador.php';
        require_once 'Luta.php';

        $lutador = [];
        $lutador[0] = new Lutador("Nic Dias", "Brasil", 23, 1.83, 77.5, 12, 2, 1);
        $lutador[1] = new Lutador("Ebony", "Brasil", 30, 1.93, 77.0, 26, 1, 0);
        $lutador[2] = new Lutador("Tasha & Tracie", "Brasil", 35, 1.93, 93.0, 26, 1, 0);

        $UEC01 = new Luta();
        $UEC01 -> marcarLuta($lutador[0], $lutador[1]);
        $UEC01 -> lutar($lutador[0], $lutador[1]);

        $UEC01 -> marcarLuta($lutador[0], $lutador[2]);
    ?>
</pre>