<!DOCTYPE html>
<html>
<head>
	<title>Control Panel</title>
	<link rel='stylesheet' href='/css/base.css'>
	<link rel="stylesheet" href="/css/control_panel.css">
</head>
<body>
	<div id="backgroundImageHolder"></div>
	<header>
			<h1>Клуб самодеятельной песни КСП МИФИ</h1>
	</header>
	<div id="contentHolder">
		<nav>
			<button type="button" name="Главная" 
			onclick="window.location.href='main.php'">Главная</button>
			<button type="button" name="Форум"
			onclick="window.location.href='forum.php'">Форум</button>
			<button type="button" name="Галерея"
			onclick="window.location.href='gallery.php'">Галерея</button>
			<button disabled type="button" name="Участники"
			onclick="window.location.href='members.php'">Участники</button>
		</nav>
		<main>
			<h4>Редактор Новостей</h4>
			<form name="News editor">
				<div class="form_item">
					<label for="Title">Заголовок:</label>
					<input type="text" name="Title">
				</div>
				<div class="form_item">
					<label for="Text">Текст:</label>
					<input type="text" name="Text">
				</div>
				<div class="form_item">
					<input type="submit" name="Submit" value="Выложить">
				</div>
			</form>
		</main>
</body>
</html>