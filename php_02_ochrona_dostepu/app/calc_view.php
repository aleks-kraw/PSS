<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
<link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/app/style.css">
</head>
<body>
<div class="kalkulator">
	<nav>
		<a href="<?php print(_APP_ROOT); ?>/app/settings.php">Ustawienia</a>
		<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php">Wyloguj</a>
	</nav> 
<h3>Kalkulator kredytowy</h3>
<form action="<?php print(_APP_ROOT);?>/app/calc.php" method="post">
	<label for="id_kwota">Kwota: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php out($k) ?>" /><br />
	<label for="id_lata">Na ile lat: </label>
	<input id="id_lata" type="text" name="lata" value="<?php out($l) ?>" /><br />
	<label for="id_procent">Oprocentowanie: </label>
	<input id="id_procent" type="text" name="procent" value="<?php out($p) ?>" /><br />
	<input class="przycisk" type="submit" value="Oblicz" />
</form>	
 


<?php if (isset($wynik)){ ?>
	<div style="margin: 20px auto; padding: 10px; border-radius: 5px; background-color:#379937; width:300px;text-align:center">
<?php echo 'Wynik: '.$wynik; ?>
</div>
<?php } ?>

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
</body>
</html>