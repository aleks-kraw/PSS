<?php
/* Smarty version 3.1.30, created on 2024-04-14 19:47:16
  from "C:\xampp\htdocs\PSS\php_05_kontroler_glowny\app\views\calc_view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_661c16a4b38348_37314161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb33fae91a18b07f1b02207dc4bd5f940c1b5b9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\php_05_kontroler_glowny\\app\\views\\calc_view.tpl',
      1 => 1713116816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home.tpl' => 1,
  ),
),false)) {
function content_661c16a4b38348_37314161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_215856700661c16a4ac1bf4_54212176', 'footer');
?>






<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_539090905661c16a4b36ca6_31652956', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_215856700661c16a4ac1bf4_54212176 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_539090905661c16a4b36ca6_31652956 extends Smarty_Internal_Block
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
