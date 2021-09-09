<?php
// Interface
interface Model {
    public function Warna();
}
// interable
function getIterable():iterable {
  return ["Selamat ", "Datang"];
  
}
$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
  
}
// class
class Produk {
    // Access modifiers Public
    // properti
  public $merk,
            $os,
            $harga;

  // contruktor
  function __construct ($merk, $os, $harga) {
    $this->merk = $merk;
    $this->os = $os;
    $this->harga = $harga;
  }
  // destructor
  function __destruct() {
    echo "Produk Hp : Merk : {$this->merk} | Os : {$this->os} | Harga : {$this->harga}.";
    echo "<br>";
  }
  
}

// Inheritance
class Produk2 extends Produk implements Model{
    public  function Warna (){
        echo "<hr>Produk Ada diskon Akhir Tahun";
        echo "<br>";
    }
}
// Static Property
class Terjual {
    public static $satu = 10, $dua = 20;
}
// Static Methods
class Stok{
    public static function staticMethod (){
        echo "Sisa Produk Samsung = 10 <br> Sisa Produk Apple = 20";
        echo "<hr>";
    }
}

// objek
$produk1 = new Produk2("Samsung", "Android", 12000);
$produk2 = new Produk2("Apple", "macOs", 15000);
$produk2 -> Warna();
Stok::staticMethod();
echo "Samsung Terjual : " . Terjual::$satu;
echo "<br> Apple Terjual : " . Terjual::$dua;
echo "<hr>";