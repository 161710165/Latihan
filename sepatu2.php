<?php

require_once'sepatu.php';

$sepatu = new sepatu ('adidas','37','Blue');
echo "<br>Merk.. ".$sepatu->get_merk();
echo "<br>Ukuran.. ".$sepatu->get_ukuran();
echo "<br>Warna.. ".$sepatu->get_warna();

?>