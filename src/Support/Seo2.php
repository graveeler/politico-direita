<?php

class SEO
{
    private array $metaTags = [];
    private array $pageData;

    public function __construct(array $pageData = [])
    {
        $this->pageData = array_merge_recursive(SEO_CONSTS, $pageData);
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
    }

    /**
     * Define a codificação de caracteres do documento.
     *
     * @param string $charset Codificação de caracteres.
     * Exemplo: 'UTF-8', 'ISO-8859-1'
     */
    public function charset(string $charset = 'UTF-8'): void
    {
        $this->metaTags[] = "<meta charset=\"$charset\">";
    }

    /**
     * Configura o título da página.
     *
     * @param string $title Título da página.
     * Exemplo: 'Minha Loja | Produtos'
     */
    public function title(string $title): void
    {
        $this->metaTags[] = "<title>$title</title>";
    }

    /**
     * Configura a descrição da página.
     *
     * @param string $description Descrição da página.
     * Exemplo: 'Encontre os celulares mais recentes...'
     */
    public function description(string $description): void
    {
        $this->metaTags[] = "<meta name=\"description\" content=\"$description\">";
    }

    /**
     * Configura a URL canônica para evitar conteúdo duplicado.
     *
     * @param string $url URL canônica da página.
     */
    public function canonical(string $url): void
    {
        $this->metaTags[] = "<link rel=\"canonical\" href=\"$url\">";
    }

    /**
     * Configura versões alternativas da página para diferentes idiomas.
     *
     * @param array $languages Array associativo com códigos de idioma e URLs.
     * Exemplo: ['en' => 'https://www.example.com/en/product', 'es' => 'https://www.example.com/es/product']
     */
    public function alternateLanguages(array $languages): void
    {
        foreach ($languages as $lang => $url) {
            $this->metaTags[] = "<link rel=\"alternate\" hreflang=\"$lang\" href=\"$url\">";
        }
    }

