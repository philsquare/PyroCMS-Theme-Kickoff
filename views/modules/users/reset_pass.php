<h1><?php echo lang('user:reset_password_title');?></h1>

<div class="uk-grid">
	<div class="uk-width-1-1">

		<?php if(!empty($error_string)):?>
			<div class="uk-alert uk-alert-danger">
				<?php echo $error_string;?>
			</div>
		<?php endif;?>

		<?php if(!empty($success_string)): ?>
			<div class="uk-alert uk-alert-success">
				<?php echo $success_string ?>
			</div>
		<?php else: ?>

			<?php echo form_open('users/reset_pass', array('id'=>'reset-pass', 'class' => 'uk-form uk-form-stacked')) ?>

			<div class="uk-form-row">
				<label for="email" class="uk-form-label"><?php echo lang('user:reset_instructions') ?></label>
                <div class="uk-form-controls">
                    <input type="text" name="email" maxlength="100" value="<?php echo set_value('email') ?>" class="uk-form-width-medium">
                </div>
			</div>

            <div class="uk-form-row">
                <?php echo form_submit('', lang('user:reset_pass_btn'), 'class="uk-button"') ?>
            </div>

			<?php echo form_close() ?>

		<?php endif ?>

	</div>
</div>