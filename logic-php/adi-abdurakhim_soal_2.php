<?php
class Product {
  public $mainan=55000, 
         $uang1=5000,
         $uang2=10000,
         $uang3=20000;

  public function getTotal($banyakM,$lem1,$lem2,$lem3){
    $tmainan = $this->mainan*$banyakM;
    $tUang   = $this->uang1*$lem1+$this->uang2*$lem2+$this->uang3*$lem3;
    $total   = $tUang-$tmainan;
    return $total;
  }

}

$jajan = new Product();
echo 'Harga Mainan : 55000</br>';
echo 'Uang Setyo :';
echo '</br>';
echo 'Rp.10000 x 3 lembar';
echo '</br>';
echo 'Rp.5000 &nbsp; x 4 lembar';
echo '</br>';
echo 'Rp.20000 x 5 lembar';
echo '</br>';
echo '= Rp.135000';
echo '</br>';
echo'Sisa uang Setyo = Total uang - Harga Mainan</br>';
echo '</br>';
echo 'Rp.135000 - Rp.550000';
echo '</br>';
echo 'Sisa Uang setyo = ';


echo '<b>Rp.'.$jajan->getTotal(1,4,3,5);

?>








