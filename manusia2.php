<?php
require_once'manusia.php';
$manusia = new manusia ('Wenti Ayu Marliyanti','Bandung','XI RPL1','SMK Assalaam','RPL');
echo "Nama.. ".$manusia->get_nama();
echo"<br>Tempat Lahir.. ".$manusia->get_tempatlahir();
echo"<br>Kelas.. ".$manusia->get_kelas();
echo"<br>Sekolah.. ".$manusia->get_sekolah();
echo"<br>Jurusan.. ".$manusia->get_jurusan();

?>