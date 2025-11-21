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
                        <h2 class="title"><?php the_title(); ?></h2>
                        <nav aria-label="breadcrumb">
                            <?php woocommerce_breadcrumb(); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <?php
        while ( have_posts() ) :
            the_post();
            wc_get_template_part( 'content', 'single-product' );
        endwhile;
    ?>

</main>

<?php
get_footer();
