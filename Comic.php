<?php

require 'Book.php';

class Comic extends Book
{


    public function __construct(
        $author,
        $title,
        $price,
        $stock,
        $id,
        private array $illustrator,
        private int $vol,
    ) 
    {

        parent::__construct($author, $title, $price, $stock, $id);

    }

    public function getInfo()
    {

        $result = "volumen: {$this->vol}<br>";


        $ul = "<ul>--Ilustradores--";
        foreach ($this->illustrator as $illustrator) {
            $ul.="<li>$illustrator</li>";
        }

        $ul.="</ul>";

        echo parent::getInfo();
        echo $result.= $ul;
    }
}

$comic1 = new Comic(

    'alan',
    'Batman',
    '120',
    '90',
    '1',
    ['Brian', 'Juan', 'Maik'],
    1

);




echo $comic1 -> getInfo();