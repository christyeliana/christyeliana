<?php
require_once '../includes/koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];
$nama = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO akun (username,password, nama, email) VALUES ('$user', '$pass', '$nama', '$email')";

if($koneksi->query($sql)===TRUE)
{
    echo "Registrasi Akun Anda Berhasil";
}
else
{
    echo "Terjadi Kesalahan : ".$sql."<br/".$koneksi->error;
}
$koneksi->close();

?>