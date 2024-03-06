<?php
session_start();
if(session_destroy()){
    //session nya di destroy dan kembali ke halaman login
    header("Location:../index.php");
}
?>