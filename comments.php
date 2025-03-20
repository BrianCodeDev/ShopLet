<?php
if (have_comments()) :
    ?>
    <h2 class="comments-title">
        <?php
        printf(
            esc_html(_nx('One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'shoplet')),
            number_format_i18n(get_comments_number())
        );
        ?>
    </h2>

    <ol class="comment-list">
        <?php
        wp_list_comments(array(
            'style'       => 'ol',
            'short_ping'  => true,
            'avatar_size' => 64,
        ));
        ?>
    </ol>

    <!-- Comment Pagination -->
    <div class="comment-pagination">
        <?php
        paginate_comments_links(array(
            'prev_text' => '&laquo; ' . __('Previous', 'shoplet'),
            'next_text' => __('Next', 'shoplet') . ' &raquo;',
        ));
        ?>
    </div>

<?php endif; ?>
