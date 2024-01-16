<?php
include "connect.php";
// Include itu fungsinya untuk mengimpor fungsi/perintah/kode yang sudah kita buat pada suatu file

// Ini variabel untuk mengambil/menarik data dari form-parcel.php

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];



//upload gambar
$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, 'foto/' . $foto);
$query = "INSERT INTO intro SET foto = '$foto'";

//cek file gambar

// Buat masukkin/mengirim data ke database
$sql = "INSERT INTO intro ( judul,deskripsi, foto) VALUES ( '$judul','$deskripsi','$foto')";
//Coba perhatikan kode di atas baik-baik, ini statement untuk memasukkan data ke dalam tabel dari matkul basis data


if (mysqli_query($con, $sql)) {
    header("Location: intro.php"); // perintah untuk kembali ke index.php kalau data berhasil tersimpan ke database
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con); // perintah untuk menampilkan pesan error kalau data gagal tersimpan
}

// Perintah untuk menutup/keluar dari database
mysqli_close($con);
