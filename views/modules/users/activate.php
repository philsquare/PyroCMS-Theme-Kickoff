<h1><?php echo lang('user:register_header') ?></h1>

<div class="uk-grid">
	<div class="uk-width-1-1">

		<div class="uk-alert uk-alert-success">
			<p>You should receive an email with a link that will allow you to activate your account. Please check your spam folder if you do not see the email after a couple minutes. Alternatively, you can activate your account by filling out the form below using your activation code.</p>
		</div>

		<?php if(!empty($error_string)): ?>
			<div class="error-box">
				<?php echo $error_string ?>
			</div>
		<?php endif;?>

		<?php echo form_open('users/activate', 'id="activate-user" class="uk-form uk-form-stacked"') ?>
		<div class="uk-form-row">
			<label for="email" class="uk-form-label"><?php echo lang('global:email') ?></label>
            <div class="uk-form-controls">
                <?php echo form_input('email', isset($_user['email']) ? $_user['email'] : '', 'class="uk-form-width-large"');?>
            </div>
		</div>

		<div class="uk-form-row">
			<label for="activation_code" class="uk-form-label"><?php echo lang('user:activation_code') ?></label>
            <div class="uk-form-controls">
                <?php echo form_input('activation_code', '', 'class="uk-form-width-large"');?>
            </div>
		</div>

        <div class="uk-form-row">
            <?php echo form_submit('btnSubmit', lang('user:activate_btn'), 'class="uk-button"') ?>
        </div>

		<?php echo form_close() ?>

	</div>
</div>