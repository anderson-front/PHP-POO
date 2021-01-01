<?php
include './funcao/biblioteca.php';
include './funcao/kmMilha.php';
quadrado(5);
echo '<br>';
// Foi demonstrado o objetivo de uma variável Global.
echo "Percorreu " .number_format (km2mi(100,2,',')) . " Milhas";


