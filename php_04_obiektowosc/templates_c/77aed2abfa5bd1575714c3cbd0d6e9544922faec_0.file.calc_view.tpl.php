<?php
/* Smarty version 3.1.30, created on 2024-04-13 17:55:26
  from "C:\xampp\htdocs\PSS\php_04_obiektowosc\app\calc_view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_661aaaeea3d9f9_89153561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77aed2abfa5bd1575714c3cbd0d6e9544922faec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\php_04_obiektowosc\\app\\calc_view.tpl',
      1 => 1713022621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661aaaeea3d9f9_89153561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1017303289661aaaeea2c056_16329466', 'footer');
?>






<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1644448239661aaaeea3d315_67839787', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/home.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'footer'} */
class Block_1017303289661aaaeea2c056_16329466 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1644448239661aaaeea3d315_67839787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <!-- form section start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <div class="contact_section_2">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="contact_taital">Kalkulator Kredytowy</h1>
                  <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
                     <div class="mail_section_1">
                        <label for="id_kwota">Kwota: </label>
                        <input class="mail_text" id="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->k;?>
"> <br />
                        <label for="id_lata">Na ile lat: </label>
                        <input class="mail_text" id="id_lata" type="text" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->l;?>
" /><br />
                        <label for="id_procent">Oprocentowanie: </label>
                        <input class="mail_text" id="id_procent" type="text" name="procent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->p;?>
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

   
   <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
      <h4 class="info_text">Wystąpiły błędy: </h4>
      <ol class="err">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </ol>
   <?php }?>

   
   <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
      <h4>Informacje: </h4>
      <ol class="inf">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </ol>
   <?php }?>

   
   <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
      <h4 class="info_text">Informacje: </h4>
      <ol class="inf">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </ol>
   <?php }?>

   <div class="footer_section">
      <?php if (isset($_smarty_tpl->tpl_vars['res']->value->wynik)) {?>
         <div>
            <h4 class="info_text"> Wynik</h4>
            <p class="res" style="">
               <?php ob_start();
echo $_smarty_tpl->tpl_vars['res']->value->wynik;
$_prefixVariable1=ob_get_clean();
echo sprintf("%.2f",$_prefixVariable1);?>

            </p>
         <?php }?>
      </div>



   </div>
<?php
}
}
/* {/block 'content'} */
}
