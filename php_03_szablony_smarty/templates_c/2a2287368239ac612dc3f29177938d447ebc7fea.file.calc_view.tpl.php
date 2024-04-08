<?php /* Smarty version Smarty-3.1.17, created on 2024-04-08 20:22:32
         compiled from "C:\xampp\htdocs\PSS\php_03_szablony_smarty\app\calc_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33269908661435e8d93d90-17979020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a2287368239ac612dc3f29177938d447ebc7fea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\php_03_szablony_smarty\\app\\calc_view.tpl',
      1 => 1712599748,
      2 => 'file',
    ),
    '3331ee76ce36b195ecc6655075466af1d92776d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\php_03_szablony_smarty\\app\\templates\\home.tpl',
      1 => 1712597161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33269908661435e8d93d90-17979020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_661435e8de34c7_82991283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_661435e8de34c7_82991283')) {function content_661435e8de34c7_82991283($_smarty_tpl) {?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytowy</title>

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
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/images/favicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/css/owl.theme.default.min.css">
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
                        <a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php">Kalkulator kredytowy</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/another_calc.php">Kalkulator powierzchni</a>

                    </div>
                    <div></div>
                    <a class="logo" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/images/logo_k4.png"></a></a>
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
                                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php">Kalkulator kredytowy</a></li>
                                <li class=" active"><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/another_calc.php">Kalkulator powierzchni</a>
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


            
   <!-- form section start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <div class="contact_section_2">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="contact_taital">Kalkulator Kredytowy</h1>
                  <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
                     <div class="mail_section_1">
                        <label for="id_kwota">Kwota: </label>
                        <input class="mail_text" id="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['k'];?>
"> <br />
                        <label for="id_lata">Na ile lat: </label>
                        <input class="mail_text" id="id_lata" type="text" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['l'];?>
" /><br />
                        <label for="id_procent">Oprocentowanie: </label>
                        <input class="mail_text" id="id_procent" type="text" name="procent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['p'];?>
" /><br />
                        <div class="send_bt">
                           <input type="submit" value="Oblicz" />
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

   </div>


   <!-- form section end -->

   
   <?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
      <?php if (count($_smarty_tpl->tpl_vars['messages']->value)>0) {?>
         <h4 class="info_text">Wystąpiły błędy: </h4>
         <ol class="err">
            <?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
               <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
            <?php } ?>
         </ol>
      <?php }?>
   <?php }?>

   
   <?php if (isset($_smarty_tpl->tpl_vars['infos']->value)) {?>
      <?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
         <h4 class="info_text">Informacje: </h4>
         <ol class="inf">
            <?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
               <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
            <?php } ?>
         </ol>
      <?php }?>
   <?php }?>

   <div class="footer_section">
      <?php if (isset($_smarty_tpl->tpl_vars['wynik']->value)) {?>
         <div>
            <h4 class="info_text"> Wynik</h4>
            <p class="res" style="">
               <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['wynik']->value);?>

            </p>
         <?php }?>
      </div>



   </div>

            









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
            <script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/js/jquery.min.js"></script>
            <script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/js/popper.min.js"></script>
            <script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/bootstrap.bundle.min.js"></script>
            <script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/js/jquery-3.0.0.min.js"></script>
            <script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/js/plugin.js"></script>
            <!-- sidebar -->
            <script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/js/custom.js"></script>
            <!-- javascript -->
            <script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/js/owl.carousel.js"></script>
            <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js">
            </script>
            <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript">
            </script>
            <script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "100%";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                }
            </script>
</body>

</html><?php }} ?>
