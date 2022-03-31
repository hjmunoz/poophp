<?php

class Book
{


    //propiedades: caracteristicas de los objetos

    //metodos
    public function __construct(
        public string $author,
        private string $title,
        private float $price,
        private int $stock,
        private int $id
    ) {
    }

    public function getInfo()
    {

        $info =
            "<b>Titulo: {$this->title}</b><br>
        Escrito por: {$this->author}<br>
        Precio: {$this->price} <br>
        Codigo:{$this->id}<br>";

        if ($this->stock > 0) {
            $info .= "Piezas disponibles: <span style='color:blue'>{$this->stock}<br></span>";
        } else {
            $info .= "Piezas disponibles: <span style='color:red'>No disponible</span>";
        }

        return $info;
    }
}

//instancia de la clase Book
$book1 = new Book(
    "Jorge",
    "Rebelion de la granja",
    199.90,
    100,
    1
);


//echo $book1->getInfo();

echo "<br>";

$book2 = new Book(
    "Camilo",
    "Guerra fria",
    150.00,
    10,
    2
);

//echo $book2->getInfo();
