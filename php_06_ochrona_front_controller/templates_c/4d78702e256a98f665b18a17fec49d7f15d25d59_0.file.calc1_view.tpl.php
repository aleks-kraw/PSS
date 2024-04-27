<?php
/* Smarty version 3.1.30, created on 2024-04-27 21:49:02
  from "C:\xampp\htdocs\PSS\php_06_ochrona_front_controller\app\views\calc1_view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_662d56ae8d6ef7_30821548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d78702e256a98f665b18a17fec49d7f15d25d59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\php_06_ochrona_front_controller\\app\\views\\calc1_view.tpl',
      1 => 1713116849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home.tpl' => 1,
  ),
),false)) {
function content_662d56ae8d6ef7_30821548 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_986640099662d56ae8bbe26_41725252', 'footer');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_428392264662d56ae8d6373_75943100', 'content1');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_986640099662d56ae8bbe26_41725252 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content1'} */
class Block_428392264662d56ae8d6373_75943100 extends Smarty_Internal_Block
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
