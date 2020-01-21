<!DOCTYPE html>
<html>
    <head>
        <title>КСП МИФИ</title>
        <link href='/favicon.ico' rel='icon' type='image/x-icon'>
        <link rel='stylesheet' href='/css/base.css'>
        <?php
            if(isset($special_css)) {
                echo "<link rel='stylesheet' href='/css/{$special_css}'>";
            }
        ?>
    </head>
    <body>
        <div id="backgroundImageHolder"></div>
        <h1>Клуб самодеятельной песни КСП МИФИ</h1>
        <div id="contentHolder">
            <nav>
                <button id='main' onclick='window.location.href="/main.php"'>Главная</button>
                <button id='forum' onclick='window.location.href="/forum.php"'>Форум</button>
                <button id='gallery' onclick='window.location.href="/gallery.php"'>Галерея</button>
                <button id='artists' onclick='window.location.href="/artists.php"'>Авторы и исполнители</button>
            </nav>
            <?php 
                require "Views/contents/{$content_view}";
            ?>
        </div>
    </body>
    <?php 
        if(isset($disabledNavButtonId)) {
            echo '<script>';
                echo "document.getElementById('{$disabledNavButtonId}').disabled = 'true';";
            echo '</script>';
        }
    ?>
</html>