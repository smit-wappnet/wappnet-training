<?php
class SimpleIntrest
{
    protected $amount;
    protected $rate;
    protected $years;

    public function __construct($amount, $rate, $years)
    {
        $this->amount = $amount;
        $this->rate = $rate;
        $this->years = $years;
    }

    public function calculate()
    {
        echo "Simple Intrest = " . (($this->amount * ($this->rate / 100)) * $this->years);
    }
}
?>