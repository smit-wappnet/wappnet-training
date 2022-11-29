<?php 

class GrandFather
{
    // The Money Atribute is Common for all Classes.
    public $money;

    // This Gold Treasury is only accesible by Grand Father
    private $gold;

    // Constructor to Initialize Gold
    public function __construct($gold)
    {
        $this->gold = $gold;
    }

    // Only Grand father class can call this method.
    private function sell_gold($amount)
    {
        if ($amount > $this->gold) {
            echo "Insufficient Gold<br>";
            return;
        }
        $this->money += $amount;
        echo "Gold of Amount Rs. $amount is Selled by Grandfather<br>";
        $this->gold -= $amount;
    }

    // Any of Grand father child class can call this method
    protected function help_by_grandfather($amount)
    {
        $this->sell_gold($amount);
    }
}