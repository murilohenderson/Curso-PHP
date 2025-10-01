<pre>
    <?php 
        require_once 'Conta.php';

        
        $pessoa1 = new Conta(); 
        $pessoa2 = new Conta();

        $pessoa1 -> abrirConta("CC", "Thaisinha");
        $pessoa2 -> abrirConta("CP", "Carolana");


        // Testes
        print_r($pessoa1);
        print_r($pessoa2);

        $pessoa1 -> depositar(300);
        $pessoa2 -> depositar(500);

        print_r($pessoa1);
        print_r($pessoa2);

        $pessoa1 -> sacar(100);
        $pessoa2 -> sacar(600);

        print_r($pessoa1);
        print_r($pessoa2);

        $pessoa1 -> pagarMensalidade();
        $pessoa2 -> pagarMensalidade(); 

        print_r($pessoa1);
        print_r($pessoa2);  

        $pessoa1 -> sacar(138);
        $pessoa2 -> sacar(50);
    ?>
</pre>
