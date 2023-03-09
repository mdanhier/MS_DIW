<?php
function uploadImage($file)
{
    $targetDir = ROOT . '/assets/img/';
    $targetFile = $targetDir . basename($file['name']);
    $uploadState = 0;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $valid = getimagesize($file['tmp_name']);
    if ($valid) {
        $uploadState = 1;
    } else {
        $uploadState = 0;
    }
    if (file_exists($targetFile)) {
        $uploadState = 0;
      }
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $uploadState = 0;
    }
    if (!$uploadState) {
        return false;
    } else {
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            return true;
        } else {
            return false;
        }
    }
}
