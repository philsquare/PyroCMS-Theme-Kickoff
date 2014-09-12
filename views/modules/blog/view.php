{{ post }}

<article class="uk-article">

    <h2 class="uk-article-title">{{ title }}</h2>

    <p class="uk-article-meta">Written by {{ created_by:display_name }} on {{ helper:date timestamp=created_on }}. Posted in <a href="{{ url:site }}blog/category/{{ category:slug }}">{{ category:title }}</a></p>

    <div class="preview">
        {{ body }}
    </div>

</article>

<div class="uk-alert">
    {{ if keywords }}
    <div class="keywords">
        Keywords:
        {{ keywords }}
        <a href="{{ url:site }}blog/tagged/{{ keyword }}">{{ keyword }}</a>
        {{ /keywords }}
    </div>
    {{ endif }}
</div>

{{ /post }}

<?php if (Settings::get('enable_comments')): ?>

    <div id="comments">

        <div id="existing-comments">
            <h4><?php echo lang('comments:title') ?></h4>
            <?php echo $this->comments->display() ?>
        </div>

        <?php if ($form_display): ?>
            <?php echo $this->comments->form() ?>
        <?php else: ?>
            <?php echo sprintf(lang('blog:disabled_after'), strtolower(lang('global:duration:'.str_replace(' ', '-', $post[0]['comments_enabled'])))) ?>
        <?php endif ?>
    </div>

<?php endif ?>
