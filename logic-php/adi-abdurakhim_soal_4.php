<?php 
 function cetak($num)
 {
      if($num>1)
      cetak($num-1);
      $num%2==0? $bil="Genap": $bil="Ganjil";
      echo $num.". Bilangan $bil<br>";
      return;
 }
 
 echo'Menampilkan bilangan ganjil genap tanpa menggunakan Perulangan <br>';
 cetak(10);

?> 
