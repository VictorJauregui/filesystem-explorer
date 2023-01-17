<?php

session_start();
$directoryPath = $_REQUEST["directoryPath"];

// $_SESSION["current_path"] = $directoryPath;
$_SESSION['current_path'] = $directoryPath;



echo json_encode([
    "ok" => true,
    "directoryPath" => $directoryPath
]);
// setear variable de sesión
// JS llamar con fecth a este archivo cuando pinchas en una carpeta.

