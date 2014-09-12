<h1><?php echo lang('user:login_header') ?></h1>

<div class="uk-grid">
	<div class="uk-width-1-1">

	<?php if (validation_errors()): ?>
		<div class="uk-alert uk-alert-danger">
			<?php echo validation_errors();?>
		</div>
		<?php endif ?>

		<?php echo form_open('users/login', array('id'=>'login', 'class' => 'uk-form uk-form-stacked'), array('redirect_to' => $redirect_to, 'role' => 'form')) ?>

		<div class="uk-form-row">

			<label for="email" class="uk-form-label"><?php echo lang('global:email') ?></label>
            <div class="uk-form-controls">
                <?php echo form_input('email', $this->input->post('email') ? $this->input->post('email') : '', 'class="uk-form-width-medium"')?>
            </div>
		</div>

		<div class="uk-form-row">
			<label for="password" class="uk-form-label"><?php echo lang('global:password') ?></label>
            <div class="uk-form-controls">
                <input type="password" id="password" name="password" maxlength="20" class="uk-form-width-medium">
            </div>
		</div>

		<div class="uk-form-row">
			<label class="uk-form-label"><?php echo lang('user:remember') ?></label>
            <div class="uk-form-controls">
                <?php echo form_checkbox('remember', '1', false) ?>
            </div>
		</div>

        <div class="uk-form-row">
            <input type="submit" value="<?php echo lang('user:login_btn') ?>" name="btnLogin" class="uk-button">
        </div>

		<p><?php echo anchor('users/reset_pass', lang('user:reset_password_link'));?> | <?php echo anchor('register', lang('user:register_btn'));?></p>

		<?php echo form_close() ?>

	</div>
</div>