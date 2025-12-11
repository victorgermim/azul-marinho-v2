        <!-- footer-area -->
        <footer>
            <div class="footer-area">
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center mb-4">
                                <div class="footer-logos">
                                    <?php 
                                    $logo1 = get_theme_mod( 'footer_logo_1' );
                                    $logo2 = get_theme_mod( 'footer_logo_2' );
                                    
                                    if ( $logo1 ) {
                                        echo '<img src="' . esc_url( $logo1 ) . '" alt="Logo Principal" style="max-height: 80px; filter: brightness(0) invert(1); margin-right: 30px;">';
                                    } else {
                                        echo '<img src="' . get_template_directory_uri() . '/assets/img/logo/logo-blue.png" alt="Azul Marinho" style="max-height: 80px; filter: brightness(0) invert(1); margin-right: 30px;">';
                                    }

                                    if ( $logo2 ) {
                                        echo '<img src="' . esc_url( $logo2 ) . '" alt="Logo Parceiro" style="max-height: 80px;">';
                                    } else {
                                        echo '<img src="' . get_template_directory_uri() . '/assets/img/logo/logo-premier.png" alt="Premier" style="max-height: 80px;">';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center mb-3">
                                <div class="footer-links-bottom">
                                    <a href="<?php echo home_url('/politica-de-privacidade'); ?>">Política de Privacidade</a>
                                    <a href="<?php echo home_url('/termos-de-uso'); ?>">Termos de Uso</a>
                                    <a href="<?php echo home_url('/seja-nosso-cliente'); ?>">Seja nosso Cliente</a>
                                    <a href="<?php echo home_url('/sou-varejista'); ?>">Sou varejista</a>
                                    <a href="<?php echo home_url('/contato'); ?>">Fale Conosco</a>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center mb-3">
                                <div class="footer-social-bottom">
                                    <?php 
                                    $social_networks = array( 'facebook', 'twitter', 'instagram', 'linkedin', 'youtube' );
                                    foreach ( $social_networks as $network ) {
                                        $link = get_theme_mod( "social_{$network}", '#' );
                                        if ( $link && $link !== '#' ) {
                                            echo '<a href="' . esc_url( $link ) . '"><i class="fab fa-' . esc_attr( $network ) . ( $network === 'facebook' ? '-f' : ( $network === 'linkedin' ? '-in' : '' ) ) . '"></i></a>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div class="copyright-text">
                                    <p>© <?php echo date('Y'); ?> - Todos os direitos reservados.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->

        <?php wp_footer(); ?>
    </body>
</html>
