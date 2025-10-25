<?= $this->insert('sections/top-bar1'); ?>
<!-- navbar start -->
<nav class="navbar navbar-area navbar-area-2 navbar-expand-lg" id="navbar" style="height: 80px;">
    <div class="container nav-container">
        <div class="responsive-mobile-menu">
            <button class="menu toggle-btn d-block d-lg-none bg-white" data-target="#Iitechie_main_menu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-left"></span>
                <span class="icon-right"></span>
            </button>
        </div>
        <div class="logo d-inline-block d-lg-none">
            <a href="index.html"><img src="<?= url('cdn/assets/images/logos/logod.png') ?>" alt="img" width="500"></a>
        </div>

        <div class="nav-right-part nav-right-part-mobile mt-2">
            <a class="search-bar-btn" href="#">
                <i class="fa fa-search"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="Iitechie_main_menu">
            <?= $this->insert('fragments/nav-navbar'); ?>
        </div>
    </div>
</nav>
<!-- navbar end -->