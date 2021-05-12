<?php 
class Product {
    protected $category;    
    protected $img;


    // costruttore
    public function __construct($_category, $_img)
    {
        $this->category = $_category;          
        $this->img = $_img;     
    }

    // metodi
    public function getCategory()
    {
        return $this->category;
    }
    public function getImg()
    {
        return $this->img;
    }   
}

class Guitar extends Product {
    public $brand;
    public $model;
    protected $price;   
    // costruttore
    public function __construct($_category, $_img, $_brand, $_model, $_price)
    {
        parent::__construct($_category, $_img);
        $this->brand = $_brand;
        $this->model = $_model;        
        $this->price = $_price;
    }
    // metodi
    public function getCategory()
    {
        return $this->category;
    }
    public function getImg()
    {
        return $this->img;
    }    
    public function getPrice()
    {
        return $this->price;
    }
}

$guitar_1 = new Guitar('Chitarra', 'https://d1aeri3ty3izns.cloudfront.net/media/53/533861/600/preview.jpg', 'Gibson', 'Les Paul', 3500);
$guitar_2 = new Guitar('Chitarra', 'https://thumbs.static-thomann.de/thumb/orig/pics/prod/496368.jpg', 'Fender', 'Stratocaster', 1250);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prodotti</title>
    </head>
    <body>
        <h2>Single Cut</h2>
        <ul>
            <li>Categoria: <?php echo $guitar_2->getCategory()?></li>
            <li>Marca: <?php echo $guitar_1->brand?></li>
            <li>Modello: <?php echo $guitar_1->model?></li>
            <li>Prezzo: <?php echo $guitar_1->getPrice()?> €</li>
        </ul>
        <img src="<?php echo $guitar_1->getImg()?>" alt="">

        <h2>Strato Style</h2>
        <ul>
            <li>Categoria: <?php echo $guitar_2->getCategory()?></li>
            <li>Marca: <?php echo $guitar_2->brand?></li>
            <li>Modello: <?php echo $guitar_2->model?></li>
            <li>Prezzo:<?php echo $guitar_2->getPrice()?> €</li>
        </ul>
        <img src="<?php echo $guitar_2->getImg()?>" alt="">

    </body>
</html>