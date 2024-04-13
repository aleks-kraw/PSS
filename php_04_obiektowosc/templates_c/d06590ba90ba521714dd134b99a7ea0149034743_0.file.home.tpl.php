<?php
/* Smarty version 3.1.30, created on 2024-04-13 17:55:26
  from "C:\xampp\htdocs\PSS\php_04_obiektowosc\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_661aaaeecf6fb6_98660996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd06590ba90ba521714dd134b99a7ea0149034743' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\php_04_obiektowosc\\templates\\home.tpl',
      1 => 1713023235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661aaaeecf6fb6_98660996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <meta charset="utf-8" />
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>

    <!-- template start -->
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Foodfinda</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/favicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- template end -->
</head>

<body>
    <!-- header section start -->
    <div class="container-fluid">
        <div class="header_section">
            <div class="container">
                <nav class="navbar navbar-light bg-light justify-content-between">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php">Kalkulator kredytowy</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/another_calc.php">Kalkulator powierzchni</a>

                    </div>
                    <div></div>
                    <a class="logo" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php"><img
                            src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/logo_k4.png"></a></a>
                    <span class="toggle" onclick="openNav()"><i class="fa fa-bars"></i></span>
                    <div></div>
                </nav>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- layout main section start -->
    <div class="container-fluid">
        <div class="layout_main">
            <!-- banner section start -->
            <div class="banner_section">
                <div class="container">
                    <div class="menu_main">
                        <div class="custome_menu">
                            <ul>
                                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php">Kalkulator kredytowy</a></li>
                                <li class=" active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/another_calc.php">Kalkulator
                                        powierzchni</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="login_menu">
                     <ul>
                        <li><a href="#">Login</a></li>

                     </ul>
                  </div> -->
                    </div>
                </div>

            </div>
            <!-- banner section end -->


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1876913032661aaaeecf4172_44747854', 'content');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_708609167661aaaeecf4873_76487534', 'content1');
?>










            <!-- copyright section start -->
            <div class="copyright_section">
                <div class="container">
                    <p class="copyright_text">2024 All Rights Reserved AK. Design by <a href="https://html.design">Free
                            html
                            Templates</a></p>
                </div>
            </div>
            <!-- copyright section end -->
            <!-- Javascript files-->
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/popper.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery-3.0.0.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/plugin.js"><?php echo '</script'; ?>
>
            <!-- sidebar -->
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.mCustomScrollbar.concat.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/custom.js"><?php echo '</script'; ?>
>
            <!-- javascript -->
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/owl.carousel.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js">
            <?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript">
            <?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "100%";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                }
            <?php echo '</script'; ?>
>
</body>

</html><?php }
/* {block 'content'} */
class Block_1876913032661aaaeecf4172_44747854 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'content1'} */
class Block_708609167661aaaeecf4873_76487534 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content1'} */
}
