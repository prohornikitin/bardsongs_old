<main>
    <?php
        if(isset($successMessage)) {
            echo '<h3 class="success">', $successMessage, '</h3>';
        }
        if(isset($errorMessage)) {
            echo '<h3 class="error">', $errorMessage, '</h3>';
        }
    ?>
	<section id="newsEditor">
        <h3>Редактор Новостей</h3>
        <form enctype="multipart/form-data" method="POST" action="" id="newsEditor">
            <div class="form_item">
                <label for="title">Заголовок:</label>
                <input type="text" name="title"/>
            </div>
            <div class="form_item">
                <label for="image">Изображение</label>
                <input type="file" name="image"/>
            </div>
            <div class="form_item">
                <label for="text">Текст:</label>
                <textarea id="news_text_editor" name="text"></textarea>
            </div>
            <div class="form_item">
                <button id="news_submit" name="submit">Выложить</button>
            </div>
            <input hidden type="text" name="action" value="addNews">
        </form>
    </section>
    <section>
        <h3>Добавить веб-страницу</h3>
        <form method="POST" action="?action=addPage">
            <input hidden type="text" name="action" value="addPage">
        </form>
    </section>
    <!--
        Copyright (c) 2007-2008 Brian Kirchoff (http://nicedit.com)

        Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

        The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

        THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
    -->
    <script src="http://js.nicedit.com/nicEdit-latest.js"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
            new nicEditor({
                buttonList : ['bold','italic','underline','left','center','right','justify','ol','ul','fontSize','fontFormat','indent','outdent','link','unlink','forecolor','bgcolor'],

            }).panelInstance('news_text_editor');
        });
        
        document.getElementById('news_submit').onclick = function() {
            let content = nicEditors.findEditor('news_text_editor').getContent();
            document.getElementById('news_text_editor').innerHTML = content;
            document.getElementsById('newsEditor').submit();
        }
    </script>
</main>