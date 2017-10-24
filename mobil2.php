<?php

require_once'mobil.php';
$mobil = new mobil ('Avanza','Silver');
echo "<br>Merk.. ".$mobil->get_merk();
echo "<br>Warna.. ".$mobil->get_warna();

?>