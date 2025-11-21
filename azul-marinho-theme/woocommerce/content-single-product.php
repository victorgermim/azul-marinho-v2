<?php
defined( 'ABSPATH' ) || exit;

global $product;
?>

<!-- shop-details-area -->
<section class="shop-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="shop-details-images-wrap">
                    <?php
                    /**
                     * Hook: woocommerce_before_single_product_summary.
                     *
                     * @hooked woocommerce_show_product_images - 20
                     */
                    do_action( 'woocommerce_before_single_product_summary' );
                    ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shop-details-content">
                    <h2 class="title"><?php the_title(); ?></h2>
                    <div class="review-wrap">
                        <div class="rating">
                            <?php 
                            $rating_count = $product->get_rating_count();
                            $average = $product->get_average_rating();
                            echo wc_get_rating_html( $average, $rating_count ); 
                            ?>
                        </div>
                        <span>(<?php echo $rating_count; ?> avaliações de clientes)</span>
                    </div>
                    <h3 class="price"><?php echo $product->get_price_html(); ?> <span>- <?php echo $product->is_in_stock() ? 'Em estoque' : 'Esgotado'; ?></span></h3>
                    
                    <div class="product-count-wrap">
                        <!-- Countdown placeholder if needed -->
                    </div>
                    
                    <p><?php echo apply_filters( 'woocommerce_short_description', $product->get_short_description() ); ?></p>
                    
                    <div class="shop-details-qty">
                        <div class="shop-details-qty-inner">
                            <?php woocommerce_template_single_add_to_cart(); ?>
                        </div>
                    </div>
                    
                    <div class="sd-sku">
                        <span class="title">SKU:</span>
                        <a href="#"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></a>
                    </div>
                    <div class="sd-category">
                        <span class="title">CATEGORIA:</span>
                        <?php echo wc_get_product_category_list( $product->get_id(), ', ', '<ul class="list-wrap"><li>', '</li></ul>' ); ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="product-desc-wrap">
                    <ul class="nav nav-tabs" id="descriptionTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description-tab-pane" type="button" role="tab" aria-controls="description-tab-pane" aria-selected="true">Descrição</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane" aria-selected="false">Avaliações (<?php echo $product->get_review_count(); ?>)</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="descriptionTabContent">
                        <div class="tab-pane fade show active" id="description-tab-pane" role="tabpanel" aria-labelledby="description-tab" tabindex="0">
                            <div class="product-description-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab" tabindex="0">
                            <div class="product-desc-review">
                                <?php comments_template(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- shop-details-area-end -->

<!-- related-product-area -->
<section class="related-product-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-50">
                    <span class="sub-title">Loja Azul Marinho</span>
                    <h2 class="title">Produtos Relacionados</h2>
                    <div class="title-shape" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/images/title_shape.png"></div>
                </div>
            </div>
        </div>
        <div class="product-item-wrap-three">
            <?php woocommerce_output_related_products(); ?>
        </div>
    </div>
</section>
<!-- related-product-area-end -->
