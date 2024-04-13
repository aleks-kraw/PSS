<?php
/* Smarty version 3.1.30, created on 2024-04-13 18:00:55
  from "C:\xampp\htdocs\PSS\php_04_obiektowosc\app\calc1_view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_661aac3724c642_18831275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ce6b04a8d1715470c033601b0f35b511934a30f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\php_04_obiektowosc\\app\\calc1_view.tpl',
      1 => 1713024052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661aac3724c642_18831275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_904869799661aac37249fb6_61758708', 'footer');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2113005828661aac3724c311_23882330', 'content1');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/home.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'footer'} */
class Block_904869799661aac37249fb6_61758708 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content1'} */
class Block_2113005828661aac3724c311_23882330 extends Smarty_Internal_Block
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
