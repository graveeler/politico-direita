<?php $this->layout('_template', ['title' => $title]) ?>

<?php $this->start('css'); ?>
<!-- Conteudo css -->

<?php $this->end(); ?>

<?= $this->insert('sections/header', ['header' => $header]); ?>

<div class="container my-5">
    <div class="section-title mt-5">
        <div class="row">
            <div class="col"></div>
            <div class="col-xl-8 col-lg-8 col-md-10 mb-4 mb-lg-0">
                <h5 class="sub-title left-border">Nossas Programação de eventos</h5>
                <h2 class="title">Nós trabalhamos em favor do povo!</h2>
            </div>
            <div class="col"></div>
           
        </div>
    </div>
    <div class="row">
        <div class="col">

        </div>
        <div class="col-md-12 col-lg-9 col-xl-8">
            <div class="card mb-3 rounded w-auto shadow sm p-1 mb-5 bg-body-tertiary">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="<?= url('cdn/assets/images/cards/imagecard1.png'); ?>" class="w-100 h-100 img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-7 text-white rounded-end" style="background-color:#3BAA35;">
                        <div class="card-body ">
                            <h5 class="card-title text-white">Carreta da Alegria</h5>
                            <h6 class="card-subtitle mb-2 text-warning">Dia 09/10/2025 às 10:00</h6>
                            <p class="card-text text-white">Não perca e traga seu filho pra este dia especial, teremos muitas brincadeiras e muitas diversão.</p>
                            <div class="d-flex justify-content-between">
                                <p class="card-text"><small class="text-warning">Evento gratuito</small></p>

                                <div>
                                    <a href="#" class="btn btn-warning py-0 px-3"> <i class="fab fa-whatsapp text-white fs-3"></i></a>
                                    <a href="#" class="btn btn-warning py-0 px-3"><i class="fas fa-map-marker-alt text-white fs-3"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card mb-3 rounded w-auto shadow sm p-1 mb-5 bg-body-tertiary">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="<?= url('cdn/assets/images/cards/imagecard2.png'); ?>" class="w-100 h-100 img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-7 text-white rounded-end" style="background-color:#3BAA35;">
                        <div class="card-body ">
                            <h5 class="card-title text-white">Carreta da Alegria</h5>
                            <h6 class="card-subtitle mb-2 text-warning">Dia 09/10/2025 às 10:00</h6>
                            <p class="card-text text-white">Não perca e traga seu filho pra este dia especial, teremos muitas brincadeiras e muitas diversão.</p>
                            <div class="d-flex justify-content-between">
                                <p class="card-text"><small class="text-warning">Evento gratuito</small></p>

                                <div>
                                    <a href="#" class="btn btn-warning py-0 px-3"> <i class="fab fa-whatsapp text-white fs-3"></i></a>
                                    <a href="#" class="btn btn-warning py-0 px-3"><i class="fas fa-map-marker-alt text-white fs-3"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card mb-3 rounded w-auto shadow sm p-1 mb-5 bg-body-tertiary">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="<?= url('cdn/assets/images/cards/imagecard3.png'); ?>" class="w-100 h-100 img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-7 text-white rounded-end" style="background-color:#3BAA35;">
                        <div class="card-body ">
                            <h5 class="card-title text-white">Carreta da Alegria</h5>
                            <h6 class="card-subtitle mb-2 text-warning">Dia 09/10/2025 às 10:00</h6>
                            <p class="card-text text-white">Não perca e traga seu filho pra este dia especial, teremos muitas brincadeiras e muitas diversão.</p>
                            <div class="d-flex justify-content-between">
                                <p class="card-text"><small class="text-warning">Evento gratuito</small></p>

                                <div>
                                    <a href="#" class="btn btn-warning py-0 px-3"> <i class="fab fa-whatsapp text-white fs-3"></i></a>
                                    <a href="#" class="btn btn-warning py-0 px-3"><i class="fas fa-map-marker-alt text-white fs-3"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col"></div>


    </div>
</div>

<?php $this->start('js'); ?>

<?php $this->end(); ?>