<?php
class  store{
	public $nama, $merk, $warna, $ukuranMaksimal, $jumlah;

	public function tambahUkuran(){
		return "Ukuran bertambah";
	}
}

class StoreBaju extends store{
	public $packaging = false;

	public function laksanakanPackaging(){
		$this->packaging=true;
		return "packaging dilaksanakan";
	}
}

$storeKu = new StoreBaju();
echo $storeKu->tambahUkuran();
echo "<br>";
echo $storeKu->laksanakanPackaging();
?>