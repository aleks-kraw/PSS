<?php
/* Smarty version 3.1.30, created on 2024-04-14 19:47:34
  from "C:\xampp\htdocs\PSS\php_05_kontroler_glowny\app\views\calc1_view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_661c16b65c21c0_46217226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40347f43048fca7b1e327a3cc0e9b8dcb08ec7ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\php_05_kontroler_glowny\\app\\views\\calc1_view.tpl',
      1 => 1713116849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home.tpl' => 1,
  ),
),false)) {
function content_661c16b65c21c0_46217226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1486549184661c16b65b0075_09003621', 'footer');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_751947748661c16b65c10f6_09832991', 'content1');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_1486549184661c16b65b0075_09003621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content1'} */
class Block_751947748661c16b65c10f6_09832991 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="contact_section layout_padding">
        <div class="container">
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="contact_taital">Kalkulator w budowie</h1>
                        <img id="another_img" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/another.jpeg">
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php
}
}
/* {/block 'content1'} */
}
