<h2>Archives for {{ month_year }}</h2>

{{ if posts }}

{{ posts }}

<article class="uk-article">

    <h2 class="uk-article-title"><a href="{{ url }}">{{ title }}</a></h2>

    <p class="uk-article-meta">Written by {{ created_by:display_name }} on {{ helper:date timestamp=created_on }}. Posted in <a href="{{ url:site }}blog/category/{{ category:slug }}">{{ category:title }}</a></p>

    <div class="preview">
        {{ preview }}
    </div>

    <p><a href="{{ url }}" class="btn btn-default btn-xs">{{ helper:lang line="blog:read_more_label" }}</a></p>

</article>

{{ /posts }}

{{ pagination }}

{{ else }}

{{ helper:lang line="blog:currently_no_posts" }}

{{ endif }}