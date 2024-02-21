<?php
    $nombre = $_GET['nomb'];
    $asignatura = $_GET['asig'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $promedio = ($nota1+$nota2+$nota3)/3;

    echo $nombre, ", en la asignatura de ", $asignatura, " tu promedio es ", $promedio;
?>