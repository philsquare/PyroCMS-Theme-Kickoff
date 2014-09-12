<?php if ($comments): ?>
	
	<?php foreach ($comments as $item): ?>
		
		<div class="uk-panel uk-panel-box uk-margin-bottom">
            <?php echo gravatar($item->user_email, 60) ?>
            <h4><?php echo $item->user_name ?></h4>
            <p><?php echo format_date($item->created_on) ?></p>

            <?php if (Settings::get('comment_markdown') and $item->parsed): ?>
                <?php echo $item->parsed ?>
            <?php else: ?>
                <p><?php echo nl2br($item->comment) ?></p>
            <?php endif ?>
		</div>

	<?php endforeach ?>
	
<?php else: ?>
	<p><?php echo lang('comments:no_comments') ?></p>
<?php endif ?>