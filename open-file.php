<?php

$file = $_REQUEST["open"];
$fileName = $_REQUEST["fileName"];

fopen($file, "r");

echo json_encode([
    'ok' => true,
    'fileName' => $fileName,
    'dateCreation' => $dateCreation,
    'dateModification' => $dateModification
]);
