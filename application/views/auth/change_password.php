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
								<?php echo anchor('auth/loginfacebook', '<i class="fa fa-facebook"></i> Facebook 登入', 'class="btn-block btn-lg btn btn-facebook"');?>
							</div>
							<div class="col-md-6">
								<button class="btn-block btn-lg btn btn-twitter"><i class="fa fa-twitter"></i> Twitter 登入</button>
							</div>
						</div>
					</div>

					<h2><?php echo lang('change_password_heading');?></h2>

                    <?php
                    if ($this->router->fetch_method() == 'login' && !empty($message)) {
                    ?>
					<div class="alert alert-danger" role="alert" id="infoMessage"><?php echo $message;?></div>
					<?php } ?>

					<?php echo form_open("auth/change_password", array('role'=>'form', 'class'=>'login-form cf-style-1'));?>
						<div class="field-row">
                            <label><?php echo lang('change_password_old_password_label', 'old_password');?></label>
                            <?php echo form_input($old_password);?>
                        </div><!-- /.field-row -->

                        <div class="field-row">
                            <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label>
                            <?php echo form_input($new_password);?>
                        </div><!-- /.field-row -->

                        <div class="field-row clearfix">
                        	<?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?>
                        	<?php echo form_input($new_password_confirm);?>
                        </div>

                        <?php echo form_input($user_id);?>

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge">修 改</button>
                        </div><!-- /.buttons-holder -->
					<?php echo form_close();?><!-- /.cf-style-1 -->

				</section><!-- /.sign-in -->
			</div><!-- /.col -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</main><!-- /.authentication -->
<!-- ========================================= MAIN : END ========================================= -->