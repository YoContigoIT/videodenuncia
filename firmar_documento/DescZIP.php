<?php

// 1. Asignación de valores a variables ========================================
$NomArchZIP = $_GET["NomArchZIP"];

// 2. Proceso para generar la descarga ========================================= 
$Archivo = $SendaArchsZIP.$NomArchZIP;
header("Content-type: application/octet-stream");
header("Content-disposition: attachment; filename=$NomArchZIP");
readfile($Archivo);
unlink($archivo);