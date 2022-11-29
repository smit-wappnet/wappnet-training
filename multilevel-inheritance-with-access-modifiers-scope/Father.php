<?php

require_once("./GrandFather.php");

class Father extends GrandFather
{
    // This FD is Own by Father
    protected $fd;

    // Constructor to Initialize FD and call Parent Constructor
    public function __construct($fd, $gold)
    {
        $this->fd = $fd;
        parent::__construct($gold);
    }

    // A method to Break FD.
    protected function break_fd()
    {
        if ($this->fd == 0) {
            echo "No FD Found<br>";
            return;
        }
        $this->money += $this->fd;
        echo "FD of Rs. $this->fd is broken<br>";
        $this->fd = 0;
    }
}