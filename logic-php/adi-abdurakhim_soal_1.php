<?php
class Product {
  public $bolpoin=1750,
         $uang;

  public function __construct($uang){
    $this->uang=$uang;
  }

  public function getTotal($lusin,$lembar){
    $tbolpoin = $this->bolpoin*$lusin;
    $tUang    = $this->uang*$lembar;
    
    return $tUang-$tbolpoin;
  }

}

$jajan = new Product(5000);
echo 'Harga 1 bolpoin = '.$jajan->bolpoin;
echo '</br>';
echo 'Uang rudi '.$jajan->uang.' = 5 lembar = 250000';
echo '</br>';
echo 'Banyak pembelian = 1 lusin';
echo '</br>';
echo '</br>';
echo 'Total Uang rudi - Total harga ';
echo '</br>';
echo '(25000 - 21000)';
echo '</br>';
echo 'Uang kembalian rudi : ';
echo '<b>Rp.'.$jajan->getTotal(12,5);

?>

