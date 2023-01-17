<?php


$namePath = $_REQUEST["path"];
$folderName = $_REQUEST["foldername"];



mkdir($namePath . "/" . $folderName, 0777, true);
echo json_encode([
    "parentDir" => $namePath,
    "newDir" => $folderName
]);

?>