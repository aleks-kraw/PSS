<?php

namespace app\controllers;


class another_calc{

    public function generateView(){
     
        getSmarty()->assign('page_title','Kalkulator powierzchni');
        getSmarty()->assign('page_description','Kalkulator powierzchni');
        getSmarty()->assign('page_header','Kalkulator powierzchni');
        
        getSmarty()->display('calc1_view.tpl');

    }

}
?>

