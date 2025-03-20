<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

<section class="hero">
     <div class="container hero-display">
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
        <img src="http://shoplet.local/wp-content/uploads/2025/03/Mask-group-17.png" alt="hero-image">
     </div>
     </div>
    </section>
    <section class="introduction-content container">
    <div class="intro-display">
        <div class="intro-one">
            <h1>Welcome to the introduction</h1>
        </div>
        <div class="intro-two">
            <hr>
        </div>
    </div>
    <p>Welcome to our store. We are a trusted brand with millions of people buying our products we sell.
If you want to start buying or selling please sign up or login now!. If you need help with any of our
products you can contact today at www.store.com</p>
<div class="about-intro">
    <div class="about-one">
        <h1>We take pride in our customers shopping
        experience!</h1>
        <h2>We follow a certain guide for our customers</h2>
        <ul>
            <li>Security</li>
            <li>Easy Search</li>
            <li>Support</li>
            <li>Selling checks</li>
        </ul>
    </div>
    <div class="about-two">
        <img src="http://shoplet.local/wp-content/uploads/2025/03/Mask-group-18.png" alt="about-image" width="700px">
    </div>
</div>
    </section>
<section class="store-content container">
<div class="store-display">
        <div class="store-one">
            <h1>Top products we are selling for you</h1>
        </div>
        <div class="store-two">
            <hr>
        </div>
    </div>
    <?php
$args = array(
    'post_type' => 'product',
    'posts_per_page' => 12,
    'post_status' => 'publish',
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) :
    echo '<div class="product-grid">';
    while ( $query->have_posts() ) : $query->the_post();
        global $product;
        ?>
        <div class="product">
            <a href="<?php the_permalink(); ?>">
                <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'shop_catalog' );
                }
                
                ?>

                <span class="tag">
    <?php
        $terms = wp_get_post_terms( $product->get_id(), 'product_cat' );
        foreach ( $terms as $term ) {
            if ( $term->name === 'top-sales' ) {
                echo $term->name;
                break;
            }
        }
    ?>
</span>
<div class="product-display">
                    <div class="product-one">
                    <a href="<?php the_permalink(); ?>">BUY NOW</a>
                    </div>
                    <div class="product-two">
                    <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
            </a>
        </div>
        <?php
    endwhile;
    echo '</div>';
    wp_reset_postdata();
else :
    echo 'No products found';
endif;
?>


</section>

<?php get_footer(); ?>
