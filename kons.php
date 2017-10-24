<?php

require_once'konstrak1.php';

$baju = new baju ('Volcom','Xl','Biru');
echo "<br>Merk.. ".$baju->get_merk();
echo "<br>Ukuran.. ".$baju->get_ukuran();
echo "<br>Warna.. ".$baju->get_warna();

?>