<aside>
	<h3>Традиционные ежегодные мероприятия:</h3>
	<a href='regular_events/new_year.php'>
		<video disable autoplay loop muted>
			<source src='video/christmas_tree.webm'>
		</video>
		<span>Новый год</span>
	</a>
	<a href='regular_events/volodarka.php'>
		<img src='images/we_are_bugs.jpg'>
		<span>Володарка</span>
	</a>
	<a href='regular_events/festival.php'>
		<img src='images/ksp_emblem.jpg'>
		<span>Фестиваль</span>
	</a>
	<a href='regular_events/rally.php'>
		<video autoplay loop muted>
			<source src='video/fire.webm'>
		</video>
		<span>Слёт</span>
	</a>
</aside>
<main>
	<h3>Новости:</h3>
    <section class='news'>
        <?php
	        foreach ($news as $news_item) {
                echo '<article>';
                echo ' <p class="news_headers">', $news_item->title, '</p>';
                echo ' <img hidden class="news_image" src="', $news_item->img_url,  '"></img>';
                echo ' <p hidden class="news_text">', $news_item->text, '</p>';
                echo ' <button class="show_buttons">Показать</button>';
                echo '</article>';
	        }
        ?>
    </section>
    <h4 style='text-align: center'>День Рождения клуба - 18 ноября 1964 года. Большое влияние на клуб, особенно на этапе его становления и развития оказал мужской хор МИФИ. Это придавало клубу ту особенность, которая и отличала его от других клубов авторской песни - многоголосое пение, качество исполнения. На одном из разделов сайта выложены тексты, аккорды и записи разных периодов работы клуба.</h4>
</main>
<script src="js/news_show_and_hide.js"></script>