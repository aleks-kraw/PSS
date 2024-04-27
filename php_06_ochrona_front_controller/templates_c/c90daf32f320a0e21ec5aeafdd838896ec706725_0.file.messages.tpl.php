<?php
/* Smarty version 3.1.30, created on 2024-04-27 21:12:55
  from "C:\xampp\htdocs\PSS\php_06_ochrona_front_controller\app\views\templates\messages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_662d4e372d2e93_95012511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c90daf32f320a0e21ec5aeafdd838896ec706725' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\php_06_ochrona_front_controller\\app\\views\\templates\\messages.tpl',
      1 => 1714240620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662d4e372d2e93_95012511 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <div>
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
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
    <div>
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
    </div>
<?php }
}
}
