<h1>
	<?php echo ($this->current_user->id !== $_user->id) ?
					sprintf(lang('user:edit_title'), $_user->display_name) :
					lang('profile_edit') ?>
</h1>


	<?php if (validation_errors()):?>
	<div class="uk-alert uk-alert-danger">
		<?php echo validation_errors();?>
	</div>
	<?php endif;?>

	<?php echo form_open_multipart('', array('id'=>'user_edit', 'class' => 'uk-form uk-form-stacked'));?>

	<fieldset id="profile_fields">
		<legend><?php echo lang('user:details_section') ?></legend>
		
		<div class="uk-form-row">
			<label for="display_name" class="uk-form-label"><?php echo lang('profile_display_name') ?></label>
            <div class="uk-form-controls">
                <?php echo form_input(array('name' => 'display_name', 'id' => 'display_name', 'value' => set_value('display_name', $display_name), 'class' => "form-control")) ?>
            </div>
		</div>
		
		<div id="profile-fields">

			<?php foreach($profile_fields as $field): ?>
				<?php if($field['input']): ?>
					<div class="uk-form-row">
						<label for="<?php echo $field['field_slug'] ?>" class="uk-form-label">
							<?php echo (lang($field['field_name'])) ? lang($field['field_name']) : $field['field_name'];  ?>
							<?php if ($field['required']) echo '<span>*</span>' ?>
						</label>

						<?php if($field['instructions']) echo '<p class="instructions">'.$field['instructions'].'</p>' ?>

                        <div class="uk-form-controls">
                            <?php echo $field['input'] ?>
                        </div>

					</div>
				<?php endif ?>
			<?php endforeach ?>
			
		</div>

	</fieldset>

	<div class="uk-form-row">
		<label for="email" class="uk-form-label"><?php echo lang('global:email') ?></label>
        <div class="uk-form-controls">
		    <?php echo form_input('email', $_user->email, 'class="form-control"') ?>
        </div>
	</div>
	
	<div class="uk-form-row">
		<label for="password" class="uk-form-label"><?php echo lang('global:password') ?></label>
        <div class="uk-form-controls">
            <?php echo form_password('password', '', 'autocomplete="off" class="form-control"') ?>
        </div>
	</div>

	<?php if (Settings::get('api_enabled') and Settings::get('api_user_keys')): ?>
		
	<script>
	jQuery(function($) {
		
		$('input#generate_api_key').click(function(){
			
			var url = "<?php echo site_url('api/ajax/generate_key') ?>",
				$button = $(this);
			
			$.post(url, function(data) {
				$button.prop('disabled', true);
				$('span#api_key').text(data.api_key).parent('li').show();
			}, 'json');
			
		});
		
	});
	</script>
		
	<fieldset>
		<legend><?php echo lang('profile_api_section') ?></legend>
		
		<ul>
			<li <?php $api_key or print('style="display:none"') ?>><?php echo sprintf(lang('api:key_message'), '<span id="api_key">'.$api_key.'</span>') ?></li>
			<li>
				<input type="button" id="generate_api_key" value="<?php echo lang('api:generate_key') ?>">
			</li>
		</ul>
	
	</fieldset>
	<?php endif ?>

<div class="uk-form-row">
    <?php echo form_submit('', lang('profile_save_btn'), 'class="uk-button"') ?>
</div>
	<?php echo form_close() ?>
</div>