<?php
/*
Template Name: Sobre Nós
*/
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

    <!-- choose-area -->
    <section class="choose-area choose-area-two choose-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/choose_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">Sobre a Azul Marinho</span>
                            <h2 class="title">Confiança e sabor em cada produto</h2>
                        <div class="title-shape" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/images/title_shape.png"></div>
                    </div>
                </div>
            </div>
            <div class="choose-item-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="choose-item">
                            <div class="choose-shape">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 408 325"  preserveAspectRatio="none">
                                    <path d="M330.5,2316h368a20,20,0,0,1,20,20l-29,285a20,20,0,0,1-20,20h-299a20,20,0,0,1-20-20l-40-285A20,20,0,0,1,330.5,2316Z" transform="translate(-310.5 -2316)" />
                                </svg>
                            </div>
                            <div class="choose-icon">
                                <i class="flaticon-online-shop"></i>
                            </div>
                            <div class="choose-content">
                                <div class="line" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/images/line.png"></div>
                                <h2 class="title">Qualidade ao alcance de todos</h2>
                                <p>Experimente a qualidade e o sabor de nossos produtos, fabricados com os mais rigorosos padrões de segurança alimentar.</p>
                                <a href="<?php echo wc_get_page_permalink( 'shop' ); ?>" class="link-btn">Ver catálogo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="choose-item">
                            <div class="choose-shape">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 408 325"  preserveAspectRatio="none">
                                    <path d="M330.5,2316h368a20,20,0,0,1,20,20l-29,285a20,20,0,0,1-20,20h-299a20,20,0,0,1-20-20l-40-285A20,20,0,0,1,330.5,2316Z" transform="translate(-310.5 -2316)" />
                                </svg>
                            </div>
                            <div class="choose-icon">
                                <i class="flaticon-chicken-1"></i>
                            </div>
                            <div class="choose-content">
                                <div class="line" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/images/line.png"></div>
                                <h2 class="title">Seleção cuidadosa</h2>
                                <p>Nossos produtos são cuidadosamente selecionados para garantir proteínas saudáveis todos os dias na sua mesa.</p>
                                <a href="<?php echo home_url('/contato'); ?>" class="link-btn">Fale conosco</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="choose-item">
                            <div class="choose-shape">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 408 325"  preserveAspectRatio="none">
                                    <path d="M330.5,2316h368a20,20,0,0,1,20,20l-29,285a20,20,0,0,1-20,20h-299a20,20,0,0,1-20-20l-40-285A20,20,0,0,1,330.5,2316Z" transform="translate(-310.5 -2316)" />
                                </svg>
                            </div>
                            <div class="choose-icon">
                                <i class="flaticon-chicken-wings"></i>
                            </div>
                            <div class="choose-content">
                                <div class="line" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/images/line.png"></div>
                                <h2 class="title">Segurança que você merece</h2>
                                <p>Garantimos que sua mesa receba produtos com a segurança que você e sua família merecem.</p>
                                <a href="<?php echo home_url('/contato'); ?>" class="link-btn">Solicite orçamento</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-area-end -->

    <!-- team-area -->
    <section class="team-area team-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/team_bg.jpg">
        <div class="container custom-container-two">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="team-content-wrap">
                        <div class="section-title white-title mb-50">
                            <span class="sub-title">Nosso Portfólio</span>
                            <h2 class="title">Principais Categorias</h2>
                        </div>
                        <p>Confiança e sabor em cada produto. <span>Proteínas saudáveis e saborosas</span> cuidadosamente selecionadas para sua mesa.</p>
                        <a href="<?php echo wc_get_page_permalink( 'shop' ); ?>" class="btn">Ver Catálogo Completo</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team-item-wrap">
                        <div class="row justify-content-center">
                            <!-- Dynamic Categories could go here, hardcoded for now to match HTML -->
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="team-item">
                                    <div class="team-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_img01.jpg" alt="Salmão">
                                        <a href="<?php echo wc_get_page_permalink( 'shop' ); ?>?cat=salmao" class="link-btn"><i class="fas fa-plus"></i></a>
                                    </div>
                                    <div class="team-content">
                                        <div class="line" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/images/line.png"></div>
                                        <h4 class="title"><a href="<?php echo wc_get_page_permalink( 'shop' ); ?>?cat=salmao">Salmão</a></h4>
                                        <span>Super macio e nutritivo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="team-item">
                                    <div class="team-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_img02.jpg" alt="Tilápia">
                                        <a href="<?php echo wc_get_page_permalink( 'shop' ); ?>?cat=tilapia" class="link-btn"><i class="fas fa-plus"></i></a>
                                    </div>
                                    <div class="team-content">
                                        <div class="line" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/images/line.png"></div>
                                        <h4 class="title"><a href="<?php echo wc_get_page_permalink( 'shop' ); ?>?cat=tilapia">Tilápia</a></h4>
                                        <span>Leve e sem espinhas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="team-item">
                                    <div class="team-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team_img03.jpg" alt="Camarão">
                                        <a href="<?php echo wc_get_page_permalink( 'shop' ); ?>?cat=camarao" class="link-btn"><i class="fas fa-plus"></i></a>
                                    </div>
                                    <div class="team-content">
                                        <div class="line" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/images/line.png"></div>
                                        <h4 class="title"><a href="<?php echo wc_get_page_permalink( 'shop' ); ?>?cat=camarao">Camarão</a></h4>
                                        <span>Textura perfeita</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area-end -->

    <!-- faq-area -->
    <section class="faq-area tg-motion-effects faq-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/faq_bg.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="faq-img-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/faq_img01.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/faq_img02.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/faq_img03.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-content">
                        <div class="section-title mb-60">
                            <span class="sub-title">Dúvidas Frequentes</span>
                            <h2 class="title">Perguntas <span>Comuns</span></h2>
                        </div>
                        <div class="faq-wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Quais os critérios para escolher pescados congelados?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Para escolher pescados, observe escamas brilhantes e aderidas, olhos salientes e transparentes, brânquias vermelhas ou rosadas, carne firme e odor suave. Nos crustáceos, evite sinais de desidratação e opacidade nos olhos. Verifique a data de validade, a temperatura de armazenamento e a integridade da embalagem. Priorize fornecedores confiáveis e métodos de captura sustentáveis, como a Azul Marinho Pescados.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Como armazenar o pescado corretamente para manter a qualidade?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Mantenha o produto congelado a -18°C ou mais frio para preservar suas características originais. Consuma dentro do prazo de validade e siga as condições de conservação indicadas. Após o descongelamento, não recongele. Prepare o produto no mesmo dia.</p>
                                            <p><strong>Armazenamento:</strong><br>
                                            • Freezer (-18°C ou mais frio): Vide validade na embalagem<br>
                                            • Congelador doméstico (-8°C a -12°C): Até 120 dias<br>
                                            • Geladeira (0°C a 2°C): 1 dia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Quais certificações garantem a qualidade e procedência dos pescados?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Certificações como <strong>SISP</strong> (Serviço de Inspeção Estadual) e <strong>SISBI</strong> (Sistema Brasileiro de Inspeção) garantem a segurança e qualidade dos produtos. O <strong>EURECICLO</strong> certifica práticas sustentáveis, enquanto o <strong>CMVS</strong> regula estabelecimentos municipais. O <strong>MSC</strong> (Marine Stewardship Council) certifica pescados de pesca sustentável, e o <strong>Selo Orgânico</strong> garante produtos sem antibióticos ou químicos prejudiciais.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq-shape-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/faq_shape01.png" alt="" class="tg-motion-effects3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/faq_shape02.png" alt="" class="tg-motion-effects2">
        </div>
    </section>
    <!-- faq-area-end -->

    <!-- page content if any -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="container pt-50 pb-50">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
