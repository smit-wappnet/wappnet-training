<?php

abstract class Animal
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function sound();
}
?>