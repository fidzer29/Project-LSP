<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Toko IZMA ADVENTURE</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/gunung1.png" rel="icon">
    <link href="assets/img/apple-icon.png" rel="apple-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/modal.css">
</head>

<body>


    <!------------------------ Modal Gunung ----------------------------------------->
    <div class="modal" id="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div id="card">
                        <div id="card-content">
                            <div id="card-title">
                                <h2>Order Tiket Gunung</h2>
                                <div class="underline-title"></div>
                            </div>
                            <form action="/order/ordering" method="post" class="form">
                                <label for="Nama_Pelanggan" style="padding-top:13px">
                                    &nbsp;Nama Pendaki
                                </label>
                                <input id="Nama_Pelanggan" class="form-content" type="text" name="Nama_Pelanggan" autocomplete="on" required />
                                <div class="form-border"></div>

                                <label for="Nama_Gunung" class="col-form-label">Nama Gunung :</label>
                                <select class="form-control" name="Nama_Gunung">
                                    <option value="Gunung Ciremai">Gunung Ciremai</option>
                                    <option value="Gunung Cikuray">Gunung Cikuray</option>
                                    <option value="Gunung Gede Pangrango">Gunung Gede Pangrango</option>
                                    <option value="Gunung Semeru">Gunung Semeru</option>
                                    <option value="Gunung Bromo">Gunung Bromo</option>
                                    <option value="Gunung Arjuno">Gunung Arjuno</option>
                                    <option value="Gunung Kerinci">Gunung Kerinci</option>
                                    <option value="Gunung Rinjani">Gunung Rinjani</option>
                                    <option value="Gunung Prau">Gunung Prau</option>
                                </select>

                                <label for="Alamat" style="padding-top:13px">
                                    &nbsp;Alamat Pendaki
                                </label>
                                <input id="Alamat" class="form-content" type="text" name="Alamat" autocomplete="on" required />
                                <div class="form-border"></div>

                                <label for="No_Hp" style="padding-top:13px">
                                    &nbsp;No Telepon
                                </label>
                                <input id="No_Hp" class="form-content" type="number" name="No_Hp" autocomplete="on" required />
                                <div class="form-border"></div>

                                <label for="Tgl_Muncak" style="padding-top:13px">
                                    &nbsp;Tanggal Muncak
                                </label>
                                <input id="Tgl_Muncak" class="form-content" type="date" name="Tgl_Muncak" autocomplete="on" required />
                                <div class="form-border"></div>

                                <label for="Jumlah_Tiket" style="padding-top:13px">
                                    &nbsp;Jumlah Tiket
                                </label>
                                <input id="Jumlah_Tiket" class="form-content" type="number" name="Jumlah_Tiket" autocomplete="on" required />
                                <div class="form-border"></div>

                                <input id="submit-btn" type="submit" name="submit" value="Check In" />
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!----------------------------------Modal Akhiran Gunung---------------------------->





    <!------------------------ Modal Alat Hiking ----------------------------------------->
    <div class="modal" id="hiking" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div id="card">
                        <div id="card-content">
                            <div id="card-title">
                                <h2>Order Alat Hiking</h2>
                                <div class="underline-title"></div>
                            </div>
                            <form action="/order/alathiking" method="post" class="form">
                                <label for="Nama_Pelanggan" style="padding-top:13px">
                                    &nbsp;Nama Pendaki
                                </label>
                                <input id="Nama_Pelanggan" class="form-content" type="text" name="Nama_Pelanggan" autocomplete="on" required />
                                <div class="form-border"></div>

                                <label for="Nama_Barang" class="col-form-label">Nama Alat Hiking </label>
                                <select class="form-control" name="Nama_Barang">
                                    <option value="Tenda Dome Waterproof">Tenda Dome Waterproof</option>
                                    <option value="Tas Carier 70 Liter">Tas Carier 70 Liter</option>
                                    <option value="Jaket Outdoor">Jaket Outdoor</option>
                                    <option value="Cooking Set Outdoor">Cooking Set Outdoor</option>
                                    <option value="Trekking Pole">Trekking Pole</option>
                                    <option value="Hammock">Hammock</option>
                                    <option value="Senter LED Outdoor">Senter LED Outdoor</option>
                                    <option value="Sepatu Outdoor">Sepatu Outdoor</option>
                                </select>

                                <label for="Alamat" style="padding-top:13px">
                                    &nbsp;Alamat Pendaki
                                </label>
                                <input id="Alamat" class="form-content" type="text" name="Alamat" autocomplete="on" required />
                                <div class="form-border"></div>

                                <label for="No_Hp" style="padding-top:13px">
                                    &nbsp;No Telepon
                                </label>
                                <input id="No_Hp" class="form-content" type="number" name="No_Hp" autocomplete="on" required />
                                <div class="form-border"></div>

                                <label for="Jumlah_Barang" style="padding-top:13px">
                                    &nbsp;Jumlah Pembelian
                                </label>
                                <input id="Jumlah_Barang" class="form-content" type="number" name="Jumlah_Barang" autocomplete="on" required />
                                <div class="form-border"></div>

                                <input id="submit-btn" type="submit" name="submit" value="Check In" />
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!----------------------------------Modal Alat Hiking---------------------------->







    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex">
            <img src="assets/img/gunung1.png" width="60px" class="rounded-circle shadow">
            <div class="logo mr-auto">
                <h1 class="text-light"><a href="<?= base_url('/') ?>"><span>IZMA ADVENTURE</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">

                <ul>
                    <li><a href="#gunung">Daftar Gunung</a></li>
                    <li><a href="#alathiking">Alat Hiking</a></li>

                    <li class="get-started"><a href="auth/logout">Logout</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->




    <!-- ======= Portfolio Section ======= -->
    <section id="gunung" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Daftar Gunung</h2>
                <p>Ayo Pilih Gunung yang mau di tuju</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Semua Gunung</li>
                        <li data-filter=".filter-app">Jawa Barat</li>
                        <li data-filter=".filter-card">Jawa Timur</li>
                        <li data-filter=".filter-web">Sumatra</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/mountain/ciremai.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="" data-toggle="modal" data-target="#modal" title="App 1"><i class="icofont-plus-circle"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Gunung Ciremai</h4>
                            <p>Harga Tiket Rp.50,000,00</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/mountain/kerinci.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="" data-toggle="modal" data-target="#modal" title="Web 3"><i class="icofont-plus-circle"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Gunung Kerinci</h4>
                            <p>Harga Tiket Rp.25,000,00</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/mountain/cikuray.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="" data-toggle="modal" data-target="#modal" title="App 2"><i class="icofont-plus-circle"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Gunung Cikuray</h4>
                            <p>Harga Tiket Rp.20,000,00</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/mountain/semeru.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="" data-toggle="modal" data-target="#modal" title="Card 2"><i class="icofont-plus-circle"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Gunung Semeru</h4>
                            <p>Harga Tiket Rp.25,000,00</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/mountain/rinjani.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="" data-toggle="modal" data-target="#modal" title="Web 2"><i class="icofont-plus-circle"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Gunung Rinjani</h4>
                            <p>Harga Tiket Rp.10,000,00</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/mountain/gede.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="" data-toggle="modal" data-target="#modal" title="App 3"><i class="icofont-plus-circle"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Gunung Gede Pangrango</h4>
                            <p>Harga Tiket Rp.30,000,00</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/mountain/bromo.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="" data-toggle="modal" data-target="#modal" title="Card 1"><i class="icofont-plus-circle"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Gunung Bromo</h4>
                            <p>Harga Tiket Rp.35,000,00</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/mountain/arjuno.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="" data-toggle="modal" data-target="#modal" title="Card 3"><i class="icofont-plus-circle"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Gunung Arjuno</h4>
                            <p>Harga Tiket Rp.20,000,00</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/mountain/prau.png" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="" data-toggle="modal" data-target="#modal" title="Web 3"><i class="icofont-plus-circle"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Gunung Prau</h4>
                            <p>Harga Tiket Rp.10,000,00</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="alathiking" class="alathiking">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Daftar Alat Hiking</h2>
                <p>Ayo Pilih sesuai kebutuhan </p>
            </div>

            <div class="row">

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member">
                        <img src="assets/img/alat/tenda.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <a href="" data-toggle="modal" data-target="#hiking"><i class="icofont-plus-circle"></i></a>
                                <h4>Tenda Dome Waterproof</h4>
                                <span>Harga 800k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="member">
                        <img src="assets/img/alat/carier.jpeg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <a href="" data-toggle="modal" data-target="#hiking"><i class="icofont-plus-circle"></i></a>
                                <h4>Tas Carier 7 Liter</h4>
                                <span>Harga 500k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="member">
                        <img src="assets/img/alat/jaket.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <a href="" data-toggle="modal" data-target="#hiking"><i class="icofont-plus-circle"></i></a>
                                <h4>Jaket Outdoor Waterproof</h4>
                                <span>Harga 300k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="member">
                        <img src="assets/img/alat/cooking.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <a href="" data-toggle="modal" data-target="#hiking"><i class="icofont-plus-circle"></i></a>
                                <h4>Cooking Set Outdoor</h4>
                                <span>Harga 250k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="member">
                        <img src="assets/img/alat/trekpol.png" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <a href="" data-toggle="modal" data-target="#hiking"><i class="icofont-plus-circle"></i></a>
                                <h4>Trekking Pole</h4>
                                <span>Harga 150k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="member">
                        <img src="assets/img/alat/hammock.png" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <a href="" data-toggle="modal" data-target="#hiking"><i class="icofont-plus-circle"></i></a>
                                <h4>Hammock</h4>
                                <span>Harga 50k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="member">
                        <img src="assets/img/alat/senter.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <a href="" data-toggle="modal" data-target="#hiking"><i class="icofont-plus-circle"></i></a>
                                <h4>Senter Outdoor</h4>
                                <span>Harga 100k</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="member">
                        <img src="assets/img/alat/sepatu.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <a href="" data-toggle="modal" data-target="#hiking"><i class="icofont-plus-circle"></i></a>
                                <h4>Sepatu Outdoor</h4>
                                <span>Harga 250k</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Jasa Pengiriman</h2>
                <p>Aman dan Terpercaya</p>
            </div>

            <div class="owl-carousel clients-carousel" data-aos="fade-up" data-aos-delay="100">
                <img src="assets/img/clients/shoppe.png" alt="">
                <img src="assets/img/clients/lazada.png" alt="">
                <img src="assets/img/clients/tokopedia.png" alt="">
                <img src="assets/img/clients/bukalapak.png" alt="">
                <img src="assets/img/clients/jd.png" alt="">
                <img src="assets/img/clients/blibli.png" alt="">

            </div>

        </div>
    </section><!-- End Clients Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container py-4">
            <div class="copyright">
                &copy; Kunjungi Situs Website Kami <strong><span>IZMA ADVENTURE</span></strong>.Mudah Cepat dan Terpercaya
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
                Alamat email <a href="#">izma.adventure@gmail.com</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>