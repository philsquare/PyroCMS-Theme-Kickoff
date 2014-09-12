<h1><?php echo lang('user:login_header') ?></h1>

<div class="uk-grid">
	<div class="uk-width-1-1">

		<div class="uk-alert uk-alert-success">
			<?php echo $this->lang->line('user:activated_message') ?>
		</div>

		<?php echo form_open('users/login', array('id'=>'login', 'class' => 'uk-form uk-form-stacked')) ?>

		<div class="uk-form-row">
			<label for="email" class="uk-form-label"><?php echo lang('global:email') ?></label>
            <div class="uk-form-controls">
                <?php echo form_input('email', '', 'class="uk-form-width-large"') ?>
            </div>
		</div>

		<div class="uk-form-row">
			<label for="password" class="uk-form-label"><?php echo lang('global:password') ?></label>
            <div class="uk-form-controls">
                <?php echo form_password('password', '', 'class="uk-form-width-large"') ?>
            </div>
		</div>

        <div class="uk-form-row">
            <input type="submit" value="<?php echo lang('user:login_btn') ?>" name="btnLogin" class="uk-button">
        </div>

		<?php echo form_close() ?>

	</div>
</div>