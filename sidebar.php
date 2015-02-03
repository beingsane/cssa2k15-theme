<aside id="sidebar" role="complementary">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<ul class="xoxo">
<?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
<li id="categories"><h2>Categories</h2>
	<ul>
<?php wp_list_cats(); ?>
	</ul>
</li>
<?php get_links_list(); ?>
</ul>
</div>
<?php endif; ?>
</aside>