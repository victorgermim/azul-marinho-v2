<?php
/*
Template Name: Contato
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

    <!-- contact-area -->
    <section class="contact-area">
        <div class="contact-info-wrap contact-info-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/contact_info_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-info-item">
                            <div class="icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Telefone</h4>
                                <span>(11) 1234-5678</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-info-item">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">E-mail</h4>
                                <span>contato@azulmarinho.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-info-item">
                            <div class="icon">
                                <i class="flaticon-location"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Área de Atendimento</h4>
                                <span>Atendimento por todo o Brasil (verificar disponibilidade)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-info-item">
                            <div class="icon">
                                <i class="flaticon-location-1"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Central de Vendas</h4>
                                <span>Contato comercial por e-mail e telefone</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-content">
                            <div class="section-title mb-15">
                                <span class="sub-title">Fale conosco</span>
                                <h2 class="title">Entre em <span>contato</span></h2>
                            </div>
                            <p>Envie sua solicitação por e-mail ou preencha o formulário abaixo. Nossa equipe responde em horário comercial (segunda a sexta, 9h–18h).</p>
                            
                            <!-- WordPress Contact Form Hook or Shortcode area -->
                            <div class="contact-form-wrap">
                                <?php 
                                if ( have_posts() ) : 
                                    while ( have_posts() ) : the_post();
                                        the_content(); 
                                    endwhile; 
                                else:
                                ?>
                                    <form id="contact-form" action="#" method="POST">
                                        <div class="form-grp">
                                            <input name="name" type="text" placeholder="Seu Nome *" required>
                                        </div>
                                        <div class="form-grp">
                                            <input name="email" type="email" placeholder="Seu E-mail *" required>
                                        </div>
                                        <div class="form-grp">
                                            <input name="subject" type="text" placeholder="Assunto *" required>
                                        </div>
                                        <div class="form-grp">
                                            <textarea name="message" placeholder="Mensagem: informe itens, quantidades e prazo desejado"></textarea>
                                        </div>
                                        <button type="submit">Enviar Mensagem</button>
                                    </form>
                                <?php endif; ?>
                            </div>
                            <p class="ajax-response mb-0"></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96811.54759587669!2d-74.01263924803828!3d406880494567041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1636195194646!5m2!1sen!2sbd" allowfullscreen loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

</main>

<?php get_footer(); ?>
