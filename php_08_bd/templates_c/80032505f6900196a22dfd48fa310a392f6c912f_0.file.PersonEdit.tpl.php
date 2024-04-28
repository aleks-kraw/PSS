<?php
/* Smarty version 3.1.30, created on 2024-04-28 03:28:51
  from "C:\xampp\htdocs\PSS\php_08_bd\app\views\PersonEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_662da653d548e7_36266545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80032505f6900196a22dfd48fa310a392f6c912f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\php_08_bd\\app\\views\\PersonEdit.tpl',
      1 => 1714267729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_662da653d548e7_36266545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103171590662da653d54485_90223391', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_103171590662da653d54485_90223391 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="bottom-margin">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personSave" method="post" class="pure-form pure-form-aligned">
            <fieldset>
                <legend>Dane osoby</legend>
                <div class="pure-control-group">
                    <label for="name">Imię</label>
                    <input id="name" type="text" placeholder="imię" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
                </div>
                <div class="pure-control-group">
                    <label for="surname">Nazwisko</label>
                    <input id="surname" type="text" placeholder="nazwisko" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
">
                </div>
                <div class="pure-control-group">
                    <label for="birthdate">Data ur.</label>
                    <input id="birthdate" type="text" placeholder="RRRR-MM-DD" name="birthdate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->birthdate;?>
">
                </div>
                <div class="pure-control-group">
                    <label for="phone">Nr telefonu</label>
                    <input id="phone" type="text" placeholder="Nr telefonu" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phone;?>
">
                </div>
                <div class="pure-controls">
                    <input type="submit" class="pure-button pure-button-primary" value="Zapisz" />
                    <a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList">Powrót</a>
                </div>

            </fieldset>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
        </form>
    </div>

<?php
}
}
/* {/block 'top'} */
}
