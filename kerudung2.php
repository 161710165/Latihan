<?php

require_once'kerudung.php';

$kerudung = new kerudung ('Pasmina','SegiEmpat','Pink');
echo "<br>Merk : ".$kerudung->get_merk();
echo "<br>Type : ".$kerudung->get_type();
echo "<br>Warna : ".$kerudung->get_warna();

?>