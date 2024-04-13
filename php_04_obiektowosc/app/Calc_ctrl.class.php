<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/Calc_form.class.php';
require_once $conf->root_path.'/app/Calc_result.class.php';

class Calc_ctrl{
    private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	
    
	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
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
		$this->msgs->addError('Nie podano kwoty');
	}
	if ( $this->form->l == "") {
		$this->msgs->addError('Nie podano lat');
	}
	if ( $this->form->p == "") {
		$this->msgs->addError('Nie podano oprocentowania');
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if ( ! $this->msgs->isError()) {
		// sprawdzenie, czy $x i $y są liczbami całkowitymi
		if (! is_numeric( $this->form->k )) {
			$this->msgs->addError('Kwota nie jest liczbą');
		}
		if (! is_numeric( $this->form->l )) {
			$this->msgs->addError('Lata nie są liczbą');
		}
		if (! is_numeric( $this->form->p )) {
			$this->msgs->addError('Oprocentowanie nie jest liczbą');
		}
	}
	
	return ! $this->msgs->isError();
    }
    
    public function process(){
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

    /**
	 * Wygenerowanie widoku
	 */

	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
 
        $smarty->assign('page_title','Kalkulator kredytowy');
        $smarty->assign('page_description','Kalkulator kredytowy');
        $smarty->assign('page_header','Kalkulator kredytowy');

        $smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->wynik);
		
		$smarty->display($conf->root_path.'/app/calc_view.tpl');
    
    
    }



    
}