<?php
include "connect.php";

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die("Error. ID not selected!");
}

// Retrieve the product data from the database based on the provided 'id' parameter
$query = mysqli_query($con, "SELECT * FROM intro WHERE id='$id'");
$data = mysqli_fetch_array($query);

// Check if the 'Edit' button was clicked and the form was submitted
if (isset($_POST['Edit']) && $_POST['Edit'] == "Edit") {
    // Retrieve the updated product details from the submitted form
    $judul = mysqli_real_escape_string($con, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($con, $_POST['deskripsi']);


    // Check if a new photo was uploaded
    if ($_FILES['foto']['name']) {
        $foto = $_FILES['foto']['name'];
        $file_tmp = $_FILES['foto']['tmp_name'];

        // Move the uploaded photo file to the 'foto' directory
        move_uploaded_file($file_tmp, 'foto/' . $foto);
    } else {
        // If no new photo was uploaded, keep the existing photo
        $foto = $data['foto'];
    }

    // Update the product details in the database, including the photo
    $update = mysqli_query($con, "UPDATE intro SET 
        judul='$judul', 
        deskripsi='$deskripsi', 
        
        foto='$foto'
        WHERE id='$id'");

    if ($update) {
        echo '<script language="JavaScript">
            alert("Edit Barang Berhasil!");
            window.location.href = "dashboard.php";
        </script>';
    } else {
        die("Error: " . mysqli_error($con));
    }
}
?>

<!-- The HTML form for editing product details -->