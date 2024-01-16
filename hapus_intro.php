<?php
// koneksi database
include 'connect.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];



// menghapus data dari database
mysqli_query($con, "delete from intro where id='$id'");


// mengalihkan halaman kembali ke index.php
header("location:intro.php");
