<?php

class SEO
{
    private array $metaTags = [];
    private array $pageData;

    public function __construct(array $pageData = [])
    {
        $this->pageData = array_merge_recursive(SEO, $pageData);
    }

    /**
     * Adiciona uma meta tag genérica.
     *
     * @param string $name Nome do atributo 'name' da meta tag.
     * Exemplo: 'author', 'description', 'robots'
     * @param string $content Conteúdo do atributo 'content' da meta tag.
     * Exemplo: 'João da Silva', 'Página sobre tecnologia', 'index, follow'
     */
    public function addMetaTag(string $name, string $content): void
    {
        $this->metaTags[] = "<meta name=\"$name\" content=\"$content\">";
    } // adicionar o prefixo antes da tag e os :

    /**
     * Define a codificação de caracteres do documento.
     *
     * @param string $charset Codificação de caracteres.
     * Exemplo: 'UTF-8', 'ISO-8859-1'
     */
    public function setCharset(string $charset = 'UTF-8'): void
    {
        $this->metaTags[] = "<meta charset=\"$charset\">";
    }

    /**
     * Configura o título da página.
     *
     * @param string $title Título da página. Deve ser descritivo e conciso.
     * Exemplo: 'Minha Loja | Produtos'
     */
    public function setTitle(string $title): void
    {
        $this->metaTags[] = "<title>$title</title>";
    }

    /**
     * Configura a descrição da página.
     *
     * @param string $description Descrição da página. Deve ser relevante e atrativa para aparecer nos resultados de busca.
     * Exemplo: 'Encontre os celulares mais recentes com os melhores preços e condições de pagamento. Entrega rápida e segura.'
     */
    public function setDescription(string $description): void
    {
        $this->metaTags[] = "<meta name=\"description\" content=\"$description\">";
    }

    /**
     * Configura a URL canônica para evitar conteúdo duplicado.
     *
     * @param string $url URL canônica da página. Deve ser a URL preferencial.
     * Exemplo: 'https://www.example.com/pagina-do-produto'
     */
    public function setCanonical(string $url): void
    {
        $this->metaTags[] = "<link rel=\"canonical\" href=\"$url\">";
    }

    /**
     * Configura versões alternativas da página para diferentes idiomas.
     *
     * @param array $languages Array associativo com códigos de idioma e URLs.
     * Exemplo: ['en' => 'https://www.example.com/en/product', 'es' => 'https://www.example.com/es/product']
     */
    public function setAlternateLanguages(array $languages): void
    {
        foreach ($languages as $lang => $url) {
            $this->metaTags[] = "<link rel=\"alternate\" hreflang=\"$lang\" href=\"$url\">";
        }
    }

    /**
     * Configura palavras-chave para a página.
     *
     * @param string $keywords Lista de palavras-chave separadas por vírgula.
     * Exemplo: 'celular, smartphone, comprar celular, preço celular'
     */
    public function setKeywords(string $keywords): void
    {
        $this->metaTags[] = "<meta name=\"keywords\" content=\"$keywords\">";
    }

    /**
     * Define instruções para os robôs dos buscadores.
     *
     * @param string $index Controla se a página deve ser indexada.
     * Exemplo: 'index' (permitir indexação), 'noindex' (não permitir indexação)
     * @param string $follow Controla se os links na página devem ser seguidos.
     * Exemplo: 'follow' (seguir links), 'nofollow' (não seguir links)
     * @param int|null $maxSnippet Comprimento máximo do snippet de texto nos resultados da pesquisa.
     * Exemplo: 160 (máximo de 160 caracteres), -1 (ilimitado)
     * @param string|null $maxImagePreview Tamanho máximo da prévia da imagem.
     * Exemplo: 'none' (sem prévia), 'standard' (padrão), 'large' (grande)
     * @param int|null $maxVideoPreview Duração máxima do preview do vídeo.
     * Exemplo: 60 (máximo de 60 segundos), -1 (ilimitado)
     */
    public function setRobots(string $index = 'index', string $follow = 'follow', ?int $maxSnippet = -1, ?string $maxImagePreview = null, ?int $maxVideoPreview = -1): void
    {
        $robots = "$index, $follow";
        if ($maxSnippet !== -1) {
            $robots .= ", max-snippet:$maxSnippet";
        }
        if ($maxImagePreview !== null) {
            $robots .= ", max-image-preview:$maxImagePreview";
        }
        if ($maxVideoPreview !== -1) {
            $robots .= ", max-video-preview:$maxVideoPreview";
        }
        $this->metaTags[] = "<meta name=\"robots\" content=\"$robots\">";
    }

