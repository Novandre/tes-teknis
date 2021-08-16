<?php
class Buah {
  private $nama;
  private $warna;

  public function set_nama($n) {
    $this->nama = $n;
  }
    
  public function set_warna($n) {
    $this->warna = $n;
  }
    
  public function get_nama() {
    return $this->nama;
  }
    
  public function get_warna() {
    return $this->warna;
  }
   
}

/* soal */
// buat buah dengan nama jeruk dan berwarna kuning dengan menggunakan class Buah
// buat buah dengan nama salak dan berwarna coklat dengan menggunakan class Buah

$buah = new Buah();
$buah->set_nama("jeruk");
$buah->set_warna("kuning");
echo "buah dengan nama ".$buah->get_nama()." dan berwarna ".$buah->get_warna();
echo "<br>";
$buah->set_nama("salak");
$buah->set_warna("coklat");
echo "buah dengan nama ".$buah->get_nama()." dan berwarna ".$buah->get_warna();
?>