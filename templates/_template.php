<!doctype html>
<html lang="<?= LANGUAGE ?>">

<head>
    <!-- Required meta tags -->
    <meta charset="<?= CHARSET ?>">

    <!-- Bootstrap CSS -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- Fav icon -->
    <link rel=icon href="<?= url('template/assets/img/favicon.webp') ?>" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= url('templates/assets/css/bootstrap.min.css') . "?" . time() ?>">
    <link rel="stylesheet" href="<?= url('templates/assets/css/animate.min.css') . "?" . time() ?>">
    <link rel="stylesheet" href="<?= url('templates/assets/css/fontawesome.min.css') . "?" . time() ?>">
    <link rel="stylesheet" href="<?= url('templates/assets/css/custom-icon.css') . "?" . time() ?>">
    <link rel="stylesheet" href="<?= url('templates/assets/css/nice-select.min.css') . "?" . time() ?>">
    <link rel="stylesheet" href="<?= url('templates/assets/css/magnific.min.css') . "?" . time() ?>">
    <link rel="stylesheet" href="<?= url('templates/assets/css/owl.min.css') . "?" . time() ?>">
    <link rel="stylesheet" href="<?= url('templates/assets/css/slick.min.css') . "?" . time() ?>">
    <link rel="stylesheet" href="<?= url('templates/assets/css/style.css') . "?" . time() ?>">
    <link rel="stylesheet" href="<?= url('templates/assets/css/responsive.css') . "?" . time() ?>">



    <!-- CDN do Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">

    <!-- Cabeçalhos dinâmicos para uma determinada página -->
    <?= $this->section('css') ?>


</head>

<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <?= $this->insert('sections/navbar1'); ?>

    <!-- Conteúdo da página -->
    <?= $this->section('content'); ?>

    <?= $this->insert('sections/footer'); ?>

    <?php if (!empty(WHATSAPP)) : ?>
        <?= $this->insert('fragments/whatsapp-button'); ?>
    <?php endif; ?>

    <!-- all plugins here -->
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel2.thumbs@0.1.8/dist/owl.carousel2.thumbs.min.js"></script>
    <script src="<?= url('templates/assets/js/jquery.min.js') . "?" . time()  ?>"></script>
    <script src="<?= url('templates/assets/js/bootstrap.min.js') . "?" . time() ?>"></script>
    <script src="<?= url('templates/assets/js/fontawesome.min.js') . "?" . time() ?>"></script>
    <script src="<?= url('templates/assets/js/nice-select.min.js') . "?" . time() ?>"></script>
    <script src="<?= url('templates/assets/js/magnific.min.js') . "?" . time() ?>"></script>
    <script src="<?= url('templates/assets/js/isotope.min.js') . "?" . time() ?>"></script>
    <script src="<?= url('templates/assets/js/imageload.min.js') . "?" . time() ?>"></script>
    <script src="<?= url('templates/assets/js/owl.min.js') . "?" . time() ?>"></script>
    <script src="<?= url('templates/assets/js/slick.min.js') . "?" . time() ?>"></script>
    <script src="<?= url('templates/assets/js/tweenmax.min.js') . "?" . time() ?>"></script>
    <script src="<?= url('templates/assets/js/waypoint.js') . "?" . time() ?>"></script>
    <script src="<?= url('templates/assets/js/counterup.js') . "?" . time() ?>"></script>
    <script src="<?= url('templates/assets/js/contact.js') . "?" . time() ?>"></script>

    <!-- main js  -->
    <script src="<?= url('templates/assets/js/main.js') ?>"></script>

    <!-- Javascript Global -->
    <script src="<?= url('cdn/js/global.js'); ?>"></script>
    <script src="<?= url('cdn/js/functions.js'); ?>"></script>

    <!-- Javascript dinâmico para página específica -->
    <?= $this->section('js'); ?>

</body>

</html>