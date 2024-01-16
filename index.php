<!doctype html>
<html lang="en">
<?php
include "connect.php";
?>

<head>
    <!-- Required meta tags -->
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

<body style="background-color: #FAFBFF;">

    <!-- Navbar -->
    <nav class=" navbar navbar-expand-lg navbar-light bg-light" style="position: fixed; z-index: 9; width: 100%">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="padding-left: 5rem;">
                <img src="gambar/logo.png" alt="" width="90" height="50" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup" style="padding-right: 5rem;">
                <div class="navbar-nav ">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link active" href="#Introduction">Introduction</a>
                    <a class="nav-link active" href="#Expertise">Expertise</a>
                    <a class="nav-link active" href="blog.php">Blog</a>
                    <a class="nav-link active" href="iso.html">ISO</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- banner -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active d-block w-100" id="banner">
                <div class="carousel-caption" id="banner-caption">
                    <h1 class="display-4 fw-bold lh-1">MERCOR INDONESIA</h1>
                    <p>Construction and Civil with Expertise in Cathodic Protection, Wrapping Pile HDPE, Under Deck Repair, Upper Deck Repair, Replace Rubber Fender, Replace Bollard, Design and Build Jetty</p>
                </div>
            </div>
        </div>
    </div>

        <!-- banner -->


        <!-- introduction -->
        <section>
            <?php
            $query = "SELECT * FROM intro";
            $result = mysqli_query($con, $query);
            ?>
            <?php while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <div class="container col-xxl-12 px-4 py-4 pb-1" id="Introduction">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-10 col-sm-8 col-lg-6">
                            <img src="foto/<?php echo $data['foto']; ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy" style="border-radius: 10px;">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?php echo $data['judul']; ?></h1>
                            <p class="lead text-justify text-secondary"><?php echo $data['deskripsi']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </section>

        <!-- <div class="container my-5">
            <h1 class="display-4 fw-bold lh-1"> </h1>
            <hr style="height: 4px; border: none; background-color: black" />
            <h4 class="lead"></h4>

        </div> -->

        <!-- introduction -->
        <!-- Expertise -->
        <section id="Expertise">
            <div class="container my-5 px-4 py-5 " id="hanging-icons">
                <h1 class="display-5 fw-bold text-dark">Our Expertise</h1>
                <hr style="height: 4px; border: none; background-color: black" />
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <?php
                    $query = "SELECT * FROM expertise";
                    $result = mysqli_query($con, $query);

                    while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="col d-flex align-items-start">
                            <div>
                                <h2><?php echo $data['judul']; ?></h2>
                                <p class="text-secondary"><?php echo $data['deskripsi']; ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>

        <section style="background-color: #27374D;">
            <div class="container px-4 py-5 text-light">
                <center>
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Commitment to Quality</h1>
                    <hr style="height: 4px; border: none; background-color :black w-50 ;width:20vh" />
                </center>

                <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
                    <div class="col-10 col-sm-5 col-lg-5">
                        <img src="gambar/mercor2.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" style="border-radius: 10px; max-width: 100%; height: auto;">
                    </div>


                    <div class=" col">
                        <div class="row row-cols-1 row-cols-sm-2 g-4">
                            <div class="col d-flex flex-column gap-2">

                                <h4 class="fw-bold mb-0 text-body-emphasis">Expert Team </h4>
                                <p class="text-body-secondary"> Our team consists of highly skilled engineers, technicians, and construction professionals with extensive experience in the maritime industry. They bring technical expertise and a commitment to excellence to every project we undertake.</p>
                            </div>

                            <div class="col d-flex  flex-column gap-2">
                                <h4 class="fw-bold mb-0 text-body-emphasis">Quality Materials</h4>
                                <p class="text-body-secondary">We use only high-quality materials sourced from reputable suppliers to ensure the longevity, durability, and performance of our constructed marine infrastructure.</p>
                            </div>

                            <div class="col d-flex flex-column gap-2">

                                <h4 class="fw-bold mb-0 text-body-emphasis">Safety and Compliance </h4>
                                <p class="text-body-secondary">We prioritize safety and adhere to strict safety protocols throughout all our projects. We comply with relevant industry standards, regulations, and best practices to create a secure working environment for our team and stakeholders.</p>
                            </div>

                            <div class="col d-flex flex-column gap-2">

                                <h4 class="fw-bold mb-0 text-body-emphasis">Client Satisfaction</h4>
                                <p class="text-body-secondary">Our primary focus is client satisfaction. We actively engage with our clients, ensuring clear communication, understanding their unique requirements, and delivering projects that meet or exceed their expectations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- album -->
        </section>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <h1 class="display-5 fw-bold text-dark">Our Blog</h1>
                <hr style="height: 4px; border: none; background-color: black" />
                <br>
                <br>

                <div class="row d-flex flex-wrap">
                    <?php
                    $query = "SELECT * FROM album ORDER BY date DESC";
                    $result = mysqli_query($con, $query);
                    $count = 0;

                    while ($data = mysqli_fetch_assoc($result)) {
                        if ($count >= 3) {
                            break;
                        }
                        $count++;
                    ?>

                        <div class="crd col-md-4">
                            <a href="detail.php?id='<?= $data['id']; ?>'" style="text-decoration: none; color:black;">
                                <div class="card shadow-sm" style="height: 100%;">
                                    <img class="bd-placeholder-img card-img-top" width="100%" height="250" src="foto/<?php echo $data['foto']; ?>" alt="">
                                    <div class="card-body d-flex flex-column">
                                        <h3 class="card-text"><?php echo $data['judul']; ?></h3>
                                        <p class="card-text" style="max-height: 100px; overflow: hidden;"><?php echo substr($data['deskripsi'], 0, 100); ?>...</p>

                                        <div class="mt-auto d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            </div>
                                            <small class="text-body-secondary text-end"><?php echo $data['date']; ?></small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
        <center>
            <a href="blog.php" class="btn btn-brand text-light" style="background-color: #27374D;" id="btnmr">Show More</a>
        </center>
        <br>
        <br>
        <section style="background-color: #FFFFFF;">
            <div class="container">
                <br>
                <br>

                <center>
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Vision</h1>
                    <hr style="height: 4px; border: none; background-color :black w-40 ;width:70px" />
                </center>
                <p>To be the premier construction and civil engineering company specializing in cathodic protection, wrapping pile HDPE, under deck repair, upper deck repair, replace rubber fender, replace bollard, and the design and build of jetties. We aim to be recognized as the industry leader in delivering innovative and sustainable solutions for marine infrastructure projects, while maintaining the highest standards of quality and client satisfaction.</p>
                <center>
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Misions</h1>
                    <hr style="height: 4px; border: none; background-color :black w-40 ;width:70px" />
                </center>
                <h3>1. Excellence in Construction</h3>
                <p> We are committed to delivering construction projects of exceptional quality, leveraging our expertise in cathodic protection, wrapping pile HDPE, under deck repair, upper deck repair, replace rubber fender, replace bollard, and the design and build of jetties. We continuously strive for excellence in every aspect of our work, ensuring the durability, functionality, and safety of marine infrastructure. </p>
                <h3>2. Innovative Solutions </h3>
                <p>are dedicated to providing innovative solutions that address the unique challenges of the maritime industry. Through continuous research, technological advancements, and collaboration with our clients, we aim to develop cutting-edge approaches that optimize efficiency, sustainability, and cost-effectiveness.</h3>
                <h3>3. Client Satisfaction </h3>
                <p> Our clients' satisfaction is at the core of everything we do. We prioritize open communication, responsiveness, and collaboration to understand and fulfill their specific needs. By delivering projects on time, within budget, and exceeding expectations, we aim to build long-term partnerships based on trust, reliability, and exceptional service. </p>
                <h3>4. Safety and Environmental Responsibility </h3>
                <p> We prioritize the safety of our employees, subcontractors, stakeholders, and the environment. We implement strict safety protocols, adhere to industry standards, and promote a culture of safety awareness throughout our organization. We also actively seek environmentally responsible practices to minimize our impact on ecosystems and contribute to a sustainable future.</p>
                <h3>5. Expert Team </h3>
                <p>We invest in attracting, developing, and retaining a highly skilled and motivated team of professionals. Our team's expertise in construction and civil engineering, combined with specialized knowledge in cathodic protection, wrapping pile HDPE, under </p>
                <br>
            </div>

        </section>

        <section id="cta" class="py-5" style="text-align: center;background-color:#27374D;">
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="center">
                        <h3 class="text-white">Sustaining Excellence through Maintenance!</h3>
                    </div>
                </div>
        </section>
        <footer class=" text-dark">
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
                            <h4 class="logo-text">Contact</h4>
                            <div class="footer-links">
                                <p class="mb">Address : Ruko Grand Central BTP Blok M No. B-4 Tamalanrea 90245. Makassar, Sulawesi Selatan, Indonesia.</p>
                                <p class="mb">Nomor Telephone : (0411) 4774071</p>
                                <p class="mb">Nomor Fax : (0411) 4774072, 590850</p>
                                <p class="mb">Email Address : mercor_indonesia@yahoo.com</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13270.066191851465!2d119.49722779390322!3d-5.135415167929812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcafb51c6555%3A0xc3f5837f028282f1!2sPT.Mercor%20Indonesia!5e0!3m2!1sid!2sid!4v1690963834952!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>