<?php
require_once dirname(__FILE__).'/../config.php';
require_once $conf->root_path.'/app/Calc_ctrl.class.php';

// tworzenie i użycie obiektu
$ctrl = new calc_ctrl();
$ctrl->process();
?>