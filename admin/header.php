<?php 
include 'islem/baglan.php';


$veri=$db->prepare('SELECT * FROM tablo1');  // id 1 olan veriyi getirdiyorum.
$veri->execute();




?>