<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>

<aside id="secondary" class="widget-area">
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else : ?>
        <p><?php esc_html_e('No widgets added yet. Go to the Widgets section to add widgets!', 'shoplet'); ?></p>
    <?php endif; ?>
</aside>
