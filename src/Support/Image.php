<?php

namespace Source\Support;

class Image  
{
    public function __construct(private string $mainImage)
    {
        $array = explode(".", $caminho);
        $extension =  $array[count($array) - 1];
       
        if($extension == 'jpeg' || $extension == 'jpg'){
            $this->mainImage = imagecreatefromjpeg($imagemOriginal);
        }

        if($extension == 'png'){
            $this->mainImage = imagecreatefrompng($imagemOriginal);
        }
    }

    public function addOverlayImage(string $image,string $positionX, string $positionY, int $width, int $hight)
    {
        if (!file_exists($image)) {
            die("Arquivo de imagem não encontrado.");
        }

        $imagem = imagecreatefromjpeg($imagemOriginal);
        //imagecopy($imagem, $qrcodeCarteirinha, $posicaoX, $posicaoY, 0, 0, $larguraqrcodeCarteirinha, $alturaqrcodeCarteirinha);

        imagecopy($this->mainImage, $image, 446, 370, 0, 0, 150, 150);

        bool imagecopy ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h )

    }

    public function save()
    {
        imagejpeg($imagem, dirname(__DIR__, 1) .  "/cdn/assets/images/technical_report/" . "tttttttt" . ".png");
    }
    

    public function destinationPath()
    {
        
    }







    // Caminho para a imagem original
$imagemOriginal = "file:///C:/xampp/htdocs/development/2023/PHP/Autismo/cdn/assets/images/outras_imagens/carteirinha_semi_final.jfif";         // imagem de fundo

if (!file_exists($imagemOriginal)) {
    die("Arquivo de imagem não encontrado.");
}

$qrcode = "file:///C:/xampp/htdocs/development/2023/PHP/Autismo/cdn/assets/images/qrcode_image_path/93a6d18968b9a2e6ba4a5cad947d26b.png"; 

if (!file_exists($qrcode)) {
    die("Arquivo de imagem não encontrado.(qrcodeCarteirinha)");
}

$photo = "file:///C:/xampp/htdocs/development/2023/PHP/Autismo/cdn/assets/images/photo_path/93a6d18968b9a2e6ba4a5cad947d26b.jpeg"; 
             

if (!file_exists($photo)) {
    die("Arquivo de imagem não encontrado.(PhotoCarteirinha)");
}

// Carrega a imagem original
$imagem = imagecreatefromjpeg($imagemOriginal); // imagem de fundo

$qrcodeCarteirinha = imagecreatefrompng($qrcode);

$photoCarteirinha = imagecreatefromjpeg($photo);

//-----------------------------------------------------------------------------------------------------------------
// QRCODE
//imagecopy($imagem, $qrcodeCarteirinha, $posicaoX, $posicaoY, 0, 0, $larguraqrcodeCarteirinha, $alturaqrcodeCarteirinha);
imagecopy($imagem, $qrcodeCarteirinha, 446, 370, 0, 0, 150, 150);

// FOTO
//imagecopy($imagem, $qrcodeCarteirinha, $posicaoX, $posicaoY, 0, 0, $larguraqrcodeCarteirinha, $alturaqrcodeCarteirinha);
imagecopy($imagem, $photoCarteirinha, 120, 200, 0, 0, 113, 151); // 3x4 em pixels =  354 x 472 pixels online  113,4 x 151,2
//-----------------------------------------------------------------------------------------------------------------

// Define a cor do texto (preto)
$corTexto = imagecolorallocate($imagem, 0, 0, 0);

// Define a fonte para o texto (neste exemplo, Arial)
$fonte = dirname(__DIR__, 1) .  "/cdn/assets/images/technical_report/" . "CourierPrime-Regular" . ".ttf"; // Certifique-se de ter o arquivo de fonte TrueType (TTF) disponível

// Texto a ser adicionado na imagem
$texto = '123456789123456';

//cartão sus
imagettftext($imagem, 15, 0, 428, 88, $corTexto, $fonte, "197346825519734");

//cpf
imagettftext($imagem, 15, 0, 434, 140, $corTexto, $fonte, "025.236.365-98");

//nascimento
imagettftext($imagem, 12, 0, 390, 194, $corTexto, $fonte, "17/05/2020");

//Tipo sanguineo
imagettftext($imagem, 12, 0, 580, 194, $corTexto, $fonte, "AB+");

//responsável 1
imagettftext($imagem, 10, 0, 390, 255, $corTexto, $fonte, "Aureliano de Castro Sobrinho Neto"); //cabem 32 caracteres no responsavel

//responsável 2
imagettftext($imagem, 10, 0, 390, 285, $corTexto, $fonte, "Mayara Marcolino de Castro"); //cabem 32 caracteres no responsavel

