<?php
echo "Biaya pengeluaran untuk Toko kelontong ke 81 = <b>Rp.81.3394</b>";
echo "</br>Penjelasan : Tiap toko bertambah Rp.295.5<br> ";
echo 'Pembuktian :<br>';

$max=100;
for ($i =0; $i <= $max; $i++) {
  $incres=295.5882352941176;
  echo "Toko kelontong ke $i Rp.";
  echo 10000+$i*$incres;
  echo"</br>";
} 
 
?>