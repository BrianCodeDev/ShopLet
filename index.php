<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<section class="hero-content">
	<div class="hero-display">
    <div class="hero-container container">
	<div class="hero-one">
			<h1>Welcome to our store</h1>
			<p>Welcome to our online store where we sell anything you can imagine.</p>
			<ul>
				<li>Buy</li>
				<li>Sell</li>
				<li>Browse</li>
				<li>Secure products</li>
				<li>Value scaling</li>
				<li>Tracking</li>
			</ul>
			<div class="hero-buttons">
				<button>Shop Now</button>
				<button>Start Selling</button>
			</div>
		</div>
		<div class="hero-two">
			<img src="http://shoplet.local/wp-content/uploads/2025/03/9587556.png" alt="hero-image">
		</div>
	</div>
	</div>
</section>
<section class="introduction-content">
 <div class="intro-display">
	<div class="intro-one">
	<h1>Welcome to the introduction</h1>
	</div>
	<div class="intro-two">
		<hr>
	</div>
 </div>
 <div class="intro-paragraph">
	<p>Welcome to our store. We are a trusted brand with millions of people buying our products we sell.
If you want to start buying or selling please sign up or login now!. If you need help with any of our
products you can contact today at www.store.com</p>
 </div>
</section>
<?php
get_footer();
