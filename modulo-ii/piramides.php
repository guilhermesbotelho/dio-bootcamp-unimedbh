<html>
    <head>

        <title>As pirâmides!!!</title>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </head>

    <body>
        <?php

        function meia_piramide_crescente($x) {
            for ($i = 1; $i <= $x; $i++){
                for ($j = 1; $j <= $i; $j++){
                    echo "*";
                }
                echo nl2br("\n");
            }
        }

        function meia_piramide_decrescente($x) {
            for ($i = 1; $i <= $x; $i++){
                for ($j = $x; $j >= $i; $j--){
                    echo "*";
                }
                echo nl2br("\n");
            }
        }

        function completa_piramide_crescente($x){
            for ($i = 1; $i <= $x; $i++){
                for ($j = $x - 1; $j >= $i; $j--){
                    echo ".";
                }
                for ($k = 1; $k <= $i*2 - 1; $k+=1){
                    echo "*";
                }
                echo nl2br("\n");
            }
        }

        function completa_piramide_decrescente($x){
            for ($i = $x; $i > 0; $i--){
                for ($j = $i; $j < $x; $j++){
                    echo ".";
                }
                for ($k = $i * 2 - 1; $k > 0; $k-=1){
                    echo "*";
                }
                echo nl2br("\n");
            }
        }

        $x = $_POST["tamanho_piramide"];

        ?>

        <div id="accordion">
            <h3>Meia Pirâmide Crescente</h3>
                <div><?php meia_piramide_crescente($x); ?></div>
            <h3>Meia Pirâmide Decrescente</h3>
                <div><?php meia_piramide_decrescente($x); ?></div>
            <h3>Pirâmide Crescente</h3>
                <div><?php completa_piramide_crescente($x); ?></div>
            <h3>Pirâmide Decrescente</h3>
                <div><?php completa_piramide_decrescente($x); ?></div>
        </div>

        <script>
            $( "#accordion" ).accordion();
        </script>
    </body>
</html>