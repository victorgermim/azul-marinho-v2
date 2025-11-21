<?php
defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div <?php wc_product_class( 'col-xl-3 col-lg-4 col-md-6', $product ); ?>>
    <div class="product-item-three inner-product-item">
        <div class="product-thumb-three">
            <a href="<?php the_permalink(); ?>">
                <?php echo $product->get_image(); ?>
            </a>
            <?php if ( $product->is_on_sale() ) : ?>
                <span class="batch">Oferta<i class="fas fa-star"></i></span>
            <?php elseif ( $product->is_featured() ) : ?>
                <span class="batch">Destaque<i class="fas fa-star"></i></span>
            <?php endif; ?>
        </div>
        <div class="product-content-three">
            <?php
            $terms = get_the_terms( $product->get_id(), 'product_cat' );
            if ( $terms && ! is_wp_error( $terms ) ) {
                $term = array_shift( $terms );
                echo '<a href="' . get_term_link( $term ) . '" class="tag">' . $term->name . '</a>';
            }
            ?>
            <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <h2 class="price"><?php echo $product->get_price_html(); ?></h2>
            <div class="product-cart-wrap">
                <?php woocommerce_template_loop_add_to_cart(); ?>
            </div>
        </div>
        <div class="product-shape-two">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 303 445" preserveAspectRatio="none">
                <path d="M319,3802H602c5.523,0,10,5.24,10,11.71l-10,421.58c0,6.47-4.477,11.71-10,11.71H329c-5.523,0-10-5.24-10-11.71l-10-421.58C309,3807.24,313.477,3802,319,3802Z" transform="translate(-309 -3802)" />
            </svg>
        </div>
    </div>
</div>
