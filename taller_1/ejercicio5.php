<?php
    $edad1 = $_GET['edad1'];
    $edad2 = $_GET['edad2'];

    $diferencia = $edad1-$edad2;

    if ($edad1 > $edad2) {
        echo " La edad del hermano mayor es de ", $edad1, " años";
    } elseif ($edad1 < $edad2) {
        echo " La edad del hermano mayor es ", $edad2, " años";
    }
    echo " y la diferencia de edad entre los dos hermanos es de ", $diferencia;

?>