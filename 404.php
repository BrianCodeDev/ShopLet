<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

<div class="container">
    <div class="content-area">
        <article class="post-not-found">
            <header class="entry-header">
                <h1 class="entry-title"><?php esc_html_e('Oops! That page can’t be found.', 'ShopLet'); ?></h1>
            </header>

            <div class="entry-content">
                <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'ShopLet'); ?></p>
                
                <?php get_search_form(); ?>

                <p><?php esc_html_e('Or go back to the homepage:', 'ShopLet'); ?></p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="button"><?php esc_html_e('Back to Home', 'ShopLet'); ?></a>
            </div>
        </article>
    </div>
</div>

<?php get_footer(); ?>
