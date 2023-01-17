<?php
$renameFile = $_REQUEST['path'];
$inputValue = $_REQUEST['inputValue'];

$explodePath =  explode('/', $renameFile);
$explodePath[count($explodePath) - 1] = $inputValue;

$newPath = implode('/', $explodePath);

if (is_file($renameFile)) {
    rename($renameFile, $newPath);
    echo json_encode(["newPath" => $newPath]);
} else {
    $explodePathFile = explode('.', $renameFile);
    $extension = $explodePathFile[count($explodePathFile) - 1];
    rename($renameFile, $newPath . '.' . $extension);
}


//echo json_encode(["renameFile" => $explodePath]);
//echo json_encode(["renameFile" => $newPath]);