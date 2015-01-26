<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below-single' ); ?>
</section>
<!--<footer id="footer">
<?php // get_sidebar(); ?>
</footer>
<div class="darkband" id="darkband-footer"></div>-->
<?php get_footer(); ?>