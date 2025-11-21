<?php get_header(); ?>

        <!-- main-area -->
        <main>

            <!-- area-bg -->
            <div class="area-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/area_bg.jpg">

                <!-- banner-area -->
                <section class="banner-area banner-bg tg-motion-effects" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/banner/banner_bg.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-content">
                                    <h1 class="title wow fadeInUp" data-wow-delay=".2s">Produtos frescos</h1>
                                    <span class="sub-title wow fadeInUp" data-wow-delay=".4s">do mar para sua mesa</span>
                                    <a href="<?php echo home_url('/loja'); ?>" class="btn banner-btn wow fadeInUp" data-wow-delay=".6s">Conheça Nossos Produtos</a>
                                </div>
                                <div class="banner-img text-center wow fadeInUp" data-wow-delay=".8s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/banner_img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-shape-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/banner_shape01.png" alt="" class="tg-motion-effects5">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/banner_shape02.png" alt="" class="tg-motion-effects4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/banner_shape03.png" alt="" class="tg-motion-effects3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/banner_shape04.png" alt="" class="tg-motion-effects5">
                    </div>
                </section>
                <!-- banner-area-end -->

                <!-- features-area -->
                <section class="features-area pt-130 pb-70 fade-in-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="features-item tg-motion-effects">
                                    <div class="features-content">
                                        <span>Padrões de qualidade</span>
                                        <h4 class="title"><a href="<?php echo home_url('/loja'); ?>">Segurança alimentar garantida</a></h4>
                                        <p>Certificações internacionais de segurança alimentar</p>
                                        <a href="<?php echo home_url('/contato'); ?>" class="price">Consultar Preço</a>
                                    </div>
                                    <div class="features-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/features_img01.png" alt="Qualidade Garantida" loading="lazy">
                                        <div class="features-shape">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/features_shape.png" alt="" class="tg-motion-effects4">
                                        </div>
                                    </div>
                                    <div class="features-overlay-shape" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/images/features_overlay.png"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="features-item tg-motion-effects">
                                    <div class="features-content">
                                        <span>Produtos premium</span>
                                        <h4 class="title"><a href="<?php echo home_url('/loja'); ?>">Proteínas saudáveis todos os dias</a></h4>
                                        <p>Selecionados para garantir saúde e sabor</p>
                                        <a href="<?php echo home_url('/contato'); ?>" class="price">Consultar Preço</a>
                                    </div>
                                    <div class="features-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/features_img02.png" alt="Produtos Premium" loading="lazy">
                                        <div class="features-shape">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/features_shape.png" alt="" class="tg-motion-effects4">
                                        </div>
                                    </div>
                                    <div class="features-overlay-shape" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/images/features_overlay.png"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- features-area-end -->

            </div>
            <!-- area-bg-end -->

            <!-- product-area -->
            <section class="product-area product-bg fade-in-section" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/product_bg01.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb-60">
                                <span class="sub-title">Pescados com selo de certificação de origem</span>
                                <h2 class="title">Produtos congelados na origem</h2>
                                <div class="title-shape" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/images/title_shape.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="<?php echo home_url('/loja'); ?>?cat=tilapia"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/product/product_img01.png" alt="Filé de Tilápia" loading="lazy"></a>
                                </div>
                                <div class="product-content">
                                    <div class="line" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/images/line.png"></div>
                                    <h4 class="title"><a href="<?php echo home_url('/loja'); ?>?cat=tilapia">Filé de Tilápia</a></h4>
                                    <h6 class="price">Textura delicada e sabor suave</h6>
                                    <div class="product-tag">
                                        <ul class="list-wrap">
                                            <li><a href="<?php echo home_url('/loja'); ?>?cat=tilapia">Praticamente sem espinhas</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 401 314" preserveAspectRatio="none">
                                        <path d="M331.5,1829h361a20,20,0,0,1,20,20l-29,274a20,20,0,0,1-20,20h-292a20,20,0,0,1-20-20l-40-274A20,20,0,0,1,331.5,1829Z" transform="translate(-311.5 -1829)" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="<?php echo home_url('/loja'); ?>?cat=salmao"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/product/product_img02.png" alt="Salmão Premium" loading="lazy"></a>
                                </div>
                                <div class="product-content">
                                    <div class="line" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/images/line.png"></div>
                                    <h4 class="title"><a href="<?php echo home_url('/loja'); ?>?cat=salmao">Salmão Premium</a></h4>
                                    <h6 class="price">Super macio e nutritivo</h6>
                                    <div class="product-tag">
                                        <ul class="list-wrap">
                                            <li><a href="<?php echo home_url('/loja'); ?>?cat=salmao">Certificação ASC</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 401 314" preserveAspectRatio="none">
                                        <path d="M331.5,1829h361a20,20,0,0,1,20,20l-29,274a20,20,0,0,1-20,20h-292a20,20,0,0,1-20-20l-40-274A20,20,0,0,1,331.5,1829Z" transform="translate(-311.5 -1829)" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="<?php echo home_url('/loja'); ?>?cat=bacalhau"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/product/product_img03.png" alt="Bacalhau do Porto" loading="lazy"></a>
                                </div>
                                <div class="product-content">
                                    <div class="line" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/images/line.png"></div>
                                    <h4 class="title"><a href="<?php echo home_url('/loja'); ?>?cat=bacalhau">Bacalhau do Porto</a></h4>
                                    <h6 class="price">Tradição e qualidade</h6>
                                    <div class="product-tag">
                                        <ul class="list-wrap">
                                            <li><a href="<?php echo home_url('/loja'); ?>?cat=bacalhau">Importado de Portugal</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 401 314" preserveAspectRatio="none">
                                        <path d="M331.5,1829h361a20,20,0,0,1,20,20l-29,274a20,20,0,0,1-20,20h-292a20,20,0,0,1-20-20l-40-274A20,20,0,0,1,331.5,1829Z" transform="translate(-311.5 -1829)" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-shape">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product/product_shape01.png" alt="">
                </div>
            </section>
            <!-- product-area-end -->

            <!-- gallery-area -->
            <div class="gallery-area gallery-bg fade-in-section" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/product_bg01.jpg">
                <div class="container">
                    <div class="gallery-item-wrap">
                        <div class="row justify-content-center">
                            <div class="col-88">
                                <div class="gallery-active">
                                    <div class="gallery-item">
                                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery_img01.png" class="popup-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery_img01.png" alt=""></a>
                                    </div>
                                    <div class="gallery-item">
                                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery_img02.png" class="popup-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery_img02.png" alt=""></a>
                                    </div>
                                    <div class="gallery-item">
                                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery_img03.png" class="popup-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery_img03.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- gallery-area-end -->

            <!-- product-area -->
            <section class="product-area-two product-bg-two fade-in-section" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/product_bg02.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb-70">
                                <span class="sub-title">Linha Premium</span>
                                <h2 class="title">Variedade que seu negócio precisa</h2>
                                <div class="title-shape" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/images/title_shape.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="product-item-two">
                                <div class="product-img-two">
                                    <a href="<?php echo home_url('/loja'); ?>?cat=merluza"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/product/organic_product01.png" alt=""></a>
                                </div>
                                <div class="product-content-two">
                                    <div class="product-info">
                                        <h4 class="title"><a href="<?php echo home_url('/loja'); ?>?cat=merluza">Filé de Merluza</a></h4>
                                        <p>Filés premium com congelamento IQF. Ideal para restaurantes e redes de alimentação.</p>
                                    </div>
                                    <div class="product-price">
                                        <h5 class="price">Sob consulta</h5>
                                        <a href="<?php echo home_url('/loja'); ?>?cat=merluza" class="tag">Ver produtos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="product-item-two">
                                <div class="product-img-two">
                                    <a href="<?php echo home_url('/loja'); ?>?cat=salmao"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/product/organic_product02.png" alt=""></a>
                                </div>
                                <div class="product-content-two">
                                    <div class="product-info">
                                        <h4 class="title"><a href="<?php echo home_url('/loja'); ?>?cat=salmao">Salmão do Atlântico</a></h4>
                                        <p>Certificação ASC. Textura super macia e alto valor nutricional para seu cardápio.</p>
                                    </div>
                                    <div class="product-price">
                                        <h5 class="price">Sob consulta</h5>
                                        <a href="<?php echo home_url('/loja'); ?>?cat=salmao" class="tag">Ver produtos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="product-item-two">
                                <div class="product-img-two">
                                    <a href="<?php echo home_url('/loja'); ?>?cat=camarao"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/product/organic_product03.png" alt=""></a>
                                </div>
                                <div class="product-content-two">
                                    <div class="product-info">
                                        <h4 class="title"><a href="<?php echo home_url('/loja'); ?>?cat=camarao">Camarão Premium</a></h4>
                                        <p>Diversas calibragens disponíveis. Perfeito para pratos especiais e alta gastronomia.</p>
                                    </div>
                                    <div class="product-price">
                                        <h5 class="price">Sob consulta</h5>
                                        <a href="<?php echo home_url('/loja'); ?>?cat=camarao" class="tag">Ver produtos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="product-item-two">
                                <div class="product-img-two">
                                    <a href="<?php echo home_url('/loja'); ?>?cat=bacalhau"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/product/organic_product04.png" alt=""></a>
                                </div>
                                <div class="product-content-two">
                                    <div class="product-info">
                                        <h4 class="title"><a href="<?php echo home_url('/loja'); ?>?cat=bacalhau">Bacalhau Selecionado</a></h4>
                                        <p>Importado de Portugal. Qualidade superior para ocasiões especiais e datas comemorativas.</p>
                                    </div>
                                    <div class="product-price">
                                        <h5 class="price">Sob consulta</h5>
                                        <a href="<?php echo home_url('/loja'); ?>?cat=bacalhau" class="tag">Ver produtos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-now-btn text-center mt-40">
                        <a href="<?php echo home_url('/loja'); ?>" class="btn">Ver Catálogo Completo</a>
                    </div>
                </div>
            </section>
            <!-- product-area-end -->

    

            <!-- faq-area -->
            <section class="faq-area tg-motion-effects faq-bg fade-in-section" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/faq_bg.jpg">
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
                                    <h2 class="title">Perguntas <span>comuns</span></h2>
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

            <!-- cta-area -->
            <section class="cta-area position-relative">
                <div class="cta-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/cta_bg.jpg"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="cta-content">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/cta_icon.png" alt="">
                                <h2 class="title">Solicite seu orçamento personalizado</h2>
                                <div class="cta-bottom">
                                    <a href="<?php echo home_url('/loja'); ?>" class="btn">Ver Catálogo Completo</a>
                                    <a href="tel:(11)1234-5678" class="btn call-btn"><i class="fas fa-headphones-alt"></i>Ligue: (11) 1234-5678</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- cta-area-end -->

            <!-- blog-post-area -->
            <section class="blog-post-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb-70">
                                <span class="sub-title">Conteúdo Exclusivo</span>
                                <h2 class="title">Dicas e Receitas para Profissionais</h2>
                                <div class="title-shape" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/images/title_shape.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="<?php echo home_url('/artigo/5-receitas-com-tilapia'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog_post01.jpg" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li><a href="<?php echo home_url('/blog'); ?>"><i class="fas fa-user"></i>Azul Marinho</a></li>
                                            <li><i class="fas fa-comments"></i>03</li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="<?php echo home_url('/artigo/5-receitas-com-tilapia'); ?>">5 Receitas com Tilápia para Cardápios Lucrativos</a></h4>
                                    <p>Aprenda a criar pratos deliciosos e rentáveis com filé de tilápia certificado.</p>
                                    <div class="blog-post-bottom">
                                        <a href="<?php echo home_url('/artigo/5-receitas-com-tilapia'); ?>" class="link-btn">Ler mais</a>
                                        <a href="<?php echo home_url('/artigo/5-receitas-com-tilapia'); ?>" class="link-arrow"><i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="<?php echo home_url('/artigo/como-armazenar-pescados'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog_post02.jpg" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li><a href="<?php echo home_url('/blog'); ?>"><i class="fas fa-user"></i>Azul Marinho</a></li>
                                            <li><i class="fas fa-comments"></i>03</li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="<?php echo home_url('/artigo/como-armazenar-pescados'); ?>">Como Armazenar Pescados Congelados Corretamente</a></h4>
                                    <p>Dicas profissionais para manter a qualidade dos seus produtos no estoque.</p>
                                    <div class="blog-post-bottom">
                                        <a href="<?php echo home_url('/artigo/como-armazenar-pescados'); ?>" class="link-btn">Ler mais</a>
                                        <a href="<?php echo home_url('/artigo/como-armazenar-pescados'); ?>" class="link-arrow"><i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="<?php echo home_url('/artigo/salmao-beneficios'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog_post03.jpg" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li><a href="<?php echo home_url('/blog'); ?>"><i class="fas fa-user"></i>Azul Marinho</a></li>
                                            <li><i class="fas fa-comments"></i>03</li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="<?php echo home_url('/artigo/salmao-beneficios'); ?>">Salmão: Benefícios Nutricionais que Atraem Clientes</a></h4>
                                    <p>Descubra por que o salmão é um dos pescados mais valorizados em cardápios.</p>
                                    <div class="blog-post-bottom">
                                        <a href="<?php echo home_url('/artigo/salmao-beneficios'); ?>" class="link-btn">Ler mais</a>
                                        <a href="<?php echo home_url('/artigo/salmao-beneficios'); ?>" class="link-arrow"><i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-post-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- newsletter-section -->
        <section class="newsletter-section" id="contact">
            <div class="newsletter-wrapper">
                <div class="newsletter-content">
                    <h2 class="newsletter-title" style="color: #fff; font-size: 32px; margin-bottom: 15px; font-family: var(--tg-heading-font-family);">Fique por dentro das novidades</h2>
                    <h3 class="newsletter-subtitle" style="color: var(--tg-secondary-color); font-size: 24px; margin-bottom: 20px; font-family: var(--tg-pacifico-font-family);">Azul Marinho</h3>
                    <p class="newsletter-description">Cadastre-se agora para receber ofertas especiais, lançamentos de produtos e dicas de como incluir mais saúde e sabor nas suas refeições.</p>
                    <form class="newsletter-form" action="#">
                        <input type="text" placeholder="Nome*" required>
                        <input type="email" placeholder="Email*" required>
                        <input type="tel" placeholder="Telefone*" required>
                        <textarea placeholder="Mensagem*" required></textarea>
                        <button type="submit" class="newsletter-button">QUERO SABER MAIS INFORMAÇÕES</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- newsletter-section-end -->

<?php get_footer(); ?>
