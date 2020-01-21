<main>
	<?php
		if(isset($error_text)) {
			echo "<h4 style='color: red;'>{$error_text}</h4>";
		} else {
			echo '<h4>Войдите, чтобы получить возможность пользоваться форумом</h4>';
		}
	?>
	<form action="/login.php" method="POST">
		<div class="form_item">
			<input type="email" required name="email" placeholder="Email">
		</div>
		<div class="form_item">
			<input type="password" required name="password" placeholder="Пароль">
		</div>
		<span>
			<input type="submit" name="sign_in" value="Вход">
			<input type="submit" name="sign_up" value="Регистрация">
		</span>
		<a href="/password_recover.php">Забыли пароль?</a>
	</form>
</main>
