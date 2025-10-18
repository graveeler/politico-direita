<?php

namespace Source\Support;

use Exception;
use GdImage;

class ImageManipulator
{
    private $backgroundImage;
    private $overlayImages = [];
    private $texts = [];
    private $urlImagePath;

    /**
     * Construtor da classe ImageManipulator.
     * 
     * @param string $backgroundImagePath O caminho da imagem de fundo.
     * @throws Exception Se o caminho da imagem de fundo for inválido.
     */
    public function __construct($backgroundImagePath)
    {
        //debug(gettype($backgroundImagePath));
        //echo json_encode(['tipo' => gettype($backgroundImagePath)]);
     /*   if ($backgroundImagePath instanceof GdImage) {
            $this->backgroundImage = $backgroundImagePath;
        } else {
            if (!file_exists($backgroundImagePath)) {
                throw new Exception('Caminho da imagem de fundo inválido.');
            }
            $this->backgroundImage = $this->createImageFromPath(trim($backgroundImagePath));
        }*/


        if ($backgroundImagePath instanceof GdImage) {
            $this->backgroundImage = $backgroundImagePath;
        } elseif (is_string($backgroundImagePath) && $this->isBase64($backgroundImagePath)) {
            $this->backgroundImage = imagecreatefromstring(base64_decode($backgroundImagePath));
        } else {
            if (!file_exists($backgroundImagePath)) {
                throw new Exception('Caminho da imagem de fundo inválido.');
            }
            $this->backgroundImage = $this->createImageFromPath(trim($backgroundImagePath));
        }
    }

    /**
     * Cria um recurso de imagem a partir do caminho do arquivo de imagem.
     * 
     * @param string $imagePath O caminho do arquivo de imagem.
     * @return resource O recurso de imagem criado.
     * @throws Exception Se o caminho da imagem for inválido.
     */
    private function createImageFromPath($imagePath)
    {
        if (!file_exists($imagePath)) {
            throw new Exception('Caminho da imagem inválido: ' . $imagePath);
        }

        $imageInfo = getimagesize($imagePath);
        $imageType = $imageInfo[2];

        switch ($imageType) {
            case IMAGETYPE_JPEG:
                return imagecreatefromjpeg($imagePath);
            case IMAGETYPE_PNG:
                return imagecreatefrompng($imagePath);
            case IMAGETYPE_GIF:
                return imagecreatefromgif($imagePath);
            case IMAGETYPE_WEBP:
                return imagecreatefromwebp($imagePath);
            case IMAGETYPE_BMP:
                return imagecreatefrombmp($imagePath);
            case IMAGETYPE_WBMP:
                return imagecreatefromwbmp($imagePath);
            default:
                throw new Exception('Tipo de imagem não suportado.');
        }
    }

    /**
     * Adiciona uma imagem de sobreposição.
     * 
     * @param string $name O nome da imagem de sobreposição.
     * @param string $imagePath O caminho da imagem de sobreposição.
     * @param int $x A posição horizontal da imagem de sobreposição.
     * @param int $y A posição vertical da imagem de sobreposição.
     * @return void
     */
    public function addOverlayImage($name, $imagePath, $x, $y)
    {
        $image = $this->createImageFromPath($imagePath);
        $this->overlayImages[$name] = ['image' => $image, 'x' => $x, 'y' => $y];
    }

    /**
     * Adiciona uma frase à imagem.
     * 
     * @param string $name O nome da frase.
     * @param int $size O tamanho da fonte da frase.
     * @param int $x A posição horizontal da frase.
     * @param int $y A posição vertical da frase.
     * @param array $color A cor da frase no formato RGB.
     * @param string $font O caminho da fonte a ser usada.
     * @param string $text A frase a ser adicionada.
     * @return void
     */
    public function addText($name, $size, $x, $y, $color, $font, $text)
    {
        $this->texts[$name] = ['text' => $text, 'x' => $x, 'y' => $y, 'size' => $size, 'font' => $font, 'color' => $color];
    }

    /**
     * Aplica uma imagem de sobreposição específica à imagem de fundo.
     * 
     * @param string $name O nome da imagem de sobreposição.
     * @return void
     */
    public function applyOverlayImage($name)
    {
        $overlay = $this->overlayImages[$name];
        $image = $overlay['image'];
        $x = $overlay['x'];
        $y = $overlay['y'];
        imagecopy($this->backgroundImage, $image, $x, $y, 0, 0, imagesx($image), imagesy($image));
    }

    /**
     * Aplica uma frase específica à imagem de fundo.
     * 
     * @param string $name O nome da frase.
     * @return void
     */
    public function applyText($name)
    {
        $text = $this->texts[$name];
        $color = imagecolorallocate($this->backgroundImage, $text['color'][0], $text['color'][1], $text['color'][2]);
        imagettftext($this->backgroundImage, $text['size'], 0, $text['x'], $text['y'], $color, $text['font'], $text['text']);
    }

    /**
     * Aplica as imagens de sobreposição à imagem de fundo.
     * 
     * @return void
     */
    public function applyOverlayImages()
    {
        foreach ($this->overlayImages as $overlay) {
            $image = $overlay['image'];
            $x = $overlay['x'];
            $y = $overlay['y'];
            imagecopy($this->backgroundImage, $image, $x, $y, 0, 0, imagesx($image), imagesy($image));
        }
    }

