        <!-- footer-area -->
        <footer>
            <div class="footer-area">
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center mb-4">
                                <div class="footer-logos">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-blue.png" alt="Azul Marinho" style="max-height: 80px; filter: brightness(0) invert(1); margin-right: 30px;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-premier.png" alt="Premier" style="max-height: 80px;">
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
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
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
