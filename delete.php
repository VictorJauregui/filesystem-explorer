<?php

$file = $_REQUEST["delete"];
$fileName = $_REQUEST["fileName"];

unlink($file);

echo json_encode([
    'ok' => true,
    'fileName' => $fileName,
    'dateCreation' => $dateCreation,
    'dateModification' => $dateModification
]);
