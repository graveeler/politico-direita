<?php $this->layout('_template', ['title' => $title, 'header' => $header]); ?>

<?php $this->start('css'); ?>

<?php $this->end(); ?>

<?= $this->insert('sections/header', ['header' => $header]); ?>

<div class="container mb-5">

    <div class="section-title mt-5">
        <div class="row">
            <div class="col-xl-12 col-lg-12 mb-4 mb-lg-0">
                <h5 class="sub-title left-border">Nossas Propostas para um Futuro Melhor</h5>
                <h2 class="title">Temos o melhor plano de governo!</h2>
                <p class="content mt-2">Acreditamos que nossa cidade pode ser um lugar onde todos tenham oportunidades de prosperar, com acesso a serviços de qualidade e segurança para suas famílias. Para isso, apresentamos nossas propostas, construídas com base em diálogo com a comunidade e análise técnica das necessidades de nosso município.</p>
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

    <div class="thumb">
        <img src="<?= url('cdn/assets/images/banners/background2.png'); ?>" alt="img">
    </div>

    <h2 class="mt-4">Saúde: Cuidando de Você em Cada Etapa da Vida</h2>
    <ul>
        <li class="proposta-titulo">Ampliação da Rede de Atenção Básica:</li>
        <li>Vamos construir e equipar novas Unidades Básicas de Saúde, garantindo cobertura total da população e atendimento próximo de casa.</li>
        <li class="proposta-titulo">Valorização dos Profissionais de Saúde:</li>
        <li>Criaremos um plano de carreira que reconheça o mérito e a dedicação dos médicos, enfermeiros e demais profissionais, atraindo e retendo talentos em nossa rede.</li>
        <li class="proposta-titulo">Investimento em Saúde Digital:</li>
        <li>Implementaremos prontuário eletrônico integrado em toda a rede, teleconsultas para especialidades e agendamento online, facilitando o acesso e a agilidade no atendimento.</li>
        <li class="proposta-titulo">Fortalecimento da Saúde Mental:</li>
        <li>Ampliaremos a oferta de serviços de psicologia e psiquiatria na rede pública, com foco na prevenção e no tratamento humanizado.</li>
        <li class="proposta-titulo">Combate às Endemias:</li>
        <li>Reforçaremos as ações de vigilância epidemiológica e controle de vetores, com o objetivo de eliminar a dengue, a zika e outras doenças transmitidas por mosquitos.</li>
    </ul>

    <div class="row">
        <div class="col-md-6 order-1 order-md-0">
            <h2 class="mt-4">Educação: O Alicerce do Nosso Desenvolvimento</h2>
            <ul>
                <li class="proposta-titulo">Educação Infantil de Qualidade para Todos:</li>
                <li>Vamos zerar o déficit de vagas em creches e pré-escolas, garantindo que todas as crianças tenham acesso à educação desde o início da vida.</li>
                <li class="proposta-titulo">Reforma e Modernização das Escolas:</li>
                <li>Investiremos na infraestrutura das unidades escolares, com salas de aula equipadas, laboratórios de informática e espaços de convivência seguros e acolhedores.</li>
                <li class="proposta-titulo">Formação Continuada dos Professores:</li>
                <li>Promoveremos programas de capacitação para os educadores, com foco nas novas tecnologias e nas metodologias de ensino mais eficazes.</li>
                <li class="proposta-titulo">Ampliação do Ensino Integral:</li>
                <li>Estenderemos o programa de ensino integral para mais escolas, oferecendo atividades esportivas, culturais e de reforço escolar no contraturno.</li>
                <li class="proposta-titulo">Conexão com o Futuro:</li>
                <li>Fortaleceremos o ensino técnico e profissionalizante, preparando os jovens para o mercado de trabalho e para os desafios do século XXI.</li>
            </ul>
        </div>
        <div class="col-md-6 order-0 order-md-1">
            <div class=" mb-4 mb-lg-0">

                    <img src="<?= url('cdn/assets/images/side/side3.png'); ?>" alt="img" class="img-fluid img-thumbnail w-75">

            </div>
        </div>
    </div>




    <div class="thumb">
        <img src="<?= url('cdn/assets/images/banners/background3.png'); ?>" alt="img">

    </div>

    <h2 class="mt-4">Transportes: Mobilidade para Todos os Cidadãos</h2>
    <ul>
        <li class="proposta-titulo">Modernização da Frota de Ônibus:</li>
        <li>Renovaremos a frota com veículos acessíveis, confortáveis e menos poluentes, garantindo um transporte público de qualidade para todos.</li>
        <li class="proposta-titulo">Ampliação e Integração das Linhas:</li>
        <li>Vamos expandir a cobertura do transporte coletivo, criando novas linhas e integrando os diferentes modais (ônibus, trem, metrô) para facilitar o deslocamento dos cidadãos.</li>
        <li class="proposta-titulo">Investimento em Infraestrutura Viária:</li>
        <li>Recuperaremos e ampliaremos as vias da cidade, com recapeamento, sinalização e construção de novas faixas, para melhorar o fluxo do trânsito e reduzir os congestionamentos.</li>
        <li class="proposta-titulo">Mobilidade Ativa:</li>
        <li>Incentivaremos o uso de bicicletas e outros meios de transporte não motorizados, com a criação de ciclovias, ciclofaixas e bicicletários em toda a cidade.</li>
        <li class="proposta-titulo">Acessibilidade Universal:</li>
        <li>Garantiremos que todas as calçadas, ruas e meios de transporte sejam acessíveis para pessoas com deficiência ou mobilidade reduzida.</li>
    </ul>

    <div class="thumb">
        <img src="<?= url('cdn/assets/images/banners/background4.png'); ?>" alt="img">

    </div>

    <h2 class="mt-4">Segurança: O Direito de Viver em Paz</h2>
    <ul>
        <li class="proposta-titulo">Guarda Municipal Presente e Ativa:</li>
        <li>Vamos fortalecer a Guarda Municipal, com mais efetivo, equipamentos modernos e treinamento constante, para garantir a segurança dos cidadãos em todos os bairros.</li>
        <li class="proposta-titulo">Iluminação Pública Eficiente:</li>
        <li>Ampliaremos e modernizaremos a rede de iluminação pública, com lâmpadas de LED, para aumentar a sensação de segurança nas ruas e praças.</li>
        <li class="proposta-titulo">Tecnologia a Serviço da Segurança:</li>
        <li>Investiremos em sistemas de videomonitoramento, reconhecimento facial e outras tecnologias para auxiliar no trabalho das forças de segurança e prevenir a criminalidade.</li>
        <li class="proposta-titulo">Integração das Forças de Segurança:</li>
        <li>Promoveremos a integração e a cooperação entre a Guarda Municipal, a Polícia Militar e a Polícia Civil, para garantir uma atuação mais eficiente e coordenada no combate ao crime.</li>
        <li class="proposta-titulo">Prevenção da Violência:</li>
        <li>Desenvolveremos programas sociais e educativos para jovens em situação de vulnerabilidade, com o objetivo de prevenir a violência e promover a cultura da paz.</li>
    </ul>
</div>


<?php $this->start('js'); ?>


<?php $this->end(); ?>