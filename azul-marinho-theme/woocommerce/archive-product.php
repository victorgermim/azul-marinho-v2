<?php
defined( 'ABSPATH' ) || exit;

get_header();
?>

<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area tg-motion-effects breadcrumb-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title"><?php woocommerce_page_title(); ?></h2>
                        <nav aria-label="breadcrumb">
                            <?php woocommerce_breadcrumb(); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- shop-area -->
    <section class="shop-area shop-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/shop_bg.jpg">
        <div class="container custom-container-five">
            <div class="shop-inner-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <?php if ( woocommerce_product_loop() ) : ?>
                            <div class="shop-top-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="shop-showing-result">
                                            <?php woocommerce_result_count(); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="shop-ordering">
                                            <?php woocommerce_catalog_ordering(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="shop-item-wrap">
                                <div class="row justify-content-center">
                                    <?php
                                    if ( wc_get_loop_prop( 'total' ) ) {
                                        while ( have_posts() ) {
                                            the_post();
                                            /**
                                             * Hook: woocommerce_shop_loop.
                                             */
                                            do_action( 'woocommerce_shop_loop' );
                                            wc_get_template_part( 'content', 'product' );
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            
                            <div class="pagination-wrap">
                                <?php
                                    /**
                                     * Hook: woocommerce_after_shop_loop.
                                     *
                                     * @hooked woocommerce_pagination - 10
                                     */
                                    do_action( 'woocommerce_after_shop_loop' );
                                ?>
                            </div>
                        <?php else : ?>
                            <?php
                                /**
                                 * Hook: woocommerce_no_products_found.
                                 *
                                 * @hooked wc_no_products_found - 10
                                 */
                                do_action( 'woocommerce_no_products_found' );
                            ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-area-end -->

</main>

<?php
get_footer();
