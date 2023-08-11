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

        <!-- banner -->


        <!-- introduction -->
        <section>
            <div class="container col-xxl-12 px-4 py-4 pb-1" id="Introduction">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="gambar/mercor1.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy" style="border-radius: 10px;">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Introduction</h1>
                        <p class="lead text-justify text-secondary">We are a specialized construction and civil engineering company that excels in providing comprehensive solutions for various maritime infrastructure projects. With our expertise in cathodic protection, wrapping pile HDPE, under deck repair, upper deck repair, replace rubber fender, replace bollard, and the design and build of jetties, we have successfully completed numerous projects in the marine industry. This company profile outlines our capabilities, commitment to quality, and dedication to delivering exceptional results.</p>
                    </div>
                </div>
            </div>
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
                    <div class="col d-flex align-items-start">
                        <div>
                            <h2>Cathodic Protection</h2>
                            <p class="text-secondary">We are experienced in implementing cathodic protection systems to mitigate corrosion on submerged or buried structures. Our team of experts ensures the proper installation and maintenance of cathodic protection systems to extend the lifespan of marine structures.</p>

                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div>
                            <h2>Wrapping Pile HDPE</h2>
                            <p class="text-secondary">We specialize in wrapping pile HDPE to provide corrosion protection for underwater or soil-exposed piles. Our skilled technicians apply high-density polyethylene (HDPE) wraps using advanced techniques, ensuring optimal durability and longevity of the piles.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div>
                            <h2>Under Deck Repair</h2>
                            <p class="text-secondary">We have the expertise to conduct under deck repairs, addressing issues such as structural damage, deterioration, or waterproofing problems. Our team utilizes innovative methods and high-quality materials to restore the integrity of under deck areas efficiently and effectively.</p>

                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div>
                            <h2>Upper Deck Repair</h2>
                            <p class="text-secondary">Our company excels in upper deck repair, focusing on surface restoration, waterproofing, and structural reinforcement. We apply advanced techniques and durable materials to ensure the safety, durability, and aesthetics of the upper deck areas.</p>

                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div>
                            <h2>Replace Rubber Fender</h2>
                            <p class="text-secondary">We possess the necessary skills and experience to replace rubber fenders, an essential component for protecting marine structures from vessel impacts. Our team ensures the precise installation of high-quality rubber fenders to enhance the safety and functionality of the jetties.</p>

                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div>
                            <h2>Replace Bollard</h2>
                            <p class="text-secondary">We specialize in replacing bollards, providing secure mooring solutions for vessels. Our team ensures the proper selection, installation, and alignment of bollards to meet the specific requirements of the project and enhance the overall safety and functionality of the marine infrastructure.</p>

                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div>
                            <h2>Design and Build Jetty</h2>
                            <p class="text-secondary">Our company offers comprehensive design and construction services for jetties. We collaborate closely with clients to understand their specific needs and develop custom-designed jetties that meet the highest standards of safety, functionality, and durability.</p>

                        </div>
                    </div>


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
                    $query = "SELECT * FROM album";
                    $result = mysqli_query($con, $query);
                    $count = 0;

                    while ($data = mysqli_fetch_assoc($result)) {
                        if ($count >= 3) {
                            break;
                        }
                        $count++;
                    ?>

                        <div class="col-md-4">
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


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>