<?php

require_once('Animal.php');

class Cat
{
    use Animal;
    public function __construct($name)
    {
        $this->name = $name;
        $this->word = "Meow";
    }
}
?>