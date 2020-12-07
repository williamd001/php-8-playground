<?php

class Product
{
    public function __construct(
        public string $name,
        public float $price,
        public string $description
    ) {}
}

// without named params

$product1 = new Product(
    'Example Product',
    9.99,
    'A description'
);

var_dump($product1->price);

// with named parameters - note order of parameters doesn't matter when using named params
$product2 = new Product(
    description: 'a wonderful product',
    name: 'Example product',
    price: 13.99
);

var_dump($product2->description);