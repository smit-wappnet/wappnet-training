<?php

require_once('./SimpleIntrest.php');
require_once('./CompoundIntrest.php');

$si = new SimpleIntrest(100, 10, 2);
$si->calculate();
echo "<br><br>";
$ci = new CompoundIntrest(100, 10, 2);
$ci->calculate();
