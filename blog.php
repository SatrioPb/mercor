<!DOCTYPE html>
<html lang="en">
<?php
include "connect.php";
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mercor Indonesia</title>
</head>

<body>
    <nav class=" navbar navbar-expand-lg navbar-light bg-light" style="position: fixed; z-index: 9; width: 100%">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="padding-left: 5rem;">
                <img src="gambar/logo.png" alt="" width="90" height="50" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup" style="padding-right: 5rem;">
                <div class="navbar-nav ">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="#top">top</a>
                    <a class="nav-link" href="#bottom">bottom</a>

                </div>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <main class="container">
        <?php
        $query = "SELECT * FROM album ORDER BY date DESC";
        $result = mysqli_query($con, $query);

        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <div class="crd row mb-4">
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                        <div class="col-md-3">
                            <img src="foto/<?php echo $data['foto']; ?>" class="card-img img-fluid h-100" alt="...">
                        </div>
                        <div class="col-md-9 d-flex flex-column justify-content-between">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo $data['judul']; ?></h2>
                                <p class="card-text mb-3"><?php echo substr($data['deskripsi'], 0, 300); ?>...</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><?= $data['date'] ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </main>




    <footer class=" text-light" style="background-color: #27374D;" id="bottom">
        <div class=" footer-top">
            <div class="container">
                <div class="row gy-5" style="display: flex; justify-content: center;">
                    <div class="col-md-4">
                        <h4 class="logo-text">PT. Mercor Indonesia</h4>
                        <p>we strive to be the go-to construction and civil engineering company in the field of cathodic protection, wrapping pile HDPE, under deck repair, upper deck repair, replace rubber fender, replace bollard, and the design and build of jetties. We aim to make a positive impact on the marine industry by delivering exceptional projects, fostering innovation, ensuring safety, and contributing to sustainable development.</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/geprek.blimbing"><i class="bx bxl-facebook"></i></a>
                            <a href="#"><i class="bx bxl-twitter"></i></a>
                            <a href="#"><i class="bx bxl-instagram"></i></a>
                            <a href="#"><i class="bx bxl-github"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5 class="title-sm">Contact</h5>
                        <div class="footer-links">
                            <p class="mb">Alamat : Ruko Grand Central BTP Blok M No. B-4 Tamalanrea 90245. Makassar, Sulawesi Selatan, Indonesia.</p>
                            <p class="mb">Nomor Telephone : (0411) 4774071</p>
                            <p class="mb">Nomor Fax : (0411) 4774072, 590850</p>
                            <p class="mb"> Alamat Email : mercor_indonesia@yahoo.com</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="container end">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13270.066191851465!2d119.49722779390322!3d-5.135415167929812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcafb51c6555%3A0xc3f5837f028282f1!2sPT.Mercor%20Indonesia!5e0!3m2!1sid!2sid!4v1690963834952!5m2!1sid!2sid" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row justify-content-between gy-3">
                    <div class="col">
                        <center>
                            <p class="mb-0">Copyright ©2023 PT.Mercor Indonesia | All Rights Reserved.</p>
                        </center>

                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>