<?php
    $velocidad= $_GET['velocidad'];
    $tiempo = $_GET['tiempo'];
    $distancia = $velocidad*$tiempo;

    echo "La distancia recorrida es ", $distancia, "m";
?>