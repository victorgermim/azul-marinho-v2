<?php get_header(); ?>

<main>
    <section class="blog-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="blog-post-item mb-50">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="blog-post-thumb">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                                    </div>
                                <?php endif; ?>
                                <div class="blog-post-content">
                                    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li><i class="fas fa-user"></i><?php the_author(); ?></li>
                                            <li><i class="fas fa-calendar-alt"></i><?php echo get_the_date(); ?></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="btn">Ler Mais</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        
                        <div class="pagination-wrap">
                            <?php
                            the_posts_pagination( array(
                                'mid_size'  => 2,
                                'prev_text' => __( 'Anterior', 'azul-marinho' ),
                                'next_text' => __( 'Próximo', 'azul-marinho' ),
                            ) );
                            ?>
                        </div>

                    <?php else : ?>
                        <p><?php esc_html_e( 'Nenhum conteúdo encontrado.', 'azul-marinho' ); ?></p>
                    <?php endif; ?>
                </div>
                
                <div class="col-lg-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
