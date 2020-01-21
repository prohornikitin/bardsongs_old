<?php
    function deleteExstension(string $file) : string{
        $withoutExtension = substr($file, 0, strrpos($file, '.'));
        return $withoutExtension;
    }

    function isImage(string $file) : bool {
        $extension = strrchr($fileName, '.');
        $imageExtensions = array(".png", ".jpg");
        return ($extension !== null) && 
            (array_search($fileExtension, $imageExtensions) !== false);
    }

    function isDirectory(string $file) : bool {
        return ((strrchr($fileName, ".") === false) || 
            (strrchr($fileName, ".") == $fileName));
    }

    function isHidden(string $file) : bool {
        return (strchr($fileName, ".") == $fileName);
    }
?>