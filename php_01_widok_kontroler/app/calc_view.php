<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="kalkulator">
<h3>Kalkulator kredytowy</h3>
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_kwota">Kwota: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php if(isset($kwota))  print($kwota); ?>" /><br />
	<label for="id_lata">Na ile lat: </label>
	<input id="id_lata" type="text" name="lata" value="<?php if(isset($lata))  print($lata); ?>" /><br />
	<label for="id_procent">Oprocentowanie: </label>
	<input id="id_procent" type="text" name="procent" value="<?php if(isset($procent))  print($procent); ?>" /><br />
	<input class="przycisk" type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($wynik)){ ?>
<div style="margin: 20px auto; padding: 10px; border-radius: 5px; background-color:#379937; width:300px;text-align:center">
<?php echo 'Miesięczna rata wynosi: '.round($wynik,2); ?>
</div>
<?php } ?>
</div>
</body>
</html>