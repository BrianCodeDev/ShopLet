<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>
<footer class="text-center text-lg-start">
  <!-- Section: Links -->
  <section>
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h2 class="text-uppercase fw-bold mb-4">
            ShopLet
          </h2>
          <p class="footer-intro">
          Welcome to our store.
          </p>
          <?php
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 1,
    'post_status'    => 'publish',
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    ?>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php while ($query->have_posts()) : $query->the_post();
                global $product;
                ?>
                <div class="swiper-slide">
                    <div class="product">
                        <a  class="footer-image"href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('shop_catalog');
                            } ?>
                        </a>

                        <span class="tag">
                            <?php
                            $terms = wp_get_post_terms($product->get_id(), 'product_cat');
                            foreach ($terms as $term) {
                                if ($term->name === 'top-sales') {
                                    echo esc_html($term->name);
                                    break;
                                }
                            }
                            ?>
                        </span>
                        <div class="product-display footer-product-display">
                    <div class="product-one">
                    <a href="<?php the_permalink(); ?>">BUY NOW</a>
                    </div>
                    <div class="product-two">
                    <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php
    wp_reset_postdata();
endif;
?>

        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase category-title fw-bold mb-4">General</h6>
          <p><a href="#">Home</a></p>
          <p><a href="#">Products</a></p>
          <p><a href="#">About</a></p>
          <p><a href="#">Contact</a></p>
          <p><a href="#">Save List</a></p>
          <p><a href="#">Site Map</a></p>
          <p><a href="#">Privacy & Policy</a></p>
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase category-title fw-bold mb-4">Market</h6>
          <p><a href="#">Jackets</a></p>
          <p><a href="#">Shirts</a></p>
          <p><a href="#">Shoes</a></p>
          <p><a href="#">Pants</a></p>
          <p><a href="#">Socks</a></p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase category-title fw-bold mb-4">Extra Info</h6>
          <p><a href="#">Support</a></p>
          <p><a href="#">FAQ</a></p>
          <p><a href="#">Site Map</a></p>
          <p><a href="#">RSS</a></p>
          <p><a href="#">Blogss</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Links -->

  <!-- Copyright -->
  <div class="text-center copy-right p-4">
    <div class="copy-right-display container">
        <div class="copy-one">
            <ul>
                <li><a href="#">Site Map</a></li>
                <li><a href="#">RSS</a></li>
                <li><a href="#">Privacy & Policy</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
        <div class="copy-two">
            <a href="#">Shoplet | &copy; <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>. All Rights Reserved.</a>
        </div>
    </div>
  </div>
  <!-- Copyright -->
</footer>

<?php wp_footer(); ?>
</body>
</html>
