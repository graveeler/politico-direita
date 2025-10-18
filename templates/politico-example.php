<?php $this->layout('_template', ['title' => 'Card Político - Exemplo']); ?>

<?php $this->start('css'); ?>
<link rel="stylesheet" href="<?= url('templates/assets/css/politico-card.css') ?>">
<?php $this->end(); ?>

<?php $this->start('content'); ?>

<!-- Hero Section -->
<section class="hero-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="hero-title">Exemplo de Card Político</h1>
                <p class="hero-subtitle">Demonstração do componente criado baseado na imagem fornecida</p>
            </div>
        </div>
    </div>
</section>

<!-- Card Político -->
<?= $this->insert('sections/politico-card'); ?>

<!-- Seção adicional com múltiplos cards -->
<section class="multiple-cards-section pd-top-80 pd-bottom-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title text-center mb-5">
                    <h2>Nossos Candidatos</h2>
                    <p>Conheça nossa equipe e propostas</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="politico-card">
                    <div class="politico-card-image">
                        <div class="politico-image-wrapper">
                            <img src="<?= url('cdn/assets/images/blog/blog1.png'); ?>" alt="Candidato 1" class="politico-image">
                        </div>
                    </div>
                    <div class="politico-card-content">
                        <h3 class="politico-title">Plano de Governo Completo</h3>
                        <p class="politico-description">
                            Desenvolvemos um plano abrangente para nossa cidade, 
                            focado em melhorias estruturais e sociais.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="politico-card">
                    <div class="politico-card-image">
                        <div class="politico-image-wrapper">
                            <img src="<?= url('cdn/assets/images/blog/blog2.png'); ?>" alt="Candidato 2" class="politico-image">
                        </div>
                    </div>
                    <div class="politico-card-content">
                        <h3 class="politico-title">Transparência Total</h3>
                        <p class="politico-description">
                            Comprometemo-nos com a transparência na gestão pública 
                            e participação da comunidade nas decisões.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="politico-card">
                    <div class="politico-card-image">
                        <div class="politico-image-wrapper">
                            <img src="<?= url('cdn/assets/images/blog/blog3.png'); ?>" alt="Candidato 3" class="politico-image">
                        </div>
                    </div>
                    <div class="politico-card-content">
                        <h3 class="politico-title">Desenvolvimento Sustentável</h3>
                        <p class="politico-description">
                            Priorizamos o desenvolvimento econômico aliado à 
                            preservação ambiental e responsabilidade social.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->end(); ?>
