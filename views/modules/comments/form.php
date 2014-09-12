<hr>

<?php echo form_open("comments/create/{$module}", 'role="form" id="create-comment" class="uk-form uk-form-stacked"') ?>

	<noscript><?php echo form_input('d0ntf1llth1s1n', '', 'style="display:none"') ?></noscript>

	<?php echo form_hidden('entry', $entry_hash) ?>

    <h4><?php echo lang('comments:your_comment') ?></h4>

	<?php if ( ! is_logged_in()): ?>

			<div class="form_name uk-form-row">
				<label for="name" class="uk-form-label"><?php echo lang('comments:name_label') ?><span class="required">*</span></label>
                <div class="uk-form-controls">
                    <input type="text" name="name" id="name" maxlength="40" class="uk-form-width-large" value="<?php echo $comment['name'] ?>">
                </div>
			</div>

			<div class="form_email uk-form-row">
				<label for="email" class="uk-form-label"><?php echo lang('global:email') ?><span class="required">*</span></label>
                <div class="uk-form-controls">
				    <input type="text" name="email" maxlength="40" class="uk-form-width-large" value="<?php echo $comment['email'] ?>">
                </div>
			</div>

			<div class="form_url uk-form-row">
				<label for="website" class="uk-form-label"><?php echo lang('comments:website_label') ?></label>
                <div class="uk-form-controls">
				    <input type="text" name="website" maxlength="40" class="uk-form-width-large" value="<?php echo $comment['website'] ?>">
                </div>
			</div>

	<?php endif ?>

	<div class="form_textarea uk-form-row">
		<label for="comment" class="uk-form-label"><?php echo lang('comments:message_label') ?><span class="required">*</span></label>
        <div class="uk-form-controls">
            <textarea name="comment" id="comment" class="width-full uk-form-width-large"><?php echo $comment['comment'] ?></textarea>
        </div>
	</div>

	<div class="form_submit uk-form-row">
		<?php echo form_submit('submit', lang('comments:send_label'), 'class="uk-button"') ?>
	</div>

	</fieldset>

<?php echo form_close() ?>