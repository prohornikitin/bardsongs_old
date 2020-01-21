<main>
<?php
    foreach ($pages as $page) {
        echo '<article>';
          echo "<img src='{$page->icon_url}'>";
          echo "<a href='{$page->url}'>";
            echo $page->display_name;
          echo '</a>';
        echo '</article>';
    }
?>
</main>