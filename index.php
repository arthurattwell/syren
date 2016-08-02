<?php
/**
 * Blocking direct access to your theme PHP files for security
 */
    defined('ABSPATH') or die("No script kiddies please!");

/**
 * Run the loop
 */
    
get_header();
get_sidebar();
?>

<?php if ( is_tag() ) {
    ?><div class="tag-archive-tags"><?php single_tag_title(''); ?></div><?php
} else {}
?>

<div class="posts"><?php
if (have_posts()) :
    while (have_posts()) :
        ?><div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php
        the_post();
        ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title( '<h2 class="post-title">', '</h2>' )?></a>
        <p class="post-tags"><?php the_tags( '', ' ', '' ); ?></p>
        <?php the_content(); ?>
        </div><!--.<?php post_class(); ?>-->
        <?php edit_post_link(); ?>
        <?php
    endwhile;
endif;
?></div><!--.post-->
<?php get_footer(); ?>