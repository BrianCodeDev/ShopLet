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
                        <h1 class="entry-title"><?php the_title(); ?></h1>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="page-thumbnail">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <?php
                    // If the page has children, list them
                    $child_pages = get_pages(array('child_of' => get_the_ID()));
                    if ($child_pages) :
                    ?>
                        <ul class="child-pages">
                            <?php foreach ($child_pages as $page) : ?>
                                <li><a href="<?php echo get_permalink($page->ID); ?>"><?php echo $page->post_title; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </article>
        <?php
            endwhile;
        endif;
        ?>
    </div>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
