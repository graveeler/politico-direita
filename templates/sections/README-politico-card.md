# Card Político - Componente

Este componente foi criado baseado na imagem fornecida, replicando o design de um card político com imagem circular e seção de texto verde.

## Estrutura dos Arquivos

- `templates/sections/politico-card.php` - Componente principal
- `templates/assets/css/politico-card.css` - Estilos CSS
- `templates/politico-example.php` - Página de exemplo

## Como Usar

### 1. Incluir o CSS no template
Adicione no cabeçalho da sua página:
```php
<?php $this->start('css'); ?>
<link rel="stylesheet" href="<?= url('templates/assets/css/politico-card.css') ?>">
<?php $this->end(); ?>
```

### 2. Usar o componente em uma página
```php
<?= $this->insert('sections/politico-card'); ?>
```

### 3. Personalizar o conteúdo
Edite o arquivo `politico-card.php` para alterar:
- Imagem do candidato
- Título
- Descrição
- Cores (através do CSS)

## Características do Design

- **Imagem Circular**: Borda amarela (#E7D906) com 8px de espessura
- **Fundo Verde**: #228B22 (verde similar à bandeira brasileira)
- **Texto Branco**: Contraste alto para melhor legibilidade
- **Bordas Arredondadas**: 25px no topo, 0px na parte inferior
- **Sombra**: Efeito de elevação sutil
- **Responsivo**: Adapta-se a diferentes tamanhos de tela

## Customizações Disponíveis

### Cores
```css
/* Borda da imagem */
border: 8px solid #E7D906;

/* Fundo do texto */
background: #228B22;

/* Texto */
color: #ffffff;
```

### Tamanhos
```css
/* Imagem circular */
width: 200px;
height: 200px;

/* Padding do conteúdo */
padding: 30px 25px;
```

### Efeitos
- Hover com elevação
- Animação de entrada
- Transições suaves

## Exemplo de Uso Múltiplo

Para criar uma grade de cards, use a classe `.multiple-cards-section`:

```html
<section class="multiple-cards-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <!-- Card 1 -->
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <!-- Card 2 -->
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <!-- Card 3 -->
            </div>
        </div>
    </div>
</section>
```

## Responsividade

O componente é totalmente responsivo com breakpoints para:
- Desktop (acima de 768px)
- Tablet (768px - 576px)
- Mobile (abaixo de 576px)

## Acessibilidade

- Texto com contraste adequado
- Imagens com alt text
- Estrutura semântica HTML
- Suporte a leitores de tela
