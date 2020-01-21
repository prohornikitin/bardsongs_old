<?php
    function deleteExstension(string $file) : string{
        $withoutExtension = substr($file, 0, strrpos($file, '.'));
        return $withoutExtension;
    }

    function isImage(string $file) : bool {
        $extension = strrchr($file, '.');
        $imageExtensions = array(".png", ".jpg");
        return ($extension !== null) && 
            (array_search($extension, $imageExtensions) !== false);
    }

    function isDirectory(string $file) : bool {
        return ((strrchr($file, ".") === false) || 
            (strrchr($file, ".") == $file));
    }

    function isHidden(string $file) : bool {
        return (strchr($file, ".") == $file);
    }
?>