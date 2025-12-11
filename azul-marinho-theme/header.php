<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div class="loader">
                    <div class="loader-outter"></div>
                    <div class="loader-inner"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header class="transparent-header">
            <div class="header-top-wrap">
                <div class="container custom-container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-8">
                            <div class="header-top-left">
                                <ul class="list-wrap">
                                    <li class="header-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <?php echo esc_html( get_theme_mod( 'header_location', 'Atendimento em todo Brasil' ) ); ?>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:<?php echo esc_attr( get_theme_mod( 'header_email', 'contato@azulmarinho.com' ) ); ?>"><?php echo esc_html( get_theme_mod( 'header_email', 'contato@azulmarinho.com' ) ); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="header-top-right">
                                <div class="header-top-menu">
                                    <ul class="list-wrap">
                                        <li><a href="<?php echo home_url('/ajuda'); ?>">Ajuda</a></li>
                                        <li><a href="<?php echo home_url('/suporte'); ?>">Suporte</a></li>
                                        <li><a href="<?php echo home_url('/contato'); ?>">Contato</a></li>
                                    </ul>
                                </div>
                                <div class="header-top-social">
                                    <ul class="list-wrap">
                                        <?php 
                                        $social_networks = array( 'facebook', 'twitter', 'instagram', 'linkedin' );
                                        foreach ( $social_networks as $network ) {
                                            $link = get_theme_mod( "social_{$network}", '#' );
                                            if ( $link && $link !== '#' ) {
                                                echo '<li><a href="' . esc_url( $link ) . '"><i class="fab fa-' . esc_attr( $network ) . ( $network === 'facebook' ? '-f' : ( $network === 'linkedin' ? '-in' : '' ) ) . '"></i></a></li>';
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="menu-wrap">
                                <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                                <nav class="menu-nav">
                                    <div class="logo">
                                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-blue.png" alt="Logo"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <?php
                                        wp_nav_menu( array(
                                            'theme_location' => 'primary',
                                            'container'      => false,
                                            'menu_class'     => 'navigation',
                                            'fallback_cb'    => false, // We'll add the static menu below as fallback manually if needed, or just let user configure it.
                                        ) );
                                        ?>
                                        <!-- Static Menu Fallback (visible if no menu assigned) -->
                                        <?php if ( ! has_nav_menu( 'primary' ) ) : ?>
                                        <ul class="navigation">
                                            <li class="active"><a href="<?php echo home_url(); ?>">Início</a></li>
                                            <li><a href="<?php echo home_url('/sobre-nos'); ?>">Sobre Nós</a></li>
                                            <li class="active"><a href="<?php echo function_exists( 'wc_get_page_id' ) ? get_permalink( wc_get_page_id( 'shop' ) ) : home_url( '/loja' ); ?>">Produtos</a></li>
                                            <li class="menu-item-has-children"><a href="javascript:void(0);">Conteúdo</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?php echo home_url('/receitas'); ?>">Receitas</a></li>
                                                    <li><a href="<?php echo home_url('/artigos'); ?>">Artigos</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="<?php echo home_url('/contato'); ?>">Contato</a></li>
                                        </ul>
                                        <?php endif; ?>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul class="list-wrap">
                                            <li class="header-btn"><a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9]/', '', get_theme_mod( 'header_phone', '(11) 1234-5678' ) ) ); ?>" class="btn"><?php echo esc_html( get_theme_mod( 'header_phone', '(11) 1234-5678' ) ); ?></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo">
                                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-blue.png" alt="Azul Marinho Pescados"></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->

                        </div>
                    </div>
                </div>
            </div>

            <!-- header-search -->
            <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="search-wrap text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="search-form">
                                    <form action="<?php echo home_url( '/' ); ?>">
                                        <input type="text" name="s" placeholder="Digite o que procura...">
                                        <button class="search-btn"><i class="flaticon-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-backdrop"></div>
            <!-- header-search-end -->

        </header>
        <!-- header-area-end -->
