<?php

// old way of doing it
class Person
{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$flatmate = new Person('Bob', 32);

var_dump($flatmate->name);

// new way offered in php 8 using constructor property promotion

class Php8Person
{
    public function __construct(public string $name, public int $age) {}
}

$php8Person = new Php8Person('Harry', 43);

var_dump($php8Person->name);