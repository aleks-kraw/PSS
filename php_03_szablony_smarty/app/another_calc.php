<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załaduj Smarty
require_once _ROOT_PATH.'/app/lib/smarty/Smarty.class.php';



$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator');
$smarty->assign('page_description','Kalkulator');
$smarty->assign('page_header','Kalkulator');



// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc1_view.tpl');
?>