    /**
     * Configura informações de direitos autorais.
     *
     * @param string $author Nome do autor ou empresa.
     * Exemplo: 'João da Silva', 'Empresa X'
     * @param string $publisher Nome do editor ou empresa.
     * Exemplo: 'Editora Y', 'Distribuidora Z'
     * @param string $copyright Informação de direitos autorais.
     * Exemplo: '© 2025 <Nome da Empresa> Todos os direitos reservados'
     */
    public function setCopyrightInfo(string $author, string $publisher, string $copyright): void
    {
        $this->metaTags[] = "<meta name=\"author\" content=\"$author\">";
        $this->metaTags[] = "<meta name=\"publisher\" content=\"$publisher\">";
        $this->metaTags[] = "<meta name=\"copyright\" content=\"$copyright\">";
    }

    /**
     * Define a política de segurança de conteúdo (CSP).
     *
     * @param string $policy A política de segurança (uma string com diretivas separadas por ponto e vírgula).
     * Exemplo: "default-src 'self'; script-src 'self' https://trusted-scripts.com; style-src 'self' 'unsafe-inline'"
     */
    public function setContentSecurityPolicy(string $policy): void
    {
        $this->metaTags[] = "<meta http-equiv=\"Content-Security-Policy\" content=\"$policy\">";
    }

    /**
     * Configura as meta tags do Facebook Open Graph.
     *
     * @param string $title Título do conteúdo.
     * Exemplo: 'Novo Smartphone Galaxy S24+'
     * @param string $description Descrição do conteúdo.
     * Exemplo: 'Conheça o novo Galaxy S24+ com câmera aprimorada e bateria de longa duração.'
     * @param string $url URL do conteúdo.
     * Exemplo: 'https://www.example.com/galaxy-s24-plus'
     * @param string $image URL da imagem de destaque.
     * Exemplo: 'https://www.example.com/imagens/galaxy-s24-plus.jpg'
     * @param string $siteName Nome do site.
     * Exemplo: 'Loja de Eletrônicos X'
     * @param string $type Tipo de conteúdo.
     * Exemplo: 'website', 'article', 'product'
     * @param string $appId ID do aplicativo Facebook (opcional).     
     * Exemplo: '1234567890'
     * @param string $admins IDs de administradores do Facebook (opcional).
     * Exemplo: '100001,100002'
     * @param string $locale Localidade
     * Exemplo: 'pt_BR', 'en_US'
     */
    public function openGrafic(string $title, string $description, string $url, string $image, string $siteName, string $type = 'article', string $appId = '', string $admins = '', string $locale = 'pt_BR'): void
    {
        $this->metaTags[] = "<meta property=\"og:url\" content=\"$url\">";
        $this->metaTags[] = "<meta property=\"og:type\" content=\"$type\">";
        $this->metaTags[] = "<meta property=\"og:title\" content=\"$title\">";
        $this->metaTags[] = "<meta property=\"og:site_name\" content=\"$siteName\">";
        $this->metaTags[] = "<meta property=\"og:locale\" content=\"$locale\">";
        $this->metaTags[] = "<meta property=\"og:image\" content=\"$image\">";
        $this->metaTags[] = "<meta property=\"og:description\" content=\"$description\">";
    }

