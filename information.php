<?php

$file = $_REQUEST["card"];
$fileName = $_REQUEST["fileName"];
$dateCreation = date("d F Y H:i:s.", filectime($file));
$dateModification = date("d F Y H:i:s.", filemtime($file));
$extension = pathinfo($file, PATHINFO_EXTENSION);
$size = filesize($file);

echo json_encode([
    'ok' => true,
    'fileName' => $fileName,
    'dateCreation' => $dateCreation,
    'dateModification' => $dateModification,
    'extension' => $extension,
    'size' => $size

]);