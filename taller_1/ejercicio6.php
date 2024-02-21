<?php
    $volantes = $_GET['volantes'];
    $posters = $_GET['posters'];
    $tdepres = $_GET['tdepres'];

    $volantes = $volantes*2000;
    $posters = $posters*5000;
    $tdepres = $tdepres*500;
    $total = $volantes+$posters+$tdepres;


    echo "El total a pagar por todas las impresiones es de ", $total;

?>