    /**
     * Configura as meta tags do Twitter Card.
     *
     * @param string $card Tipo de cartão do Twitter.
     * Exemplo: 'summary', 'summary_large_image', 'app', 'player'
     * @param string $title Título do conteúdo.
     * Exemplo: 'Novo Smartphone Galaxy S24+'
     * @param string $description Descrição do conteúdo.
     * Exemplo: 'Conheça o novo Galaxy S24+ com câmera aprimorada e bateria de longa duração.'
     * @param string $image URL da imagem de destaque.
     * Exemplo: 'https://www.example.com/imagens/galaxy-s24-plus-twitter.jpg'
     * @param string $site Nome de usuário do Twitter do site.
     * Exemplo: '@loja_x'
     * @param string $creator Nome de usuário do Twitter do autor.
     * Exemplo: '@joao_silva'
     * @param string $imageAlt Descrição alternativa da imagem para acessibilidade.
     * Exemplo: 'Imagem do Smartphone Galaxy S24+'
     */
    public function twitter(string $card, string $title, string $description, string $image, string $site, string $creator, string $imageAlt = '', string $label1 = '', string $data1 = '', string $label2 = '', string $data2 = ''): void
    {
        $this->metaTags[] = "<meta name=\"twitter:card\" content=\"$card\">";
        $this->metaTags[] = "<meta name=\"twitter:title\" content=\"$title\">";
        $this->metaTags[] = "<meta name=\"twitter:description\" content=\"$description\">";
        $this->metaTags[] = "<meta name=\"twitter:image\" content=\"$image\">";
        $this->metaTags[] = "<meta name=\"twitter:site\" content=\"$site\">";
        $this->metaTags[] = "<meta name=\"twitter:creator\" content=\"$creator\">";
    }


    /**
     * Configura as meta tags do Schema.org (itemprop).
     *
     * @param string $url URL do conteúdo.
     * Exemplo: 'https://www.example.com/pagina-do-produto'
     * @param string $name Nome do conteúdo.
     * Exemplo: 'Nome do Produto'
     * @param string $image URL da imagem do conteúdo.
     * Exemplo: 'https://www.example.com/imagem-do-produto.jpg'
     * @param string $description Descrição do conteúdo.
     * Exemplo: 'Descrição detalhada do produto.'
     * @param string $author Nome do autor do conteúdo.
     * Exemplo: 'Nome do Autor'
     * @param string $datePublished Data de publicação do conteúdo.
     * Exemplo: '2024-07-28'
     * @param string $dateModified Data de modificação do conteúdo.
     * Exemplo: '2024-07-29'
     */
    public function itemprop($url, $name, $image, $description, $author, $datePublished, $dateModified)
    {
        $this->metaTags[] = "<meta itemprop=\"url\" content=\"$url\">";
        $this->metaTags[] = "<meta itemprop=\"name\" content=\"$name\">";
        $this->metaTags[] = "<meta itemprop=\"image\" content=\"$image\">";
        $this->metaTags[] = "<meta itemprop=\"description\" content=\"$description\">";
        $this->metaTags[] = "<meta itemprop=\"author\" content=\"$author\">";
        $this->metaTags[] = "<meta itemprop=\"datePublished\" content=\"$datePublished\">";
        $this->metaTags[] = "<meta itemprop=\"dateModified\" content=\"$dateModified\">";
    }

    public function article(): void
    {
        $this->metaTags[] = "<meta property=\"article:published_time\" content=\"2025-04-03T20:37:15-03:00\">";
        $this->metaTags[] = "<meta property=\"article:modified_time\" content=\"2025-04-03T20:37:15-03:00\">";
        $this->metaTags[] = "<meta property=\"article:author\" content=\"https://developers.facebook.com/nome-do-autor/{$fbAu}\">";
        $this->metaTags[] = "<meta property=\"article:section\" content=\"Categoria do Artigo\">";
    }

