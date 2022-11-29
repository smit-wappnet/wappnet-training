<?php

require_once("./Son.php");

/*
Output:
Avalable Balance 1000
Rs. 500 Spend (bal - 500)
Rs. 500 Spend (bal - 0)
Insufficient Money to do Expence of Rs. 500...
FD of Rs. 5000 is broken
Rs. 4000 Spend (bal - 1000)
Insufficient Money to do Expence of Rs. 15000...
Gold of Amount Rs. 20000 is Selled by Grandfather
Rs. 15000 Spend (bal - 6000)
Insufficient Money to do Expence of Rs. 50000...
Insufficient Gold
Rs. 5000 Spend (bal - 1000)
*/


$smit = new Son(1000, 5000, 30000);
echo "Avalable Balance <b>$smit->money</b><br>";
$smit->spend(500);
$smit->spend(500);
$smit->spend(500);
$smit->get_help_by_father();
$smit->spend(4000);
$smit->spend(15000);
$smit->get_help_by_grandfater(20000);
$smit->spend(15000);
$smit->spend(50000);
$smit->get_help_by_grandfater(50000);
$smit->spend(5000);

?>