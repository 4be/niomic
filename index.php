<?php
class Product {
  public $nama;
  public function __construct($nama){
    $this->nama=$nama;
  }

  public function show(){
    echo "$this->nama<br>";
    for ($i =1; $i <= 3; $i++){ 
        echo "$i. Menu $this->nama $i<br>";
    }  
  }
}

$menu1 = new Product("Makanan");
$menu2 = new Product("Minuman");
$menu3 = new Product("Parsel");
echo 'Menampilkan list menu hanya Menggunakan 1 buah perulangan : </br></br>';
echo $menu1->show();
echo $menu2->show();
echo $menu3->show();


?>
