<?php
/* Smarty version 3.1.30, created on 2024-04-27 21:12:54
  from "C:\xampp\htdocs\PSS\php_06_ochrona_front_controller\app\views\calc_view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_662d4e36aa1082_04544225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4e979c60eba930022c3ea530b7b2e7fe19da11b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\php_06_ochrona_front_controller\\app\\views\\calc_view.tpl',
      1 => 1714240026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_662d4e36aa1082_04544225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>







<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_572290139662d4e36a9f7c4_40319188', 'content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_736465970662d4e36aa0c59_15516963', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_572290139662d4e36a9f7c4_40319188 extends Smarty_Internal_Block
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
                  <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calc_kred" method="post">
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

   <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
         </div>
      <?php }?>
   </div>




<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_736465970662d4e36aa0c59_15516963 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