//telefones
imagettftext($imagem, 10, 0, 385, 350, $corTexto, $fonte, "(82) 99948-8465 / (82) 99990-6737"); //cabem 32 caracteres no responsavel

// Define o cabeçalho para indicar que a saída é uma imagem JPEG
//header('Content-Type: image/jpeg');

// Exibe a imagem processada
//imagejpeg($imagem);
imagejpeg($imagem, dirname(__DIR__, 1) .  "/cdn/assets/images/technical_report/" . "tttttttt" . ".png");


// Libera a memória usada pela imagem
imagedestroy($imagem);

}





class ImageManipulator
{
    private $backgroundImage;
    private $overlayImages = [];
    private $phrases = [];

    /**
     * Construtor da classe ImageManipulator.
     * 
     * @param string $backgroundImagePath O caminho da imagem de fundo.
     * @throws Exception Se o caminho da imagem de fundo for inválido.
     */
    public function __construct($backgroundImagePath)
    {
        if (!file_exists($backgroundImagePath)) {
            throw new Exception('Caminho da imagem de fundo inválido.');
        }
        $this->backgroundImage = imagecreatefromjpeg($backgroundImagePath);
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
            default:
                throw new Exception('Tipo de imagem não suportado: ' . $imagePath);
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
     * @throws Exception Se o caminho da imagem for inválido.
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
     * @param string $phrase A frase a ser adicionada.
     * @param int $x A posição horizontal da frase.
     * @param int $y A posição vertical da frase.
     * @param int $size O tamanho da fonte da frase.
     * @param array $color A cor da frase no formato RGB.
     * @return void
     */
    public function addPhrase($name, $phrase, $x, $y, $size, $color)
    {
        $this->phrases[$name] = ['text' => $phrase, 'x' => $x, 'y' => $y, 'size' => $size, 'color' => $color];
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
        imagecopy($this->backgroundImage, $overlay['image'], $overlay['x'], $overlay['y'], 0, 0, imagesx($overlay['image']), imagesy($overlay['image']));
    }

    /**
     * Aplica uma frase específica à imagem de fundo.
     * 
     * @param string $name O nome da frase.
     * @return void
     */
    public function applyPhrase($name)
    {
        $phrase = $this->phrases[$name];
        $color = imagecolorallocate($this->backgroundImage, $phrase['color'][0], $phrase['color'][1], $phrase['color'][2]);
        imagettftext($this->backgroundImage, $phrase['size'], 0, $phrase['x'], $phrase['y'], $color, 'arial.ttf', $phrase['text']);
    }

    /**
     * Modifica o tamanho da fonte de uma frase específica.
     * 
     * @param string $name O nome da frase.
     * @param int $size O novo tamanho da fonte.
     * @return void
     */
    public function modifyPhraseFontSize($name, $size)
    {
        if (isset($this->phrases[$name])) {
            $this->phrases[$name]['size'] = $size;
        }
    }

    /**
     * Modifica a cor de uma frase específica.
     * 
     * @param string $name O nome da frase.
     * @param array $color A nova cor da frase no formato RGB.
     * @return void
     */
    public function modifyPhraseColor($name, $color)
    {
        if (isset($this->phrases[$name])) {
            $this->phrases[$name]['color'] = $color;
        }
    }


    /**
     * Aplica todas as imagens de sobreposição à imagem de fundo.
     * 
     * @return void
     */
    public function applyOverlayImages()
    {
        foreach ($this->overlayImages as $name => $overlay) {
            $this->applyOverlayImage($name);
        }
    }

    /**
     * Aplica todas as frases à imagem de fundo.
     * 
     * @return void
     */
    public function applyPhrases()
    {
        foreach ($this->phrases as $name => $phrase) {
            $this->applyPhrase($name);
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
    public function modifyPhrasePosition($name, $x, $y)
    {
        if (isset($this->phrases[$name])) {
            $this->phrases[$name]['x'] = $x;
            $this->phrases[$name]['y'] = $y;
        }
    }

    /**
     * Modifica o tamanho da fonte de uma frase específica.
     * 
     * @param string $name O nome da frase.
     * @param int $size O novo tamanho da fonte.
     * @return void
     */
    public function modifyPhraseSize($name, $size)
    {
        if (isset($this->phrases[$name])) {
            $this->phrases[$name]['size'] = $size;
        }
    }


    /**
     * Salva a imagem com as sobreposições e as frases em um arquivo.
     * 
     * @param string $path O caminho do arquivo de destino.
     * @return void
     */
    public function saveImage($path)
    {
        imagejpeg($this->backgroundImage, $path);
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
