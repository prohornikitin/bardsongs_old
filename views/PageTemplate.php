<!DOCTYPE html>
<html>
    <head>
        <title>КСП МИФИ</title>
        <link rel='icon' href='/Favicon.ico'>
        <link rel='stylesheet' href='/css/Base.css'>
        <?php
            if(isset($special_css)) {
                echo "<link rel='stylesheet' href='/css/{$special_css}'>";
            }
        ?>
    </head>
    <body>
        <div id="backgroundImageHolder"></div>
        <h1>Клуб самодеятельной песни КСП МИФИ</h1>
        <div class="contentHolder">
            <nav>
                <button id='main' onclick='window.location.href="/Main.php"'>Главная</button>
                <button id='forum' onclick='window.location.href="/Forum.php"'>Форум</button>
                <button id='gallery' onclick='window.location.href="/Gallery.php"'>Галерея</button>
                <button id='artists' onclick='window.location.href="/Artists.php"'>Авторы и исполнители</button>
            </nav>
            <?php 
                require "views/contents/{$content_view}";
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