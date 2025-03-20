<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<nav class="navbar navbar-expand-lg">
        <div class="container">
            <i class="fas fa-tshirt me-3"></i>
            <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'shoplet' ); ?>">
                <i class="fa-solid fa-bars" style="font-size: 30px;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0 custom-navbar', // Add a custom class here
                        'fallback_cb' => 'my_custom_menu_fallback', // Custom fallback function
                        'depth' => 2
                    ));
                ?>
                <div class="d-flex">
                    <?php if (!is_user_logged_in()) : ?>
                        <a class="nav-button" href="<?php echo wp_registration_url(); ?>"><?php esc_html_e( 'Register', 'shoplet' ); ?></a>
                        <a class="nav-button" href="<?php echo wp_login_url(); ?>"><?php esc_html_e( 'Login', 'shoplet' ); ?></a>
                    <?php else : ?>
                        <a class="nav-button" href="<?php echo wp_logout_url(home_url()); ?>"><?php esc_html_e( 'Sign Out', 'shoplet' ); ?></a>
                    <?php endif; ?>
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
            </div>
        </div>
    </nav>

<?php
// Fallback function for wp_nav_menu
function my_custom_menu_fallback() {
    echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0">';
    // Add custom menu items here
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url( home_url() ) . '">' . esc_html__( 'Home', 'shoplet' ) . '</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url( home_url( '/about' ) ) . '">' . esc_html__( 'About', 'shoplet' ) . '</a></li>';
    // Add more items as needed
    echo '</ul>';
}
?>

<main class="site-content">
