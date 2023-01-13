<?php

$nameFile = $_REQUEST["filename"];

$root = "./root/" . $nameFile;

$old_umask = umask(0);

//unlink("./root/hola.png");

fopen($root, "w");
echo json_encode([
    "ok" => true,
    "path" => $root,
    "name" => $nameFile
])

?>