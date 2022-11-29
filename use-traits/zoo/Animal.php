<?php

trait Animal
{
    public $name;
    public $word;
    public function sound()
    {
        echo "$this->name: $this->word, $this->word, $this->word...<br><br>";
    }
}
