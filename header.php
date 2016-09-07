<?php
/**
 * Blocking direct access to theme PHP files for security
 */
    defined('ABSPATH') or die("No script kiddies please!");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
xmlns:fb="http://ogp.me/ns/fb#"
<?php language_attributes(); ?>
>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(''); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>

<body>

    <div id="wrapper">

        <div id="header">
            <h1 class="sitename">
                <a href="<?php echo get_bloginfo( 'url' ); ?>" title="<?php echo get_bloginfo( 'name' ); ?>">
                    <?php echo get_bloginfo( 'name' ); ?>
                </a>
            </h1>
            <p class="tagline">
                <?php echo get_bloginfo( 'description' ); ?>
            </p>
            
            <?php get_search_form() ?>
            
        </div><!--#header -->

        <div class="content">