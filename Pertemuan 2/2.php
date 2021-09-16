<?php 

// Membuat Interface
interface ProdukInterface{
	public function getJumlah_produk();
}

// membuat clss
class Produk{

	public $nama_produk = "Produk Habis",
			$jenis_produk = "Tidak Ada";

	// fungsi menampilkan Produk
	function tampilproduk($barang = "Barang kosong"){

		// Array 
		$nama_barang = ['Samsung', 'Apple', 'Advan'];

		// interable untuk memanggil array
		foreach ($nama_barang as $semua_barang ) {
			echo "Produk yang kami jual :". $semua_barang . " | <br>";
		}

		// memanggil isi dari $barang
		echo "<br>Barang Yang tersedia sekarang : ". $barang;
	}
	// construktor yang akan dipanggil setiap membuat objek baru
	function __construct(){
		echo "Halo Selamat Belanja <hr>";
	}
	// Destruktor yang akan dipanggil terakhir kali 
	 function __destruct() {
		echo "<hr> Terima kasih sudah datang";
	}
	
}

// membuat class baru untuk memanggil inheritance dan interface
class Terjual extends Produk implements ProdukInterface{

	public function lihat_produk(){
		return $this->jenis_produk;

	}
	// memanggil interface
	public function getJumlah_produk(){
		return 12;
	}

	// ststic Property
	public static $harga;

	// static method
	public static function beli_produk(){
		return "<br>Beli produk seharga Rp.".self::$harga." Diskon 90% 'Senin Harga Naik'";
	}
	
}

// membuat objek baru
$toko1 = new Terjual();

// memanggil fungsi dari Produk
$toko1 -> tampilproduk("Apple");

 // mengeluarkan nilai fuction getJumlah_produk dari interface
echo "<br> Jumlah Produk yang tersisa : ". $toko1 -> getJumlah_produk();

// seting $harga di static property
Terjual::$harga = 12000;
echo Terjual::beli_produk();


// memanggil fuction jenis_produk
$toko1 -> jenis_produk = "Handphone"; 

// mengeluarkan nilai fuction lihat_produk 
echo "<br> Jenis Produk yang kami Jual : " . $toko1 -> lihat_produk(); 

