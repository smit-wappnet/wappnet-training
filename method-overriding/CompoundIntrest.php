<?php

require_once('./SimpleIntrest.php');

class CompoundIntrest extends SimpleIntrest
{
    public function __construct($amount, $rate, $years)
    {
        parent::__construct($amount, $rate, $years);
    }

    public function calculate()
    {
        $intrest = $this->amount * (pow(((100 + $this->rate) / 100), $this->years) - 1);
        echo "Compound Intrest = " . $intrest;
    }
}

?>