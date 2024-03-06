<?php
include "includes/koneksi.php";

$query = "SELECT * FROM posting";
$hasil = mysqli_query($koneksi, $query);

foreach($hasil as $data)
{
    echo "<p><h2>$data[judul]</h2></p>";
    echo "<p>Diposting oleh : $data[username], Tanggal : $data[tanggal]</p>";
    echo "<p>$data[konten]</p>";
    echo "<hr/>";
    
}
?>