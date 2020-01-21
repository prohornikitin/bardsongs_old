<main>
    <button id="back" onclick="javascript:history.back()">
        <img src="images/backButton.png">
        Назад
    </button>
    <img id="image">
    <div>
        <button id="previous">Предыдущая</button>
        <button id="next">Следующая</button>
    </div>
</main>
<script type="text/javascript">
    <?php
        require_once 'tools/workingWithFileNames.php';
        require_once 'tools/setJsVariable.php';

        $file = dirname($images[0]) . '/' . $file;
        $currentFileIndex = array_search($file, $images);
        setJsVariable('currentFileIndex', $currentFileIndex);
        setJsVariable('fileNames', $images);
    ?>
</script>
<script src="/js/image_viewer.js"></script>