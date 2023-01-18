<<<<<<< HEAD
=======
<?php

$nameFile = $_REQUEST["filename"];

$root = "./root/david/" . $nameFile;

$old_umask = umask(0);

//unlink("./root/hola.png");

fopen($root, "w");
echo json_encode([
    "ok" => true,
    "path" => $root,
    "name" => $nameFile
])

?>
>>>>>>> 8e59a9b0b2e747b3bab4c7a43134c0a431e9d44c
