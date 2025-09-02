<?php 
$total=100000;
$diskon1=0;

 if ($total >= 500000) {
    $diskon1= 0.2 * $total;
 }  elseif ($total >= 250000) {
    $diskon1 =0.1 * $total;
    }
 else { 
   $diskon1=0;
 }
 echo"total". $total . "<br>";
 echo"diskon". $diskon1 ."<br>";
 echo"total diskon" .($total - $diskon1)."<br>";