<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
	<link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/app/style.css">
</head>
<body>
<style>

</style>

<div class="login_box">
	<form class="login_form" action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
	<legend>Logowanie</legend>
	
		<label for="id_login">Login: </label>
		<input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" /></br>
		<label for="id_pass">Hasło: </label>
		<input id="id_pass" type="password" name="pass" /></br>
	
	<input class="przycisk" type="submit" value="zaloguj"/>
	</form>	
</div>
<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;margin:0 auto">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

</div>

</body>
</html>