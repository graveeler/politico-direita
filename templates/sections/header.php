    <!-- page title start -->
    <div class="breadcrumb-area bg-black bg-relative">
        <div class="banner-bg-img" style="background-image: url('<?= url('templates/assets/img/bg/1.webp') ?>');"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="page-title"><?= $header ?></h2>
                        <ul class="page-list">
                            <li><a href="<?= $route->route('web.home') ?>">Home</a></li>
                            <?php if (!empty($subHeader)) :  ?>
                                <li><?= $router->route('web.' . $header)  ?></li>
                            <?php endif; ?>
                            <li><?= $header ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->