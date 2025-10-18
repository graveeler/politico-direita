<!-- contact area start -->
<section class="faq-area pd-top-50 pd-bottom-50" id="contact">
    <div class="container">
        <!-- team area start -->
        <div class="team-area info-box-two pd-top-115 pd-bottom-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-9">
                        <div class="section-title text-center">
                            <h5 class="sub-title double-line">Contato</h5>
                            <h2 class="title">Entre em contato</h2>
                            <p class="content mt-2">Deixe-nos uma mensagem, ficaremos felizes de em
                                responde-los no que precisar. Fique a vontade pra ver nossas 
                                <a class="text-success" href="<?= $route->route('web.faq') ?>">FAQ</a>.
                            </p>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-contact-inner text-center">
                                <div class="icon-box">
                                    <i class="icomoon-pin"></i>
                                </div>
                                <div class="details-wrap">
                                    <div class="details-inner">
                                        <h3>Escritório</h3>
                                        <p>Av. Dr Roberto da Silva, nº 1025,
                                            Jatiuca, Messias - AL
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-contact-inner text-center">
                                <div class="icon-box">
                                    <i class=" icomoon-email"></i>
                                </div>
                                <div class="details-wrap">
                                    <div class="details-inner">
                                        <h3>Email Address</h3>
                                        <p>support@gmail.com <br> www.infomar.net</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-contact-inner text-center">
                                <div class="icon-box">
                                    <i class=" icomoon-telephone"></i>
                                </div>
                                <div class="details-wrap">
                                    <div class="details-inner">
                                        <h3>Phone Number</h3>
                                        <p>(82) 99875-1111 <br> (82) 99990-7777</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- team area end -->

            <div class="row py-5 bg-politico">
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <form class="contact-form-wrap" action="mail.php" method="post" id="contact-form">
                        <div class="consulting-contact-form mx-lg-4">
                            <!--   <h3 class="mb-3">Tadalatech Soluções LTDA.</h3> -->
                            <div class="single-input-inner style-bg">
                                <input name="name" type="text" placeholder="Nome">
                            </div>
                            <div class="single-input-inner style-bg">
                                <input name="email" type="text" placeholder="Email">
                            </div>
                            <div class="single-input-inner style-bg">
                                <input name="subject" type="text" placeholder="Assunto">
                            </div>
                            <div class="single-input-inner style-bg">
                                <textarea name="message" placeholder="Mensagem"></textarea>
                            </div>
                            <div class="btn-wrap pb-3">
                                <button type="submit" class="btn btn-base">Enviar</button>
                            </div>
                        </div>
                        <p class="form-messege mb-0 mt-20 text-center"></p>
                    </form>
                </div>
                <div class="col-lg-5 pe-xl-5 text-light">
                    <div class="section-title mb-0 mt-5 mt-lg-0">
                        <h5 class="sub-title left-border text-light">Detalhes de contato</h5>
                    </div>
                    <ul class="contact-details">
                        <li>Av. Dr Jacinto Ramos, nº 1025, Pajuçara</li>
                        <li>Messias - AL, 57100123</li>
                        <li>(82) 99875-1111</li>
                        <li>suporte@politico-tal.com.br</li>
                        <li>Seg - Sex: 8h - 17h</li>
                    </ul>
                    <div class="widget widget_about">
                        <div class="details">
                            <?= $this->insert('fragments/social-media'); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>


</section>
<!-- contact area end -->