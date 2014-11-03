<!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6">
				<section class="section sign-in inner-right-xs">
					<h2 class="bordered">登　入</h2>
					<p>您好 , 歡迎您使用社群帳號登入。</p>

					<div class="social-auth-buttons">
						<div class="row">
							<div class="col-md-6">
								<button class="btn-block btn-lg btn btn-facebook"><i class="fa fa-facebook"></i> Facebook 登入</button>
							</div>
							<div class="col-md-6">
								<button class="btn-block btn-lg btn btn-twitter"><i class="fa fa-twitter"></i> Twitter 登入</button>
							</div>
						</div>
					</div>

                    <h2 class="bordered"><?php echo lang('forgot_password_heading');?></h2>
                    <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p> <br />

					<form role="form" class="login-form cf-style-1">
					<?php echo form_open("auth/forgot_password", array('role'=>'form', 'class'=>'login-form cf-style-1'));?>
						<div class="field-row">
                            <label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label>
                            <input type="text" class="le-input" value="<?php echo set_value('email');?>">
                        </div><!-- /.field-row -->

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge">送出</button>
                        </div><!-- /.buttons-holder -->
					</form><!-- /.cf-style-1 -->

				</section><!-- /.sign-in -->
			</div><!-- /.col -->

			<div class="col-md-6">
				<section class="section register inner-left-xs">
					<h2 class="bordered">註冊帳號</h2>
					<p>註冊一個屬於您的帳號</p>

					<?php echo form_open("auth/create_user",array('role'=>'form', 'class'=>'register-form cf-style-1'));?>
						<div class="field-row">
                            <label><?php echo lang('create_user_lname_label', 'last_name');?></label>
                            <input type="text" class="le-input" value="<?php echo set_value('last_name');?>">
                        </div><!-- /.field-row -->

						<div class="field-row">
                            <label><?php echo lang('create_user_fname_label', 'first_name');?></label>
                            <input type="text" class="le-input" value="<?php echo set_value('first_name');?>">
                        </div><!-- /.field-row -->

						<div class="field-row">
                            <label><?php echo lang('create_user_company_label', 'company');?></label>
                            <input type="text" class="le-input" value="<?php echo set_value('company');?>">
                        </div><!-- /.field-row -->

						<div class="field-row">
                            <label><?php echo lang('create_user_email_label', 'email');?></label>
                            <input type="text" class="le-input" value="<?php echo set_value('email');?>">
                        </div><!-- /.field-row -->

						<div class="field-row">
                            <label><?php echo lang('create_user_phone_label', 'phone');?></label>
                            <input type="text" class="le-input" value="<?php echo set_value('phone');?>">
                        </div><!-- /.field-row -->

						<div class="field-row">
                            <label><?php echo lang('create_user_password_label', 'password');?></label>
                            <input type="text" class="le-input" value="<?php echo set_value('password');?>">
                        </div><!-- /.field-row -->

						<div class="field-row">
                            <label><?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
                            <input type="text" class="le-input" value="<?php echo set_value('password_confirm');?>">
                        </div><!-- /.field-row -->

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge">建立帳號</button>
                        </div><!-- /.buttons-holder -->
					</form>

					<h2 class="semi-bold">現在註冊，您能夠享有下列服務 :</h2>

					<ul class="list-unstyled list-benefits">
						<li><i class="fa fa-check primary-color"></i> 快速的訂購商品與結帳</li>
						<li><i class="fa fa-check primary-color"></i> 一目了然的定單資訊</li>
						<li><i class="fa fa-check primary-color"></i> 瀏覽您所有的購物記錄</li>
					</ul>

				</section><!-- /.register -->

			</div><!-- /.col -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</main><!-- /.authentication -->
<!-- ========================================= MAIN : END ========================================= -->