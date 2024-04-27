{extends file="home_nonelogin.tpl"}


{block name=content}

	<!-- form section start -->

	<div class="contact_section layout_padding">
		<div class="container">
			<div class="contact_section_2 layout_main">
				<div class="row">
					<div class="col-md-12">
						<form class="login_form" action="{$conf->action_url}login" method="post">
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


	{include file='messages.tpl'}
{/block}