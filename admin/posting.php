<?php
    require_once '../includes/koneksi.php';

    $user = $_SESSION['username'];
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $konten = $_POST['konten'];

    $sql = "INSERT INTO posting (username, judul, tanggal, konten) VALUES ('$user', '$judul', $tanggal', '$konten')";

    if ($koneksi->query($sql)===TRUE)
    {
        echo "Form Berhasil Disubmit!";
    }
    else
    {
        echo "Terjadi Kesalahan".$sql."<br/>".$koneksi->error;
    }
    $koneksi->close();
?>