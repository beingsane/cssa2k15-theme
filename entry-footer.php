<footer class="entry-footer">
<span class="cat-links"><?php echo 'Categories: '; ?><?php the_category( ', ' ); ?></span>
<span class="tag-links"><?php the_tags(); ?></span>
<?php if ( comments_open() ) { 
echo '<span class="meta-sep">|</span> <span class="comments-link"><a href="' . get_comments_link() . '">' . sprintf('Comments') . '</a></span>';
} ?>
</footer> 