<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.
//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';
// 1. pobranie parametrów
function getParams(&$k,&$l,&$p){
	$k = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
	$l = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
	$p = isset($_REQUEST['procent']) ? $_REQUEST ['procent'] : null;	
}
// $k = $_REQUEST ['kwota'];
// $l = $_REQUEST ['lata'];
// $p = $_REQUEST ['procent'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$k,&$l,&$p,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($k) && isset($l) && isset($p))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $k == "") {
		$messages [] = 'Nie podano kwoty';
	}
	if ( $l == "") {
		$messages [] = 'Nie podano lat';
	}
	if ( $p == "") {
		$messages [] = 'Nie podano oprocentowania';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $k )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $l )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	if (! is_numeric( $p )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}	

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$l,&$k,&$p,&$messages,&$wynik){
	global $role;
	$k = intval($k);
	$l = intval($l);
	$p = doubleval($p);
	
	if ($role == 'admin'){
		$wynik= ($k+($p/100*$k))/($l*12);
	} else {
		$messages [] = 'Nie masz uprawnień do wykonania obliczeń';
	}
	
}
//definicja zmiennych kontrolera
$k = null;
$l = null;
$p = null;
$wynik = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($k,$l,$p);
if ( validate($k,$l,$p,$messages) ) { // gdy brak błędów
	process($k,$l,$p,$messages,$wynik);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';