<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

<div class="container">
    <div class="content-area">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="post-title"><?php the_title(); ?></h1>

                        <div class="post-meta">
                            <span><?php esc_html_e('Posted on', 'ShopLet'); ?> <?php the_time('F j, Y'); ?> <?php esc_html_e('by', 'ShopLet'); ?> <?php the_author(); ?></span>
                        </div>
                    </header>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>

                    <div class="post-navigation">
                        <?php
                        // Display previous and next post navigation
                        the_post_navigation(array(
                            'prev_text' => '<span class="screen-reader-text">' . __('Previous Post', 'ShopLet') . '</span><span aria-hidden="true">←</span> <span class="post-title">%title</span>',
                            'next_text' => '<span class="screen-reader-text">' . __('Next Post', 'ShopLet') . '</span><span aria-hidden="true">→</span> <span class="post-title">%title</span>',
                        ));
                        ?>
                    </div>

                    <?php
                    // If comments are open or we have at least one comment, load the comment template
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                </article>
        <?php
            endwhile;
        endif;
        ?>
    </div>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
