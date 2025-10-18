<!-- navbar start -->
<nav class="navbar navbar-area navbar-area-3 navbar-area-4 navbar-expand-lg">
    <div class="container nav-container">
        <div class="responsive-mobile-menu">
            <button class="menu toggle-btn d-block d-lg-none" data-target="#Iitechie_main_menu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-left"></span>
                <span class="icon-right"></span>
            </button>
        </div>
        <div class="logo">
            <a class="d-none d-lg-inline-block" href="index.html"><img src="assets/img/logo-3.webp" alt="img"></a>
            <a class="d-lg-none d-inline-block" href="index.html"><img src="assets/img/logo.webp" alt="img"></a>
        </div>
        <div class="nav-right-part nav-right-part-mobile">
            <a class="search-bar-btn" href="#">
                <i class="fa fa-search"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="Iitechie_main_menu">
            <?= $this->insert('fragments/nav-navbar'); ?>
        </div>
        <div class="nav-right-part nav-right-part-desktop align-self-center">
            <a class="btn btn-border-white" href="contact.html">Free Trail</a>
        </div>
    </div>
</nav>
<!-- navbar end -->