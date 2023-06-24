<?php

$file_counter ="counter.txt";
$f_open =fopen($file_counter, "r+");
$hitung =fread($f_open, filesize($file_counter));
echo " anda adalah pengunjung ke:".$hitung;

fclose($f_open);
$f_open =fopen($file_counter,"w+");

$hitung=$hitung +1;
fwrite($f_open, $hitung,strlen($hitung));
fclose($f_open);
  
?>