<?php

function directoryReader($directory, array $exclude = array('..', '.'))
{
    $files = [];
    
    $allowedFileTypes = ['image/png', 'image/jpg', 'image/gif', 'image/jpeg', 'image/bmp'];
    if (!is_dir($directory)) {
        return null;
    }
    if (!($filesDirectory = opendir($directory))) {
        return null;
    }
   
    while (($file = readdir($filesDirectory)) == true) {
        if (in_array($file, $exclude)) {
            continue;
        }

        $filePath = $directory . DIRECTORY_SEPARATOR . $file;

        $imageInfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($imageInfo, $filePath);

        if (!in_array($mimeType, $allowedFileTypes)) {
            continue;
        }

        if (is_file($filePath)) {
            $files[] = $filePath;
        }
    }
    closedir($filesDirectory);
    return $files;
}