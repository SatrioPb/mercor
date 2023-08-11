<?php
include "connect.php";
// Include itu fungsinya untuk mengimpor fungsi/perintah/kode yang sudah kita buat pada suatu file

// Ini variabel untuk mengambil/menarik data dari form-parcel.php
$username = $_POST['username'];
$password = $_POST['password'];


// Buat masukkin/mengirim data ke database
$sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
//Coba perhatikan kode di atas baik-baik, ini statement untuk memasukkan data ke dalam tabel dari matkul basis data


if (mysqli_query($con, $sql)) {
    header("Location: login.html"); // perintah untuk kembali ke index.php kalau data berhasil tersimpan ke database
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con); // perintah untuk menampilkan pesan error kalau data gagal tersimpan
}

// Perintah untuk menutup/keluar dari database
mysqli_close($con);
