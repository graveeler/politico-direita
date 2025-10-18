<?php $this->layout('_template', ['title' => $title]) ?>

<?php $this->start('css'); ?>
<!-- Conteudo css -->

<?php $this->end(); ?>

<?= $this->insert('sections/header', ['header' => $header]); ?>

<?= $this->insert('sections/plan1'); ?>

<!-- Dashboard page start -->
<section class="project-area pd-top-50 mb-4" id="service-dashboard">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-details-page-content">
                    <div class="single-blog-inner">
                        <div class="details">
                            <h4 class="pt-4 mb-4">Detalhes</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="media single-choose-inner">
                                        <div class="media-left">
                                            <div class="icon">
                                                <!--<i class="icomoon-gear"></i> -->
                                                <i class="fas fa-at"></i>

                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>Disparo de emails</h4>
                                            <p>
                                                No seu painel de acesso, dentre todos os domínios que você possui, será possível fazer desparos em massa de emails para os seus clientes, limitados a quentidade do seu plano.
                                            <p>
                                        </div>
                                    </div>
                                    <div class="media single-choose-inner">
                                        <div class="media-left">
                                            <div class="icon">
                                                <!-- <i class="icomoon-time"></i> -->
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>Mensagens</h4>
                                            <p>
                                                Local da plataforma onde você pode ler as mensagens, perguntas que algum dos seus clientes
                                                fez na sua página.
                                            <p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="media single-choose-inner">
                                        <div class="media-left">
                                            <div class="icon">
                                                <!-- <i class="icomoon-team"></i> -->
                                                <i class="fas fa-paper-plane"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>Newsletters</h4>
                                            <p>
                                                Os seus usuários podem se cadastrar na newsletter do seu site pra receber
                                                mensagens que podem ser referentes a notícias, informações relevantes promoções e etc.

                                            </p>
                                        </div>
                                    </div>
                                    <div class="media single-choose-inner">
                                        <div class="media-left">
                                            <div class="icon">
                                                <!-- <i class="icomoon-profile"></i> -->
                                                <i class="fab fa-wpforms"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>Leads</h4>
                                            <p>
                                                Uma das mais poderosas ferramentas para capturar informações de pessoas interessadas
                                                no seu negócio (potenciais clientes).
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="media single-choose-inner">
                                        <div class="media-left">
                                            <div class="icon">
                                                <i class="fas fa-sitemap"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>Domínios</h4>
                                            <p>
                                                Você pode registrar seus domínios na nossa plataforma, limitados a quantidade diponível no seu plano.
                                                Cada domínio irá gerenciar os aspectos da sua aplicação ou do seu negócio, como captura de leads,
                                                contagem de acessos e CTAs, mensagens, agenda, blogs e todas as nossas funcionalidades.
                                            </p><br>

                                        </div>
                                    </div>
                                    <div class="media single-choose-inner">
                                        <div class="media-left">
                                            <div class="icon">
                                                <i class="fas fa-calendar-check"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>Agenda</h4>
                                            <p>
                                                Você pode criar uma agenda com todos os seus compromissos, eventos assim todos
                                                os seus clientes estaram por dentro de tudo que acontece com a sua empresa.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="media single-choose-inner">
                                        <div class="media-left">
                                            <div class="icon">
                                                <i class="fas fa-mouse"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>CTAs</h4>
                                            <p>
                                                CTA significa "Call to Action", ou seja, "chamada para ação". Em marketing e design, CTAs
                                                são elementos que visam guiar o usuário a realizar uma ação específica, como clicar em um
                                                botão, preencher um formulário, fazer um download, etc. Na plataforma é possível gerar vários
                                                eventos de CTA a depender do seu plano.
                                            </p>

                                        </div>
                                    </div>
                                    <div class="media single-choose-inner">
                                        <div class="media-left">
                                            <div class="icon">
                                                <i class="fas fa-qrcode"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>QR Code</h4>
                                            <p>
                                                Ferramenta de criação de QR code para sua applicação, você pode gerar links dos seus, domínios
                                                páginas e tudo que achar necessário.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="media single-choose-inner">
                                        <div class="media-left">
                                            <div class="icon">
                                                <i class="fas fa-exclamation"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>Sessão de avisos</h4>
                                            <p>
                                                Na nossa plataforma você pode criar uma uma sessão especial para informações urgentes ou relevantes
                                                que pode ser incorporada ao seu site via API, e exibida quando você achar mais conveniente
                                            </p>

                                        </div>
                                    </div>
                                    <div class="media single-choose-inner">
                                        <div class="media-left">
                                            <div class="icon">
                                                <i class="fas fa-calendar-check"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>Agenda</h4>
                                            <p>
                                                Você pode criar uma agenda com todos os seus compromissos, eventos assim todos
                                                os seus clientes estaram por dentro de tudo que acontece com a sua empresa.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="media single-choose-inner">
                                        <div class="media-left">
                                            <div class="icon">
                                                <i class="fas fa-blog"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>Blog</h4>
                                            <p>
                                                Matenha seus clientes por dentro de tudo que está acontecendo com o seu negócio,
                                                atualize-os com seu blog.
                                            </p><br><br>

                                        </div>
                                    </div>
                                    <div class="media single-choose-inner">
                                        <div class="media-left">
                                            <div class="icon">
                                                <i class="fas fa-city"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>Escolha seu negócio</h4>
                                            <p>
                                                Ajustamos nossa plataforma ao seu negócio. Dependendo do ramo de atividade da sua
                                                empresa, recursos extras serão adicionados de acordo com sua especialidade.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Dashboard page end -->

<?php $this->start('js'); ?>

<?php $this->end(); ?>