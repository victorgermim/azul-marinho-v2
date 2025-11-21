<div class="blog-sidebar">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php else : ?>
        <!-- Fallback Static Widgets if no widgets are active -->
        <div class="blog-widget">
            <h4 class="sw-title">Busca</h4>
            <div class="sidebar-search">
                <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                    <input type="text" name="s" placeholder="Buscar...">
                    <button type="submit"><i class="flaticon-search"></i></button>
                </form>
            </div>
        </div>
        <div class="blog-widget">
            <h4 class="sw-title">Categorias</h4>
            <div class="sidebar-cat-list">
                <ul class="list-wrap">
                    <?php
                    $categories = get_categories();
                    foreach($categories as $category) {
                        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . ' <span>(' . $category->count . ')</span></a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="blog-widget">
            <h4 class="sw-title">Posts Recentes</h4>
            <div class="rc-post-list">
                <?php
                $recent_posts = new WP_Query( array( 'posts_per_page' => 3 ) );
                if ( $recent_posts->have_posts() ) :
                    while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
                ?>
                <div class="rc-post-item">
                    <?php if ( has_post_thumbnail() ) : ?>
                    <div class="thumb">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
                    </div>
                    <?php endif; ?>
                    <div class="content">
                        <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <span class="date"><i class="fas fa-calendar-alt"></i><?php echo get_the_date(); ?></span>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    <?php endif; ?>
</div>