    /**
     * Configura metadados Dublin Core.
     *
     * @param string $title Título da página.
     * Exemplo: 'Página Inicial'
     * @param string $creator Criador da página.
     * Exemplo: 'João da Silva'
     * @param string $subject Assunto da página.
     * Exemplo: 'Tecnologia'
     * @param string $description Descrição da página.
     * Exemplo: 'Descrição da página inicial do site de tecnologia.'
     * @param string $publisher Editor da página.
     * Exemplo: 'Empresa X'
     * @param string $contributor Colaborador da página.
     * Exemplo: 'Maria Souza'
     * @param string $date Data da página.
     * Exemplo: '2024-07-28'
     * @param string $type Tipo de conteúdo da página.
     * Exemplo: 'Text'
     * @param string $format Formato do conteúdo da página.
     * Exemplo: 'text/html'
     * @param string $identifier Identificador da página.
     * Exemplo: 'https://www.example.com/'
     * @param string $language Idioma da página.
     * Exemplo: 'pt-BR'
     * @param string $coverage Abrangência da página.
     * Exemplo: 'Brasil'
     * @param string $rights Direitos autorais da página.
     * Exemplo: '© 2024 Empresa X'
     */
    public function dublinCore(string $title, string $creator, string $subject, string $description, string $publisher, string $contributor, string $date, string $type, string $format, string $identifier, string $language, string $coverage, string $rights): void
    {
        $this->metaTags[] = "<meta name=\"DC.title\" content=\"$title\">";
        $this->metaTags[] = "<meta name=\"DC.creator\" content=\"$creator\">";
        $this->metaTags[] = "<meta name=\"DC.subject\" content=\"$subject\">";
        $this->metaTags[] = "<meta name=\"DC.description\" content=\"$description\">";
        $this->metaTags[] = "<meta name=\"DC.publisher\" content=\"$publisher\">";
        $this->metaTags[] = "<meta name=\"DC.contributor\" content=\"$contributor\">";
        $this->metaTags[] = "<meta name=\"DC.date\" content=\"$date\">";
        $this->metaTags[] = "<meta name=\"DC.type\" content=\"$type\">";
        $this->metaTags[] = "<meta name=\"DC.format\" content=\"$format\">";
        $this->metaTags[] = "<meta name=\"DC.identifier\" content=\"$identifier\">";
        $this->metaTags[] = "<meta name=\"DC.language\" content=\"$language\">";
        $this->metaTags[] = "<meta name=\"DC.coverage\" content=\"$coverage\">";
        $this->metaTags[] = "<meta name=\"DC.rights\" content=\"$rights\">";
    }

    /**
     * Indica qual ferramenta foi usada para gerar a página.
     *
     * @param string $generator Nome do CMS ou ferramenta.
     * Exemplo: 'WordPress 6.5', 'Dreamweaver CS6'
     */
    public function setGenerator(string $generator): void
    {
        $this->metaTags[] = "<meta name=\"generator\" content=\"$generator\">";
    }

    /**
     * Define o link curto para a página.
     *
     * @param string $url URL curta da página.
     * Exemplo: 'https://www.example.com/p123'
     */
    public function setShortlink(string $url): void
    {
        $this->metaTags[] = "<link rel=\"shortlink\" href=\"$url\">";
    }

    /**
     * Preconecta a um servidor para melhorar o carregamento de recursos.
     *
     * @param string $href URL do servidor para preconectar.
     * Exemplo: 'https://fonts.googleapis.com'
     */
    public function setPreconnect(string $href): void
    {
        $this->metaTags[] = "<link rel=\"preconnect\" href=\"$href\">";
    }

    /**
     * Realiza a resolução de DNS de um domínio antecipadamente.
     *
     * @param string $href URL do domínio para resolver o DNS.
     * Exemplo: 'https://www.google-analytics.com'
     */
    public function setDnsPrefetch(string $href): void
    {
        $this->metaTags[] = "<link rel=\"dns-prefetch\" href=\"$href\">";
    }

    /**
     * Define o arquivo de manifesto para Progressive Web Apps (PWAs).
     *
     * @param string $href URL do arquivo de manifesto.
     * Exemplo: '/manifest.json'
     */
    public function setManifest(string $href): void
    {
        $this->metaTags[] = "<link rel=\"manifest\" href=\"$href\">";
    }

    /**
     * Define o feed RSS da página.
     *
     * @param string $type O tipo de feed.
     * Exemplo: 'application/rss+xml'
     * @param string $title O título do feed.
     * Exemplo: 'Feed de Notícias'
     * @param string $href URL do feed RSS.
     * Exemplo: '/rss.xml'
     */
    public function setRss(string $type, string $title, string $href): void
    {
        $this->metaTags[] = "<link rel=\"alternate\" type=\"$type\" title=\"$title\" href=\"$href\">";
    }

    /**
     * Renderiza todas as meta tags configuradas.
     *
     * @return string String contendo todas as meta tags, separadas por quebras de linha.
     */
    public function render(): string
    {
        return implode("\n", $this->metaTags);
    }
}
