<?php
    $hl = $_GET['horas'];
    $vh = $_GET['valor'];

    $sueldo = $hl*$vh;

    echo "El total del sueldo es ", $sueldo;
?>