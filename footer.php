<?php
/**
 * Blocking direct access to your theme PHP files for security
 */
    defined('ABSPATH') or die("No script kiddies please!");
?>
        <div id="after-content"></div><!--#after-content-->
        </div><!--.content-->

        <div id="footer">

            <div class="footer-nav">
                <a href="<?php echo get_bloginfo( 'url' ); ?>" title="<?php echo get_bloginfo( 'name' ); ?>">
                    <?php echo get_bloginfo( 'name' ); ?>
                </a>
            </div>

            <div class="pagination pagination-bottom">
                <div class="pagination-newer" title="Newer posts"><?php previous_posts_link( '↖' ); ?></div>
                <div class="pagination-older" title="Older posts"><?php next_posts_link( '↘' ); ?></div>
            </div>

        </div><!--#footer -->

    </div><!--#wrapper-->

<?php wp_footer(); ?>
</body>
</html>
