<!-- footer area start -->
<footer class="footer-area bg-cover" style="background-image: url('<?= url('templates/assets/img/bg/2s.webp'); ?>');" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_about">
                    <h4 class="widget-title">Sobre o politico</h4>
                    <div class="details">
                        <p>Address</p>
                        <p>Melbourne’s GPO 434 VIC 3074, Australia.</p>
                        <?= $this->insert('fragments/social-media'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">Mapa do site</h4>
                    <ul>
                        <li><a href="<?= $route->route('web.home')  ?>">Principal</a></li>
                        <li><a href="<?= $route->route('web.proposals') ?>">Propostas</a></li>
                        <li><a href="<?= $route->route('web.contact')  ?>">Contato</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-lg-flex justify-content-center pe-5">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">&nbsp;</h4>
                    <ul>
                        <li><a href="<?= $route->route('web.events') ?>">Eventos</a></li>
                        <li><a href="<?= $route->route('web.faq')  ?>">FAQ</a></li>
                        <li><a href="<?= $route->route('web.about') ?>">Sobre</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_subscribe">
                    <h4 class="widget-title">Newsletters</h4>
                    <div class="single-input-inner style-border style-bg-none">
                        <input type="text" placeholder="Your Email">
                        <button><i class="fa fa-arrow-right"></i></button>
                    </div>
                    <label><input type="checkbox">Vai ser Recaptcha</label>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <p><?= COPYRIGHT ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<?= $this->insert('fragments/back-top'); ?>