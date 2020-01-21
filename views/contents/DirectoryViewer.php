<main>
    <button id='back' onclick='javascript:history.back()'>
           <img src='images/BackButton.png'>
            Назад
    </button>
    <?php
        require_once 'tools/WorkingWithFileNames.php';
        
        function echoImage(string $imagePath) : void
        {
            echo '<figure>';
            echo   '<a href="?';
            echo   'dir=', dirname($imagePath), '/&', 'file=', basename($imagePath), '"a>';
            echo     '<img src="', $imagePath, '">';
            echo   '</a>';
            echo   '<figcaption>';
            echo      deleteExstension(basename($imagePath));
            echo   '</figcaption>';
            echo '</figure>';
        }

        function echoDirectory(string $directoryPath) : void
        {
            echo '<figure>';
            echo '  <a href="?dir=', $directoryPath, '/">';
            echo '    <img src="/images/Folder.png">';
            echo '  </a>';
            echo '  <figcaption>';
            echo      basename($directoryPath);
            echo '  </figcaption>';
            echo '</figure>';
        }

        
        foreach ($subdirectories as $directory) {
            echoDirectory($directory);
        }

        foreach ($images as $image) {
            echoImage($image);
        }
    ?>
</main>