    /**
     * Configura palavras-chave para a página.
     *
     * @param string $keywords Lista de palavras-chave separadas por vírgula.
     */
    public function keywords(string $keywords): void
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
     * @param int|null $maxSnippet Comprimento máximo do snippet de texto.
     * Exemplo: 160 (máximo de 160 caracteres), -1 (ilimitado)
     * @param string|null $maxImagePreview Tamanho da prévia da imagem.
     * Exemplo: 'none', 'standard', 'large'
     * @param int|null $maxVideoPreview Duração máxima do preview do vídeo.
     * Exemplo: 60 (máximo de 60 segundos), -1 (ilimitado)
     */
    public function robots(
        string $index = 'index',
        string $follow = 'follow',
        ?int $maxSnippet = -1,
        ?string $maxImagePreview = null,
        ?int $maxVideoPreview = -1
    ): void {
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
     * @param string $publisher Nome do editor ou empresa.
     * @param string $copyright Informação de direitos autorais.
     */
    public function copyrightInfo(string $author, string $publisher, string $copyright): void
    {
        $this->metaTags[] = "<meta name=\"author\" content=\"$author\">";
        $this->metaTags[] = "<meta name=\"publisher\" content=\"$publisher\">";
        $this->metaTags[] = "<meta name=\"copyright\" content=\"$copyright\">";
    }

    /**
     * Define a política de segurança de conteúdo (CSP).
     *
     * @param string $policy A política de segurança.
     * Exemplo: "default-src 'self'; script-src 'self' https://trusted-scripts.com; ..."
     */
    public function contentSecurityPolicy(string $policy): void
    {
        $this->metaTags[] = "<meta http-equiv=\"Content-Security-Policy\" content=\"$policy\">";
    }

    /**
     * Configura as meta tags do Facebook Open Graph.
     */
    public function openGraph(): void
    {
        $og = $this->pageData['og'];
        $this->metaTags[] = "<meta property=\"og:url\" content=\"" . $og['url'] ?? $this->pageData['base']['url'] . "\">";
        $this->metaTags[] = "<meta property=\"og:type\" content=\"{$og['type']}\">";
        $this->metaTags[] = "<meta property=\"og:title\" content=\"{$og['title']}\">";
        $this->metaTags[] = "<meta property=\"og:site_name\" content=\"{$og['site_name']}\">";
        $this->metaTags[] = "<meta property=\"og:locale\" content=\"{$og['locale']}\">";
        $this->metaTags[] = "<meta property=\"og:image\" content=\"{$og['image']}\">";
        $this->metaTags[] = "<meta property=\"og:description\" content=\"{$og['description']}\">";

        if ($og['app_id']) {
            $this->metaTags[] = "<meta property=\"fb:app_id\" content=\"{$og['app_id']}\">";
        }
        if ($og['admins']) {
            $this->metaTags[] = "<meta property=\"fb:admins\" content=\"{$og['admins']}\">";
        }
    }

    /**
     * Configura as meta tags do Twitter Card.
     *
     */
    public function twitter(): void
    {
        $twitter = $this->pageData['twitter'];
        $this->metaTags[] = "<meta name=\"twitter:card\" content=\"{$twitter['card']}\">";
        $this->metaTags[] = "<meta name=\"twitter:title\" content=\"{$twitter['title']}\">";
        $this->metaTags[] = "<meta name=\"twitter:description\" content=\"{$twitter['description']}\">";
        $this->metaTags[] = "<meta name=\"twitter:image\" content=\"{$twitter['image']}\">";
        $this->metaTags[] = "<meta name=\"twitter:site\" content=\"{$twitter['site']}\">";
        $this->metaTags[] = "<meta name=\"twitter:creator\" content=\"{$twitter['creator']}\">";
    }

    /**
     * Configura as meta tags do Schema.org (itemprop).
     *
     */
    public function schema(): void
    {
        $itemprop = $this->pageData['itemprop'];
        $this->metaTags[] = "<meta itemprop=\"name\" content=\"{$itemprop['name']}\">";
        $this->metaTags[] = "<meta itemprop=\"description\" content=\"{$itemprop['description']}\">";
        $this->metaTags[] = "<meta itemprop=\"image\" content=\"{$itemprop['image']}\">";
        $this->metaTags[] = "<meta itemprop=\"url\" content=\"" . $itemprop['url'] ?? $this->pageData['base']['url'] . "\">";
        $this->metaTags[] = "<meta itemprop=\"author\" content=\"{$itemprop['author']}\">";
        $this->metaTags[] = "<meta itemprop=\"datePublished\" content=\"{$itemprop['datePublished']}\">";
        $this->metaTags[] = "<meta itemprop=\"dateModified\" content=\"{$itemprop['dateModified']}\">";
    }

    /**
     * Configura os metadados Dublin Core.
     */
    public function dublinCore(): void
    {
        $dc = $this->pageData['dublin_core'];
        $this->metaTags[] = "<meta name=\"DC.title\" content=\"{$dc['title']}\">";
        $this->metaTags[] = "<meta name=\"DC.creator\" content=\"{$dc['creator']}\">";
        $this->metaTags[] = "<meta name=\"DC.subject\" content=\"{$dc['subject']}\">";
        $this->metaTags[] = "<meta name=\"DC.description\" content=\"{$dc['description']}\">";
        $this->metaTags[] = "<meta name=\"DC.publisher\" content=\"{$dc['publisher']}\">";
        $this->metaTags[] = "<meta name=\"DC.contributor\" content=\"{$dc['contributor']}\">";
        $this->metaTags[] = "<meta name=\"DC.date\" content=\"{$dc['date']}\">";
        $this->metaTags[] = "<meta name=\"DC.type\" content=\"{$dc['type']}\">";
        $this->metaTags[] = "<meta name=\"DC.format\" content=\"{$dc['format']}\">";
        $this->metaTags[] = "<meta name=\"DC.identifier\" content=\"{$dc['identifier']}\">";
        $this->metaTags[] = "<meta name=\"DC.language\" content=\"{$dc['language']}\">";
        $this->metaTags[] = "<meta name=\"DC.coverage\" content=\"{$dc['coverage']}\">";
        $this->metaTags[] = "<meta name=\"DC.rights\" content=\"{$dc['rights']}\">";
    }

    /**
     * Indica qual ferramenta foi usada para gerar a página.
     *
     * @param string $generator Nome do CMS, ferramenta ou  criador do projeto.
     */
    public function generator(string $generator): void
    {
        $this->metaTags[] = "<meta name=\"generator\" content=\"$generator\">";
    }

    /**
     * Define o link curto para a página.
     *
     * @param string $url URL curta da página.
     */
    public function shortlink(string $url): void
    {
        $this->metaTags[] = "<link rel=\"shortlink\" href=\"$url\">";
    }

    /**
     * Preconecta a um servidor para melhorar o carregamento de recursos.
     *
     * @param string $href URL do servidor para preconectar.
     */
    public function preconnect(string $href): void
    {
        $this->metaTags[] = "<link rel=\"preconnect\" href=\"$href\">";
    }

    /**
     * Realiza a resolução de DNS de um domínio antecipadamente.
     *
     * @param string $href URL do domínio para resolver o DNS.
     */
    public function dnsPrefetch(string $href): void
    {
        $this->metaTags[] = "<link rel=\"dns-prefetch\" href=\"$href\">";
    }

    /**
     * Define o arquivo de manifesto para Progressive Web Apps (PWAs).
     *
     * @param string $href URL do arquivo de manifesto.
     */
    public function manifest(string $href): void
    {
        $this->metaTags[] = "<link rel=\"manifest\" href=\"$href\">";
    }

    /**
     * Define o feed RSS da página.
     *
     * @param string $type O tipo de feed.
     * @param string $title O título do feed.
     * @param string $href URL do feed RSS.
     */
    public function rss(string $type, string $title, string $href): void
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

    public function GeneralTags($basicTags = false): void
    {
        if($basicTags){
            $this->charset();
        }

        $this->setKeywords($this->pageData['general']['keywords']);
        $this->setCopyrightInfo(
            $this->pageData['general']['author'],
            $this->pageData['general']['publisher'],
            $this->pageData['general']['copyright']
        );
    }
}