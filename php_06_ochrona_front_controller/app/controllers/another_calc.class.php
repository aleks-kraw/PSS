<?php

namespace app\controllers;


class another_calc{

    public function action_another_calc(){

    if (inRole('admin')) {
        $this->generateView();
    } else {
        getMessages()->addError('Tylko administrator może przejść na stronę kalkulatora powierzchni!');
        $this->generateView2();
        
    }
    

}

public function generateView(){
     getSmarty()->assign('user',unserialize($_SESSION['user']));
    getSmarty()->assign('page_title','Kalkulator powierzchni');
    getSmarty()->assign('page_description','Kalkulator powierzchni');
    getSmarty()->assign('page_header','Kalkulator powierzchni');
    
    getSmarty()->display('calc1_view.tpl');
}
public function generateView2(){
		
    getSmarty()->assign('user',unserialize($_SESSION['user']));
    getSmarty()->assign('page_title','Kalkulator kredytowy');
    getSmarty()->assign('page_description','Kalkulator kredytowy');
    getSmarty()->assign('page_header','Kalkulator kredytowy');
    getSmarty()->display('calc_view.tpl');


}

}
?>

