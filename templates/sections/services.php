<!-- service area start -->
<section class="service-area pd-top-90 pd-bottom-90" id="services" >       
    <div class="container">
        <div class="section-title">
            <div class="row">
                <div class="col-xl-6 col-lg-7 mb-4 mb-lg-0">
                    <h5 class="sub-title left-border">Nossas frentes de atuação</h5>
                    <h2 class="title">Temos o melhor plano de governo!</h2>
                    <p class="content mt-2">Abaixo um resumo das áreas com problemas mais urgentes.</p>
                </div>
                <div class="col-xl-6 col-lg-5 align-self-center">
                    <?php if ($route->isCurrentRoute('web.service')) : ?>
                        <div class="btn-wrap text-md-end">
                            <a class="btn btn-base" href="service.html">Detalhes dos nossos serviços</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-service-inner text-center">
                    <div class="icon-box-bg">
                        <i class="fas fa-user-md text-light" style="font-size: 40px;"></i>
                    </div>
                    <div class="details">
                        <h3>Saúde</h3>
                        <p>
                            Resumo do plano ou de objetivos para a saúde do candidato, pode ser
                            aumentar hospitais, aumentar os profissionais da súde e etc.
                        </p>
                    </div>
                    <div class="details-hover-wrap d-flex justify-content-center">
                        <div class="details-hover ">
                            <h3>Saúde</h3>
                            <p>Veja todos os detalhes das nossas propostas.</p>
                            <a class="btn btn-base btn-small" href="<?= $route->route('web.proposals') ?>">Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service-inner text-center">
                    <div class="icon-box-bg">
                        <i class="fas fa-user-graduate text-light" style="font-size: 40px;"></i>
                    </div>
                    <div class="details">
                        <h3>Educação</h3>
                        <p>
                            Lista de todos os topicos de areas da educação que o candidato
                            quer implementar pra melhor os índices de educação do munícipio.
                        </p>
                    </div>
                    <div class="details-hover-wrap d-flex justify-content-center">
                        <div class="details-hover">
                            <h3>Educação</h3>
                            <p>Veja todos os detalhes das nossas propostas.</p>
                            <a class="btn btn-base btn-small" href="<?= $route->route('web.proposals') ?>">Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service-inner text-center">
                    <div class="icon-box-bg">
                        <i class="fas fa-user-shield text-light" style="font-size: 40px;"></i>
                    </div>
                    <div class="details">
                        <h3>Segurança</h3>
                        <p>
                            Queremos aumentar nosso efetivo de policiais e melhorar a qualidade
                            dos equipamentos pra proporcionar um trabalho digno e seguro. <!-- obs: esses brs são pra alinhar as divs até desenvolver o conteudo correto pra elas. -->
                        </p>
                    </div>
                    <div class="details-hover-wrap d-flex justify-content-center">
                        <div class="details-hover">
                            <h3>Segurança</h3>
                            <p>Veja todos os detalhes das nossas propostas.</p>
                            <a class="btn btn-base btn-small" href="<?= $route->route('web.proposals') ?>">Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service-inner text-center">
                    <div class="icon-box-bg">
                        <i class="fas fa-shuttle-van text-light" style="font-size: 40px;"></i>
                    </div>
                    <div class="details">
                        <h3>Transportes</h3>
                        <p>
                            Melhorar a qualidade do transporte público, aumento da quantidade de ônibus
                            escolares.
                        </p>
                    </div>
                    <div class="details-hover-wrap d-flex justify-content-center">
                        <div class="details-hover">
                            <h3>Transportes</h3>
                            <p>
                                Veja todos os detalhes das nossas propostas.
                            </p>
                            <a class="btn btn-base btn-small" href="<?= $route->route('web.proposals') ?>">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service-inner text-center">
                    <div class="icon-box-bg">
                        <i class="fas fa-hand-holding-usd text-light" style="font-size: 40px;"></i>
                    </div>
                    <div class="details">
                        <h3>Renda</h3>
                        <p>
                            Melhorar o atendimento do bolsa familia, aumentar o numero de beneficiários
                            e diminuir o numero de fraudes.
                        </p>
                    </div>
                    <div class="details-hover-wrap d-flex justify-content-center">
                        <div class="details-hover">
                            <h3>Renda</h3>
                            <p>Veja todos os detalhes das nossas propostas.</p>
                            <a class="btn btn-base btn-small" href="<?= $route->route('web.proposals') ?>">Portifólio</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service-inner text-center">
                    <div class="icon-box-bg">
                        <i class="fas fa-road text-light" style="font-size: 40px;"></i>
                    </div>
                    <div class="details">
                        <h3>Pavimentação</h3>
                        <p>
                            Calçamento de ruas e recapeamento dos rodovias para melhorar a seguraça no
                            trânsito e dos veiculos.
                        </p>
                    </div>
                    <div class="details-hover-wrap d-flex justify-content-center">
                        <div class="details-hover">
                            <h3>Pavimentação</h3>
                            <p>Veja todos os detalhes das nossas propostas.</p>
                            <a class="btn btn-base btn-small" href="<?= $route->route('web.proposals') ?>">Mostrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service area end -->