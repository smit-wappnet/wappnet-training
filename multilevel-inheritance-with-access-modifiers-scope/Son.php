<?php

require_once("./Father.php");

class Son extends Father
{
    // Constructor to Initialize Money, FD, Gold
    public function __construct($money = 0, $fd = 0, $gold = 0)
    {
        $this->money = $money;
        parent::__construct($fd, $gold);
    }

    // Spend Money
    public function spend($amount)
    {
        if ($amount > $this->money) {
            echo "Insufficient Money to do Expence of Rs. $amount...<br>";
            return;
        }
        $this->money -= $amount;
        print("Rs. $amount Spend (bal - <b>$this->money</b>) <br>");
    }

    public function get_help_by_father()
    {
        $this->break_fd();
    }

    public function get_help_by_grandfater($amount)
    {
        $this->help_by_grandfather($amount);
    }
}
