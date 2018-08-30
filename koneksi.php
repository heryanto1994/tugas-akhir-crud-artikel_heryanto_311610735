<?php $host ="Localhost"; 
$user ="root";
$pass =""; 
$db ="artikel"; 
 
$conn =mysqli_connect($host,$user,$pass,$db); 
if ($conn==false) { 
    echo " Koneksi server gagal";   die (); 
 
 }
else {  
    echo  "Koneksi Berhasil";  } ?>