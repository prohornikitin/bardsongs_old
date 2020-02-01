<main>
    <section class='news'>
        <?php
	        foreach ($news as $news_item) {
                echo '<article>';
                echo ' <h3 class="news_headers">', $news_item->title, '</h3>';
                if($news_item->img_url === null) {
                	echo ' <img hidden class="news_image" alt="no image"></img>';
                } else {
                	echo ' <img hidden class="news_image" alt="image" src="', $news_item->img_url, '"></img>';
                }
                echo ' <div hidden class="news_text">', $news_item->text, '</div>';
                echo ' <button class="show_buttons">Показать</button>';
                echo '</article>';
	        }
        ?>
    </section>
</main>
<aside>
	<h3>Традиционные ежегодные мероприятия:</h3>
	<a href='regularEvents/Festival.php'>
		<p>Фестиваль</p>
		<img src='images/KspEmblem.jpg'>
	</a>
	<a href='regularEvents/Rally.php'>
		<p>Слёт</p>
		<video autoplay loop muted>
			<source src='video/Fire.webm'>
		</video>
	</a>
	<a href='regularEvents/NewYear.php'>
		<p>Новый год</p>
		<video disable autoplay loop muted>
			<source src='video/ChristmasTree.webm'>
		</video>
	</a>
	<a href='regularEvents/volodarka.php'>
		<p>Володарка</p>
		<img src='images/WeAreBugs.jpg'>
	</a>
</aside>
<script src="js/NewsShowAndHide.js"></script>