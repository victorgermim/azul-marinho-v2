<?php get_header(); ?>

<main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area tg-motion-effects breadcrumb-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Início</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- page-area -->
    <section class="blog-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="blog-details-wrap">
                            <div class="blog-content blog-details-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- page-area-end -->
</main>

<?php get_footer(); ?>
