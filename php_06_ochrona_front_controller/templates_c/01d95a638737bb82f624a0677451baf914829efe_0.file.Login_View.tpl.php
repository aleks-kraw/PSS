<?php
/* Smarty version 3.1.30, created on 2024-04-27 21:17:44
  from "C:\xampp\htdocs\PSS\php_06_ochrona_front_controller\app\views\Login_View.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_662d4f587e9140_42387022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01d95a638737bb82f624a0677451baf914829efe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS\\php_06_ochrona_front_controller\\app\\views\\Login_View.tpl',
      1 => 1714233412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home_nonelogin.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_662d4f587e9140_42387022 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_607384620662d4f587e7dd4_34566039', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:home_nonelogin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_607384620662d4f587e7dd4_34566039 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<!-- form section start -->

	<div class="contact_section layout_padding">
		<div class="container">
			<div class="contact_section_2 layout_main">
				<div class="row">
					<div class="col-md-12">
						<form class="login_form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
							<div class="mail_section_1">
								<legend class="contact_taital">Logowanie</legend>

								<label for="id_login">Login: </label>
								<input id="id_login" type="text" name="login" /></br>
								<label for="id_pass">Hasło: </label>
								<input id="id_pass" type="password" name="pass" /></br>
								<div class="send_bt">
									<input type="submit" value="Zaloguj" />
								</div>

							</div>
						</form>

					</div>
				</div>
			</div>
		</div>

	</div>


	<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
