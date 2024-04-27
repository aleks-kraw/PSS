<?php

require_once 'init.php';



getRouter()->setDefaultRoute('calcShow'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('calcShow','Calc_ctrl',['user','admin']);
getRouter()->addRoute('calc_kred','Calc_ctrl',['user','admin']);
getRouter()->addRoute('another_calc','another_calc',['user','admin']);
getRouter()->addRoute('login','Login_ctrl');
getRouter()->addRoute('logout','Login_ctrl', ['user','admin']);

getRouter()->go(); //wybiera i uruchamia odpowiednią ścieżkę na podstawie parametru 'action';