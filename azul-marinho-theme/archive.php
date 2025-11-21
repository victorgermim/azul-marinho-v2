<?php get_header(); ?>

<main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area tg-motion-effects breadcrumb-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title"><?php the_archive_title(); ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Início</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_archive_title(); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- blog-area -->
    <section class="blog-area blog-bg fade-in-section" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/blog_bg.jpg">
        <div class="container custom-container-five">
            <div class="blog-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="blog-item">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="blog-thumb">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                                    </div>
                                <?php endif; ?>
                                <div class="blog-content">
                                    <div class="blog-meta-two">
                                        <ul class="list-wrap">
                                            <li><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></li>
                                            <li><a href="<?php the_permalink(); ?>"><i class="far fa-comment-alt"></i>Comentários (<?php echo get_comments_number(); ?>)</a></li>
                                            <?php 
                                            $categories = get_the_category();
                                            if ( ! empty( $categories ) ) {
                                                echo '<li><a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '"><i class="far fa-bookmark"></i>' . esc_html( $categories[0]->name ) . '</a></li>';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <p><?php echo get_the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="link-btn">Leia mais<i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        
                        <div class="pagination-wrap">
                            <?php
                            the_posts_pagination( array(
                                'mid_size'  => 2,
                                'prev_text' => '<i class="fas fa-angle-left"></i>',
                                'next_text' => '<i class="fas fa-angle-right"></i>',
                            ) );
                            ?>
                        </div>
                        
                        <?php else : ?>
                            <p>Nenhum post encontrado.</p>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->

</main>

<?php get_footer(); ?>
