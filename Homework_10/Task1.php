<?php

class City  
{
    private $name, $population;

    public function __construct(string $name, int $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
    
    public function dataAboutCity()
    {
        echo $this->name . " " . $this->population . " мешканців" . PHP_EOL;
    }
}

$Kharkiv = new City("Kharkiv", 1443207);
$Kharkiv-> dataAboutCity();

$Kyiv = new City("Kyiv", 2967360);
$Kyiv->dataAboutCity();

$Lviv = new City("Lviv", 724314);
$Lviv->dataAboutCity();

$Odesa = new City("Odesa", 1029049);
$Odesa->dataAboutCity();

$Vinytsya = new City("Vinytsya", 384840);
$Vinytsya->dataAboutCity();

$Dnipro = new City("Dnipro", 1080846);
$Dnipro->dataAboutCity();

$Poltava = new City("Poltava", 317998);
$Poltava->dataAboutCity();	