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

<div class="page-archive-name">
<?php if ( is_tag() ) {
    ?><div class="tag-archive-tags"><?php single_tag_title(''); ?></div><?php
} else {}
?>

<?php if ( is_search() ) {
    ?><div class="search-query"><?php echo get_search_query(); ?></div><?php
} else {}
?>
</div><!--.page-archive-name-->

<div class="posts"><?php
if (have_posts()) :
    while (have_posts()) :
        ?><div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php
        the_post();
        ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title( '<h2 class="post-title">', '</h2>' )?></a>
        <p class="post-tags"><?php the_tags( '', ' ', '' ); ?></p><?php edit_post_link( '&#9998;'); ?>
        <?php the_content(); ?>
        </div><!--.<?php post_class(); ?>-->
        <?php
    endwhile;
endif;
?></div><!--.post-->

<?php get_footer(); ?>
