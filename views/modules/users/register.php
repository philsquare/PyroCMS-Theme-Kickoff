<h1><?php echo lang('user:register_header') ?></h1>

<div class="uk-grid">
	<div class="uk-width-1-1">

<?php if ( ! empty($error_string)):?>
<!-- Woops... -->
<div class="uk-alert uk-alert-danger">
	<?php echo $error_string;?>
</div>
<?php endif;?>

<?php echo form_open('register', array('id' => 'register', 'class' => 'uk-form uk-form-stacked'), 'role="form"') ?>

	
	<?php if ( ! Settings::get('auto_username')): ?>
	<div class="uk-form-row">
		<label for="username" class="uk-form-label"><?php echo lang('user:username') ?></label>
        <div class="uk-form-controls">
            <input type="text" name="username" maxlength="100" value="<?php echo $_user->username ?>" class="uk-form-width-medium">
        </div>
	</div>
	<?php endif ?>
	
	<div class="uk-form-row">
		<label for="email" class="uk-form-label"><?php echo lang('global:email') ?></label>
        <div class="uk-form-controls">
            <input type="text" name="email" maxlength="100" value="<?php echo $_user->email ?>" class="uk-form-width-medium">
        </div>
		<?php echo form_input('d0ntf1llth1s1n', ' ', 'class="default-form" style="display:none"') ?>
	</div>
	
	<div class="uk-form-row">
		<label for="password" class="uk-form-label"><?php echo lang('global:password') ?></label>
        <div class="uk-form-controls">
            <input type="password" name="password" maxlength="100" class="uk-form-width-medium">
        </div>
	</div>


        <?php foreach ($profile_fields as $field): ?>

            <?php if ($field['required'] and $field['field_slug'] != 'display_name'): ?>
                <div class="uk-form-row">
                    <label for="<?php echo $field['field_slug'] ?>"
                           class="uk-form-label"><?php echo (lang($field['field_name'])) ? lang($field['field_name']) : $field['field_name']; ?></label>

                    <div class="uk-form-controls">
                        <?php echo $field['input'] ?>
                    </div>
                </div>
            <?php endif; ?>

        <?php endforeach; ?>


    <div class="uk-form-row">
        <?php echo form_submit('btnSubmit', lang('user:register_btn'), 'class="uk-button"') ?>
    </div>

<?php echo form_close() ?>

</div>
</div>