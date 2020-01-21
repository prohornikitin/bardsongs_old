<?php
    function deleteNonImages(array &$fileNames) : void{
        for($i=0; $i<count($fileNames); ++$i) {
            if(!isImage($fileNames[$i])) {
                array_splice($fileNames, $i, 1);
                --$i;
            }
        }
    }    

    function isImage(string $fileName) : bool {
        $fileExtension = strrchr($fileName, '.');
        $imageExtensions = array(".png", ".jpg");
        return ($fileExtension !== null) &&
             (array_search($fileExtension, $imageExtensions) !== false);
    }

    function isDirectory(string $fileName) : bool {
        return ((strrchr($fileName, ".") === false) || (strrchr($fileName, ".") == $fileName));
    }

    function isHidden(string $fileName) : bool {
        return (strchr($fileName, ".") == $fileName);
    }
?>