    /**
     * Aplica as frases à imagem de fundo.
     * 
     * @return void
     */
    public function applyTexts()
    {
        foreach ($this->texts as $text) {
            $color = imagecolorallocate($this->backgroundImage, $text['color'][0], $text['color'][1], $text['color'][2]);
            imagettftext($this->backgroundImage, $text['size'], 0, $text['x'], $text['y'], $color, $text['font'], $text['text']);
            //imagettftext($imagem, 15, 0, 383, 83, $corTexto, $fonte, "197346825519734");
        }
    }

    /**
     * Modifica as coordenadas X e Y de uma imagem de sobreposição específica.
     * 
     * @param string $name O nome da imagem de sobreposição.
     * @param int $x A nova posição horizontal da imagem de sobreposição.
     * @param int $y A nova posição vertical da imagem de sobreposição.
     * @return void
     */
    public function modifyOverlayImagePosition($name, $x, $y)
    {
        if (isset($this->overlayImages[$name])) {
            $this->overlayImages[$name]['x'] = $x;
            $this->overlayImages[$name]['y'] = $y;
        }
    }

    /**
     * Modifica as coordenadas X e Y de uma frase específica.
     * 
     * @param string $name O nome da frase.
     * @param int $x A nova posição horizontal da frase.
     * @param int $y A nova posição vertical da frase.
     * @return void
     */
    public function modifyTextPosition($name, $x, $y)
    {
        if (isset($this->texts[$name])) {
            $this->texts[$name]['x'] = $x;
            $this->texts[$name]['y'] = $y;
        }
    }

    /**
     * Modifica a fonte de uma frase específica.
     * 
     * @param string $name O nome da frase.
     * @param string $font O caminho da nova fonte.
     * @return string O caminho da nova fonte.
     */
    public function modifyTextFont($name, $font): string
    {
        if (!file_exists($font)) {
            die(__LINE__ . " Font não existe");
        }
        if (isset($this->texts[$name])) {
            $this->texts[$name]['font'] = $font;
        }

        return  $font;
    }

    /**
     * Modifica o tamanho da fonte de uma frase específica.
     * 
     * @param string $name O nome da frase.
     * @param int $size O novo tamanho da fonte.
     * @return void
     */
    public function modifyTextSize($name, $size)
    {
        if (isset($this->texts[$name])) {
            $this->texts[$name]['size'] = $size;
        }
    }

    /**
     * Modifica a cor de uma frase específica.
     * 
     * @param string $name O nome da frase.
     * @param array $color A nova cor da frase no formato RGB.
     * @return void
     */
    public function modifyTextColor($name, $color)
    {
        if (isset($this->texts[$name])) {
            $this->texts[$name]['color'] = $color;
        }
    }

    /**
     * Exibe a imagem com as sobreposições e as frases.
     * 
     * @return void
     */
    public function showImage()
    {
        header('Content-Type: image/jpeg');
        imagejpeg($this->backgroundImage);
    }

    /**
     * Define o caminho onde a imagem será salva.
     * 
     * @param string $path O caminho onde a imagem será salva.
     * @return void
     */
    public function urlSaveImage($path)
    {
        $this->urlImagePath = $path;
    }

    /**
     * Executa as operações na imagem e a salva ou faz upload conforme necessário.
     * 
     * @param string|null $urlImagePath O caminho onde a imagem será salva.
     * @param bool $save Indica se a imagem deve ser salva no disco.
     * @return string|null Retorna a representação base64 da imagem se não for salva no disco.
     */
    public function execute(string $urlImagePath = null, bool $save = false): ?string
    {
        if ($this->texts) {
            $this->applyTexts();
        }

        if ($this->overlayImages) {
            $this->applyOverlayImages();
        }

        if ($urlImagePath !== null) {
            $this->urlImagePath = $urlImagePath;
        } elseif (empty($this->urlImagePath)) {
            throw new Exception('Falta caminho de salvar\n.');
        }

        if ($save) {
            $this->saveImage($this->urlImagePath);
            return null;
        }

        return $this->uploadImage();
    }

    /**
     * Salva a imagem com as sobreposições e as frases em um arquivo.
     * 
     * @param string $path O caminho do arquivo de destino.
     * @return void
     */
    public function saveImage($path)
    {
        if (!imagepng($this->backgroundImage, $path)) {
            throw new Exception('Não foi possível salvar a imagem.');
        }

        imagedestroy($this->backgroundImage);
    }

    /**
     * Converte a imagem com as sobreposições e as frases em base64.
     * 
     * @return string A representação base64 da imagem.
     */
    public function uploadImage(): string
    {
        ob_start();

        if (!imagepng($this->backgroundImage)) {
            throw new Exception('Não foi possível carregar a imagem.');
        }

        $image_data = ob_get_contents();
        ob_end_clean();
        $image_base64 = base64_encode($image_data);

        imagedestroy($this->backgroundImage);

        return $image_base64;
    }

    private function isBase64($string)
    {
        // Verifica o comprimento
        if (strlen($string) % 4 !== 0) {
            return false;
        }

        // Verifica o conjunto de caracteres
        if (!preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $string)) {
            return false;
        }

        // Tenta decodificar
        if (base64_decode($string, true) === false) {
            return false;
        }

        return true;
    }

    /**
     * Destrói os recursos de imagem.
     * 
     * @return void
     */
    public function __destruct()
    {
        imagedestroy($this->backgroundImage);
        foreach ($this->overlayImages as $overlay) {
            imagedestroy($overlay['image']);
        }
    }
}
