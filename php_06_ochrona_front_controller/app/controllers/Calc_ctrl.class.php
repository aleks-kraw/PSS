<?php

namespace app\controllers;

use app\forms\Calc_form;
use app\transfer\Calc_result;


class Calc_ctrl{
   
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	
    
	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new Calc_form();
		$this->wynik = new Calc_result();
	}

    /** 
	 * Pobranie parametrów
	 */
    public function getParams(){
        $this->form->k = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
	    $this->form->l = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
	    $this->form->p = isset($_REQUEST['procent']) ? $_REQUEST ['procent'] : null;
    }

    // Walidacja
    public function validate(){
	// sprawdzenie, czy parametry zostały przekazane
	    if ( ! (isset($this->form->k) && isset($this->form->l) && isset($this->form->p) ))
		{	
			return false;
		}	
	

	
	// sprawdzenie, czy potrzebne wartości zostały przekazane
	
	if ( $this->form->k == "") {
		getMessages()->addError('Nie podano kwoty');
	}
	if ( $this->form->l == "") {
		getMessages()->addError('Nie podano lat');
	}
	if ( $this->form->p == "") {
		getMessages()->addError('Nie podano oprocentowania');
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if ( ! getMessages()->isError()) {
		// sprawdzenie, czy $x i $y są liczbami całkowitymi
		if (! is_numeric( $this->form->k )) {
			getMessages()->addError('Kwota nie jest liczbą');
		}
		if (! is_numeric( $this->form->l )) {
			getMessages()->addError('Lata nie są liczbą');
		}
		if (! is_numeric( $this->form->p )) {
			getMessages()->addError('Oprocentowanie nie jest liczbą');
		}
	}
	
	return ! getMessages()->isError();
    }
    
    public function action_calc_kred(){
        // global $role;
        $this->getparams();

        if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->k = floatval($this->form->k);
			$this->form->l = floatval($this->form->l);
            $this->form->p = floatval($this->form->p);
			// $this->msgs->addInfo('Parametry poprawne.');
            $this->wynik->wynik=($this->form->k+($this->form->k*($this->form->p/100)))/($this->form->l*12);
        }
        // $wynik= (float)($form['k']+($form['k']*($form['p']/100)))/($form['l']*12);
        $this->generateView();
    
    }
	public function action_calcShow(){
		
		$this->generateView();
	}
	
    /**
	 * Wygenerowanie widoku
	 */

	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
				
		getSmarty()->assign('page_title','Kalkulator kredytowy');
		getSmarty()->assign('page_description','Kalkulator kredytowy');
		getSmarty()->assign('page_header','Kalkulator kredytowy');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->wynik);
		
		getSmarty()->display('calc_view.tpl');
    
    
    }



    
}