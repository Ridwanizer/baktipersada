<title>Galery - Harviacode.com</title>
<style>
    .galery-table tr td{
        padding: 15px;
        text-align: center;
    }
</style>
<?php
require 'koneksi.php';

//dalam prakteknya anda bisa ambil array dari database
// lihat contoh ambil array dari databse di komentar artikel ini
$array = array(
    'gambar1' => array('img_src' => ['gambar']),
    'gambar2' => array('img_src' => ['gambar']),
    'gambar3' => array('img_src' => ['gambar']),
    'gambar4' => array('img_src' => ['gambar']),
    'gambar5' => array('img_src' => ['gambar']),
    'gambar6' => array('img_src' => ['gambar'])
);

// atur jumlah kolom yang diinginkan disini
$kolom = 3;

$chunks = array_chunk($array, $kolom);
echo '<table class="galery-table">';
foreach ($chunks as $chunk) {
   
    foreach ($chunk as $galery) {
        echo '<img src="img" . $galery["img_src"]';
    }
    
}
echo '</table>';
?>