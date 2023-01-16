<?php


$namePath = $_REQUEST["path"];
$folderName = $_REQUEST["folderName"];

mkdir($namePath . "/" . $folderName, 0777, true);





?>