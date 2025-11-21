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

    <!-- blog-details-area -->
    <section class="blog-area blog-details-area blog-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/blog_bg.jpg">
        <div class="container custom-container-five">
            <div class="blog-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="blog-details-wrap">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="blog-thumb">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="blog-content blog-details-content">
                                    <div class="blog-meta-two">
                                        <ul class="list-wrap">
                                            <li><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></li>
                                            <li><i class="far fa-calendar-alt"></i><?php echo get_the_date(); ?></li>
                                            <li><i class="far fa-comment-alt"></i><?php comments_number( '0 Comentários', '1 Comentário', '% Comentários' ); ?></li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                                    
                                    <div class="blog-details-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-md-7">
                                                <div class="tg-post-tags">
                                                    <h5 class="tags-title">Tags :</h5>
                                                    <?php the_tags( '<ul class="list-wrap"><li>', '</li><li>', '</li></ul>' ); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="blog-post-social">
                                                    <h5 class="social-title">Compartilhar :</h5>
                                                    <ul class="list-wrap">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Comments -->
                            <div class="comments-wrap">
                                <?php 
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                                ?>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->
</main>

<?php get_footer(); ?>
