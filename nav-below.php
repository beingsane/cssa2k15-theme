<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
<nav id="nav-below" class="navigation" role="navigation">
<div class="nav-bottom" id="nav-previous"><?php next_posts_link(sprintf( __( '«' ), '<span class="meta-nav">&larr;</span>' ) ) ?></div>
<div class="nav-bottom" id="nav-next"><?php previous_posts_link(sprintf( __( '»' ), '<span class="meta-nav">&rarr;</span>' ) ) ?></div>
</nav>
<?php } ?>