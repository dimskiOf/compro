<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <link rel="icon" href="assets/image/logo-32x32.png" sizes="32x32" />
    <link rel="icon" href="assets/image/logo-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="assets/image/logo-180x180.png" />
    <meta name="msapplication-TileImage" content="assets/image/logo-270x270.png" />
    <title>Figo: Hubungi kami untuk mendapatkan informasi lebih lanjut</title>
    <meta name="description" content="FIGO: Produsen Selang &amp; Fitting, ember, dan Selang Berkualitas" />
    <link rel="canonical" href="https://localhost/compro/template1/beranda.php" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="FIGO: Produsen Selang &amp; Fitting, ember, dan Selang Berkualitas" />
    <meta property="og:description" content="FIGO: Produsen Selang &amp; Fitting, ember, dan Selang Berkualitas" />
    <meta property="og:url" content="https://localhost/compro/template1/beranda.php" />
    <meta property="og:site_name" content="Trilliun Group" />

    <link rel='stylesheet' href='assets/css/bootstrap.min.css' type='text/css' />
    <link rel='stylesheet' href='assets/css/all.min.css' type='text/css' />
    <link rel='stylesheet' href='assets/css/style.css' type='text/css' />
    <link rel='stylesheet' href='assets/css/font-style.css' type='text/css' />
    <link rel='stylesheet' href='assets/css/style-scroll.css' type='text/css' />
    <link rel='stylesheet' href='assets/css/glide.core.min.css' type='text/css' />
    <style>
        .spinner-border-sm {
            position: absolute;
        }

        .pages-header-paralax {
            background-size: 130%;
            background-blend-mode: overlay;
            background-color: rgba(0, 0, 0, 0.17) !important;
        }

        .pages-header::before {
            background: rgba(0, 0, 0, 0.03);
        }

        .contactus-detail {
            font-weight: 300;
        }

        @media (max-width: 992px) {
            .pages-header {
                height: 60vh !important;
            }

            .pages-header h5 {
                font-size: 28px !important;
            }

            .pages-header-paralax {
                background-size: cover;
            }
        }

        @media (max-width: 576px) {
            .pages-header {
                height: 60vh !important;
            }

            .pages-header-paralax {
                background-size: cover;
            }
        }

        #map_canvas {
            width: 100%;
            height: 300px;
        }

        .btn-wa {
            position: fixed;
            right: 20px;
            bottom: 20px;
            z-index: 999999;
            background: rgb(37, 211, 102);
            color: white;
            padding: 12px 20px;
            border-radius: 24px;
            box-shadow: 0 0 4px 1px rgba(0, 0, 0, .2);
            -webkit-box-shadow: 0 0 4px 1px rgba(0, 0, 0, .2);
        }

        .grecaptcha-badge {
            display: none !important;
        }
    </style>

</head>

<body>
      <div class="fixed-top">
        <nav class="navbar bg-white trilliun_navbar fixed-top">
            <div class="d-flex flex-row align-items-center px-4 navbar-container d-none d-lg-flex">
                <a class="navbar-logo" href="beranda.php"><img src="assets/image/only IO.png"
                        alt="Trilliun" width="60"></a>
                <a class="navbar-logo-text ms-2 me-4" href="beranda.php"><img
                        src="assets/image/figo-tulisan.png" class="mr-4" alt="Trilliun" width="60"
                        ></a>
                <div class="navbar-menu-btn d-flex align-items-center ms-2">
                    <a href="#!" class="navmenu-btn">MENU</a>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-between px-4 w-100 d-lg-none d-block">
                <div class="d-flex flex-row align-items-center">
                    <a class="navbar-logo" href="beranda.php"><img src="assets/image/only IO.png"
                            alt="Trilliun" width="60"></a>
                    <a class="navbar-logo-text ms-2 me-4" href="beranda.php"><img
                            src="assets/image/figo-tulisan.png" class="mr-4" alt="Trilliun" width="60"
                            style=""></a>
                </div>
                <div class="navbar-menu-btn border-0 d-flex align-items-center justify-content-end">
                    <a href="#!" class="navmenu-btn">MENU</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="d-lg-block d-none">
        <div class="menu-header-lg d-flex flex-wrap" id="navmenu">
            <div class="d-flex flex-column navbar-left">
                <div class="navbar-menu">
                    <ul>
                        <li>
                            <a href="beranda.php">HOME</a>
                            <a href="about.php">ABOUT</a>
                            <a href="catalog.php">CATALOG</a>
                            <a href="project.php">PROJECT</a>
                            <a href="karir.php">CAREERS</a>
                            <a href="kontak.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-submenu d-flex flex-row justify-content-between">
                    <div class="d-flex flex-column">
                        <ul>
                            <li>
                                <a href="#" class="submenu-heading d-flex flex-column align-items-start">
                                    <img src="assets/image/gutter 01qs.png">
                                    <span>SPECIALITY PVC HOSE &nbsp;</span> 
                                </a>
                            </li>
                            <li>
                                <a href="#">Air Pressure</a>
                            </li>
                            <li>
                                <a href="#">Liquid Petrolium Gas</a>
                            </li>
                            <li>
                                <a href="#">Twin Welding</a>
                            </li>
                        </ul>
                       
                    </div>

                    <div class="d-flex flex-column">
                        <ul>
                            <li>
                                <a href="#" class="submenu-heading d-flex flex-column align-items-start">
                                    <img src="assets/image/gutter 01qs.png">
                                    <span>HEAVY DUTY PVC HOSE &nbsp;</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Lay Flat</a>
                            </li>
                            <li>
                                <a href="#">Steel Wire</a>
                            </li>
                            <li>
                                <a href="#">Spiral</a>
                            </li>
                          
                        </ul>

                    </div>

                    <div class="d-flex flex-column">
                        <ul>
                            <li>
                                <a href="#" class="submenu-heading d-flex flex-column align-items-start">
                                    <img src="assets/image/gutter 01qs.png">
                                    <span>GARDEN PVC HOSE &nbsp;</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Dop</a>
                            </li>
                            <li>
                                <a href="#">Elastic</a>
                            </li>
                            <li>
                                <a href="#">Hydroponic</a>
                            </li>
                            <li>
                                <a href="#">Reinforced</a>
                            </li>
                        </ul>
                        
                    </div>

                     <div class="d-flex flex-column">
                        <ul>
                            <li>
                                <a href="#" class="submenu-heading d-flex flex-column align-items-start">
                                    <img src="assets/image/gutter 01qs.png">
                                    <span>HOUSEHOLD & <br> MULTIPURPOSES &nbsp;</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Anti-Slip Stair Trim</a>
                            </li>
                            <li>
                                <a href="#">Bucket</a>
                            </li>
                            <li>
                                <a href="#">Cable Duct Protector</a>
                            </li>
                            <li>
                                <a href="#">Corrugated</a>
                            </li>
                            <li>
                                <a href="#">Fitting</a>
                            </li>
                            <li>
                                <a href="#">Pouch Trim</a>
                            </li>
                        </ul>
                        
                    </div>

                     <div class="d-flex flex-column">
                        <ul>
                            <li>
                                <a href="#" class="submenu-heading d-flex flex-column align-items-start">
                                    <img src="assets/image/gutter 01qs.png">
                                    <span>MEDICAL  PART DEVICE &nbsp;</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Blood Transfusion Part</a>
                            </li>
                            <li>
                                <a href="#">Drainage Part</a>
                            </li>
                            <li>
                                <a href="#">Infusion Part</a>
                            </li>
                            <li>
                                <a href="#">Respiratory Part</a>
                            </li>
                            <li>
                                <a href="#">Urology Part</a>
                            </li>
                        </ul>
                        
                    </div>

                </div>
            </div>
            <div class="d-flex flex-wrap navbar-right">
                <strong class="mb-4 contactus">Contact Us</strong>
                <p class="mb-1">
                    <strong>PT. Mahajaya Plastindo Indonesia</strong>
                </p>
                <p><b>Alamat Head Office:  </b><br />
                    Jl. Raya Salembaran, Salembaran Jati, Kec. Kosambi, Kabupaten Tangerang, Banten 15214 <br/>
                   <span><i class="fa-solid fa-phone fa-sm text-trilliun me-2"></i> 021-55932666 / 851 / 816</span><br />
                   <span><i class="fa-solid fa-phone fa-sm text-trilliun me-2"></i> 021-22550093</span><br />
                   <span><i class="fa-solid fa-phone fa-sm text-trilliun me-2"></i> 021-22550177 / 178</span>
                </p>
                <p><b>Palembang:  </b><br />
                    Permai Sumatera, CV Km. 8 Komp. Pergudangan Prima Star RT. 011 RW. 005 Blok C1 Gasing, Talang Kelapa Kab. Banyuasin Sumatera Selatan <br/>
                   <span><i class="fa-solid fa-phone fa-sm text-trilliun me-2"></i> +62 853-7901-9156</span>
                </p>
                <p><b>Surabaya:  </b><br />
                    Mahajaya Sentosa, CV Jl. Tambak Langon Indah 1 Blok. A No. 21 Pergudangan Mutiara Tambak Langon, Asemrowo, Kota Surabaya <br/>
                   <span><i class="fa-solid fa-phone fa-sm text-trilliun me-2"></i> +62 857-1856-9017</span>
                </p>
                <div class="d-flex flex-column gap-3 mt-2 contactus-detail">
                    <a href="mail@pabrikselang.com" class="text-trilliun"><i
                            class="fa-solid fa-envelope text-trilliun me-2"></i>
                        mail@pabrikselang.com</a>
                </div>
                <!-- <p class="mb-1 mt-4 mb-3">
                    <strong>Follow Us At:</strong>
                </p> -->
                <!-- <div class="d-flex flex-row gap-3">
                    <a href="#"
                        class="d-flex rounded-circle text-white bg-trilliun sc-icon" target="_blank" rel="noopener"><i
                            class="fa-brands fa-facebook-f my-auto mx-auto"></i></a>
                    <a href="#"
                        class="d-flex rounded-circle text-white bg-trilliun sc-icon" target="_blank" rel="noopener"><i
                            class="fa-brands fa-instagram my-auto mx-auto"></i></a>
                    <a href="#"
                        class="d-flex rounded-circle text-white bg-trilliun sc-icon" target="_blank" rel="noopener"><i
                            class="fa-brands fa-youtube my-auto mx-auto"></i></a>
                    <a href="#"
                        class="d-flex rounded-circle text-white bg-trilliun sc-icon" target="_blank" rel="noopener"><i
                            class="fa-brands fa-tiktok my-auto mx-auto"></i></a>

                </div> -->
            </div>
        </div>
    </div>
    <div class="d-block d-lg-none">

        <div class="menu-header-lg-mobile d-lg-none d-block d-flex flex-wrap pt-4" id="navmenu-2">
            <ul class="list-unstyled fw-normal small">
                <li class="navmenu-header">
                    <a href="about.php" class="nav-link-mobile d-block">About</a>
                </li>
                <li class="navmenu-header">
                    <a href="catalog.php" class="nav-link-mobile d-block">Catalog</a>
                </li>
                <li class="navmenu-header">
                    <a href="project.php" class="nav-link-mobile d-block">Projects</a>
                </li>
                <li class="navmenu-header">
                    <a href="karir.php" class="nav-link-mobile d-block">Careers</a>
                </li>
                <li class="navmenu-header">
                    <a href="kontak.php" class="nav-link-mobile d-block">Contact</a>
                </li>
                <li class="navmenu-header">
                    <div class="nav-link-mobile nav-link-collapse d-flex justify-content-between collapsed"
                        data-bs-toggle="collapse" data-bs-target="#spcpvxhose-collapse">
                        SPECIALITY PVC HOSE
                        <div class="nav-arrow"></div>
                    </div>

                    <div class="collapse" id="spcpvxhose-collapse">
                        <ul class="list-unstyled fw-normal small">
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Air Pressure
                                </a></li>
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Liquid Petrolium Gas
                                </a></li>
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Twin Welding
                                </a></li>
                        </ul>
                    </div>
                </li>
                <li class="navmenu-header">
                    <div class="nav-link-mobile nav-link-collapse d-flex justify-content-between collapsed"
                        data-bs-toggle="collapse" data-bs-target="#heavydutypvxhose-collapse">
                        HEAVY DUTY PVC HOSE
                        <div class="nav-arrow"></div>
                    </div>

                    <div class="collapse" id="heavydutypvxhose-collapse">
                        <ul class="list-unstyled fw-normal small">
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Lay Flat
                                </a></li>
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Steel Wire
                                </a></li>
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Spiral
                                </a></li>
                        </ul>
                    </div>
                </li>
                <li class="navmenu-header">
                    <div class="nav-link-mobile nav-link-collapse d-flex justify-content-between collapsed"
                        data-bs-toggle="collapse" data-bs-target="#gardenpvxhose-collapse">
                        GARDEN PVC HOSE
                        <div class="nav-arrow"></div>
                    </div>

                    <div class="collapse" id="gardenpvxhose-collapse">
                        <ul class="list-unstyled fw-normal small">
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Dop
                                </a></li>
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Elastic
                                </a></li>
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Hydroponic
                                </a></li>
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Reinforced
                                </a></li>
                        </ul>
                    </div>
                </li>
                 <li class="navmenu-header">
                    <div class="nav-link-mobile nav-link-collapse d-flex justify-content-between collapsed"
                        data-bs-toggle="collapse" data-bs-target="#hshldmultihose-collapse">
                        HOUSEHOLD & MULTIPURPOSES
                        <div class="nav-arrow"></div>
                    </div>

                    <div class="collapse" id="hshldmultihose-collapse">
                        <ul class="list-unstyled fw-normal small">
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Anti-Slip Stair Trim
                                </a></li>
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Bucket
                                </a></li>
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Cable Duct Protector
                                </a></li>
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Corrugated
                                </a></li>
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Fitting
                                </a></li>
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Pouch Trim
                                </a></li>
                        </ul>
                    </div>
                </li>
                 <li class="navmenu-header">
                    <div class="nav-link-mobile nav-link-collapse d-flex justify-content-between collapsed"
                        data-bs-toggle="collapse" data-bs-target="#medicalpartdev-collapse">
                        MEDICAL PART DEVICE
                        <div class="nav-arrow"></div>
                    </div>

                    <div class="collapse" id="medicalpartdev-collapse">
                        <ul class="list-unstyled fw-normal small">
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Blood Transfusion Part
                                </a></li>
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Drainage Part
                                </a></li>
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Infusion Part
                                </a></li>
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Respiratory Part
                                </a></li>
                            <li><a href="#" class="nav-link navmenu-header-submenu">
                                    Urology Part
                                </a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

    </div>

    <div class="content">
        <a href="https://wa.me/6289526548452?text=Halo+Figo%2C+Silahkan+mengisi+data+dibawah+ini%3A%0A%0A-+Nama+%3A%0A-+Kota%2FKab.+%3A%0A-+Kebutuhan+%3A%0A-+Nomor+Telp.+%3A%0A-+Jenis+Usaha+%28Toko%2FProyek%2FRumah+Tangga%29++%3A%0A-+Info+no.+CS+Figo+dari+%28IG%2FFB%2FWEB%2FRekan%29++%3A%0A-+Pernah+menggunakan+Figo+%28Sudah%2FBelum%29++%3A"
            target="_blank" class="btn-wa d-flex flex-row gap-2">
            <i class="fa-brands fa-whatsapp"></i>
            <div>Chat on WhatsApp</div>
        </a>
        <div class="d-flex flex-column justify-content-end pt-md-5 pt-0 justify-content-md-center pb-4 pages-header pages-header-paralax"
            style="background-image:url('assets/image/businessloan.png')">
            <div class="d-flex flex-column pages-header-content">
                <p class="text-white p-0 mb-1">REASON <strong>#</strong></p>
                <h5 class="text-white d-none d-lg-block">Always listening to customers.</h5>
                <h5 class="text-white d-lg-none d-block">Always listening to<br /> customers.</h5>
            </div>
        </div>
        <br />
        <div class="d-flex flex-lg-row flex-column gap-5 contact-section">
            <div class="d-flex flex-column col-lg-6 order-lg-1 order-2">
                <h5 class="text-header">Company Information</h5>
                <div class="d-flex flex-column pt-2">
                    <p><strong>PT. Mahajaya Plastindo Indonesia</strong></p>
                    <div class="alamat-footer">
                        Jl. Raya Salembaran, Salembaran Jati, Kec. Kosambi, Kabupaten Tangerang, Banten 15214
                    </div>
                    <div class="d-flex flex-column gap-3 mt-2 contactus-detail pt-2">
                        <span><i class="fa-solid fa-phone fa-sm text-trilliun me-2"></i> 021-55932666 / 851 / 816</span>
                        <span><i class="fa-solid fa-phone fa-sm text-trilliun me-2"></i> 021-22550093</span>
                        <span><i class="fa-solid fa-phone fa-sm text-trilliun me-2"></i> 021-22550177 / 178<</span>
                        <span class="text-trilliun"><i class="fa-solid fa-envelope text-trilliun me-2"></i>
                            mail@pabrikselang.com.com</span>
                    </div>
                    <div class="my-4" id="map_canvas"></div>
                </div>
            </div>
            <div class="d-flex flex-column col-lg-6 order-lg-2 order-1">
                <h5 class="text-header">Connect</h5>
                <div class="d-flex flex-wrap gap-3 pt-2">
                    <a href="#"
                        class="d-flex rounded-circle text-white bg-trilliun sc-icon" target="_blank" rel="noopener"><i
                            class="fa-brands fa-facebook-f my-auto mx-auto"></i></a>
                    <a href="#"
                        class="d-flex rounded-circle text-white bg-trilliun sc-icon" target="_blank" rel="noopener"><i
                            class="fa-brands fa-instagram my-auto mx-auto"></i></a>
                    <a href="#"
                        class="d-flex rounded-circle text-white bg-trilliun sc-icon" target="_blank" rel="noopener"><i
                            class="fa-brands fa-youtube my-auto mx-auto"></i></a>
                    <a href="#"
                        class="d-flex rounded-circle text-white bg-trilliun sc-icon" target="_blank" rel="noopener"><i
                            class="fa-brands fa-tiktok my-auto mx-auto"></i></a>

                </div>
                <h5 class="text-header pt-3">INQUIRY</h5>
                <div class="contact-form d-flex justify-content-center">
                    <form method="POST" action="#" accept-charset="UTF-8" id="dform" class="form-career d-flex flex-column"><input name="_token" type="hidden" value="">
                        <div class="d-flex flex-row gap-3">
                            <div class="form-floating mb-3 flex-fill">
                                <input class="form-control" placeholder="Your Name" id="floatingName" name="name" type="text">
                                <label for="floatingName">Name</label>
                            </div>
                            <div class="form-floating mb-3 flex-fill">
                                <input class="form-control" placeholder="+62 000 0000 0000" id="floatingPhone" name="phone" type="text">
                                <label for="floatingPhone">Phone</label>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="youremail@email.com" id="floatingEmail" name="email" type="email">
                            <label for="floatingEmail">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Subject" id="floatingSubject" name="subject" type="text">
                            <label for="floatingSubject">Subject</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Your Message" id="floatingMsg" rows="10" style="height: auto;" name="text" cols="50"></textarea>
                            <label for="floatingMsg">Message</label>
                        </div>
                        <div class="mb-3 response-msg">
                        </div>
                        <button type="submit"
                            class="btn-trilliun border-0 bg-trilliun d-block text-white px-5 py-3 mx-auto btnSubmit">
                            <span class="spinner-border spinner-border-sm d-none loading-spinner" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </span>
                            <span class="btn-sp d-none">
                                &nbsp;&nbsp;&nbsp;
                            </span><span class="btn-text">Send</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid-x">

            <div class="pages-section text-center d-block d-flex flex-column flex-lg-row gap-3 py-0">
                <a href="about.php" class="card rounded-0 border-0 pages-card"
                    style="background-image: url('assets/image/hobibg.jpg')">
                    <div class="d-flex flex-column my-auto pages-card-body gap-2">
                        <h4 class="align-self-start">About <strong>FIGO</strong></h4>
                        <div class="align-self-start">Learn more</div>
                    </div>
                </a>
                <a href="karir.php" class="card rounded-0 border-0 pages-card"
                    style="background-image: url('assets/image/businessloan2.png')">
                    <div class="d-flex flex-column my-auto pages-card-body gap-2">
                        <h4 class="align-self-start">Careers</h4>
                        <div class="align-self-start">Inquiry Now</div>
                    </div>
                </a>
                <a href="kontak.php" class="card rounded-0 border-0 pages-card"
                    style="background-image: url('assets/image/businessloan.png')">
                    <div class="d-flex flex-column my-auto pages-card-body gap-2">
                        <h4 class="align-self-start">Contact Us</h4>
                        <div class="align-self-start">Send us a message</div>
                    </div>
                </a>
            </div>

        </div>
    </div>


     <div class="footer">
        <div class="logo-section"><img class=" logo-footer mb-3 lazy" data-src="assets/image/logo-trilliun-h.png"
                alt="Trilliun Logo"></div>
        <div class="row m-0 p-0">
            <div class="col-lg-2 d-flex flex-column gap-2">
                <h2 class="fw-bold company-name mb-0">PT. Mahajaya Plastindo Indonesia</h2>
                <div class="alamat-footer">
                    Jl. Raya Salembaran, Salembaran Jati, Kec. Kosambi, Kabupaten Tangerang, Banten 15214
                </div>
                <div class="d-flex flex-column gap-3 mt-2 contactus-detail">
                    <span><i class="fa-solid fa-phone fa-sm text-trilliun me-2"></i> 021-55932666 / 851 / 816</span>
                    <span><i class="fa-solid fa-phone fa-sm text-trilliun me-2"></i> 021-22550093</span>
                    <span><i class="fa-solid fa-phone fa-sm text-trilliun me-2"></i> 021-22550177 / 178</span>
                    <a href="mailto:mail@pabrikselang.com.com" class="text-trilliun"><i
                            class="fa-solid fa-envelope text-trilliun me-2"></i>
                        mail@pabrikselang.com</a>
                </div>
            </div>
            <div class="col-md d-flex flex-column gap-4 d-none d-lg-flex ps-5">
                <div class="d-flex flex-column gap-1">
                    <h3 class="fw-bold footer-heading">Speciality PVC Hose</h3>
                    <ul class="footer-menu">
                        <li><a href="#">Air Pressure</a></li>
                        <li><a href="#">Liquid Petrolium Gas</a></li>
                        <li><a href="#">Twin Welding</a></li>
                    </ul>
                </div>
              
            </div>
            <div class="col-md d-none d-lg-flex ps-4">
                <div class="d-flex flex-column gap-1">
                    <h3 class="fw-bold footer-heading">Heavy Duty PVC Hose</h3>
                    <ul class="footer-menu">
                        <li><a href="#">Lay Flat</a></li>
                        <li><a href="#">Steel Wire</a></li>
                        <li><a href="#">Spiral</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md d-flex flex-column gap-4 d-none d-lg-flex ps-3">
                <div class="d-flex flex-column gap-1">
                    <h3 class="fw-bold footer-heading">Garden PVC Hose</h3>
                    <ul class="footer-menu">
                        <li><a href="#">Dop</a></li>
                        <li><a href="#">Elastic</a></li>
                        <li><a href="#">Hydrophonic</a></li>
                        <li><a href="#">Reinforced</a></li>
                    </ul>
                </div>     
            </div>
            <div class="col-md d-flex flex-column gap-4 d-none d-lg-flex">
                <div class="d-flex flex-column gap-1">
                    <h3 class="fw-bold footer-heading">Household & Multipurposes</h3>
                    <ul class="footer-menu">
                        <li><a href="#">Anti-Slip Stair Trim</a></li>
                        <li><a href="#">Bucket</a></li>
                        <li><a href="#">Cable Duct Protector</a></li>
                        <li><a href="#">Corrugated</a></li>
                        <li><a href="#">Fitting</a></li>
                        <li><a href="#">Pouch Trim</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md d-flex flex-column gap-4 d-none d-lg-flex">
                <div class="d-flex flex-column gap-1">
                    <h3 class="fw-bold footer-heading">Medical Part Device</h3>
                    <ul class="footer-menu">
                        <li><a href="#">Blood Transfusion Part</a></li>
                        <li><a href="#">Drainage Part</a></li>
                        <li><a href="#">Infusion Part</a></li>
                        <li><a href="#">Respiratory Part</a></li>
                        <li><a href="#">Urology Part</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 d-flex flex-column gap-2">
                <div class="d-flex flex-column gap-2 d-none d-lg-flex">
                    <h3 class="fw-bold  footer-heading">Sitemap</h3>
                    <ul class="footer-menu">
                        <li><a href="beranda.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="catalog.php">Catalog</a></li>
                        <li><a href="project.php">Projects</a></li>
                        <li><a href="karir.php">Careers</a></li>
                        <li><a href="kontak.php">Contact</a></li>
                    </ul>
                </div>
                <div class="d-flex flex-column">
                    <p class="mb-1 mt-4 mb-3">
                        <strong>Follow Us At:</strong>
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#"
                            class="d-flex rounded-circle text-white bg-trilliun sc-icon" target="_blank" rel="noopener"><i
                                class="fa-brands fa-facebook-f my-auto mx-auto"></i></a>
                        <a href="#"
                            class="d-flex rounded-circle text-white bg-trilliun sc-icon" target="_blank" rel="noopener"><i
                                class="fa-brands fa-instagram my-auto mx-auto"></i></a>
                        <a href="#"
                            class="d-flex rounded-circle text-white bg-trilliun sc-icon" target="_blank" rel="noopener"><i
                                class="fa-brands fa-youtube my-auto mx-auto"></i></a>
                        <a href="#"
                            class="d-flex rounded-circle text-white bg-trilliun sc-icon" target="_blank"
                            rel="noopener"><i class="fa-brands fa-tiktok my-auto mx-auto"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <a class="scroll-to-top" onclick="topFunction()" id="scrollTop" title="Go to top"><i
            class="fa-solid fa-chevron-up"></i></a>

</body>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="assets/js/settings.js"></script>
<script type="text/javascript" src="assets/js/lazyload-images.js"></script>
<script type="text/javascript" src="assets/js/scroll-to-top.js"></script>
<script type="text/javascript" src="assets/js/lightbox.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLKueqqFXn68sOFFyFL6w4krOR96SIfoo"
    type="text/javascript"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LcM5X8pAAAAAB7uwPSw1RiVcbX1Q6nmIIFTuQ9h"></script>
<script>
    $(function() {
        $('body').on('click', '.btnSubmit', function(e) {
            e.preventDefault();
            $(this).find('.loading-spinner').removeClass('d-none');
            $(this).find('.btn-sp').removeClass('d-none');
            $(this).find('.btn-text').addClass('d-none');
            grecaptcha.ready(function() {
                grecaptcha.execute('6LcM5X8pAAAAAB7uwPSw1RiVcbX1Q6nmIIFTuQ9h', {
                    action: 'submit'
                }).then(function(token) {
                    $("#dform").submit()
                });
            });

        });

        var pos = null;
        if ($("#dform .alert").length > 0)
            pos = $('.alert').offset().top;

        if ($("#dform .alert").length > 0)
            pos = $('.alert').offset().top;

        if (pos != null)
            $("html,body").animate({
                scrollTop: pos - 150
            }, 0);
    });

    const latValue = "-7.5809328047373254";
    const longValue = "112.73454523846895";
    var defaultLocation = new google.maps.LatLng(latValue, longValue);

    var map = new google.maps.Map(document.getElementById('map_canvas'), {
        zoom: 17,
        center: defaultLocation,
        disableDefaultUI: true, // a way to quickly hide all controls
        scaleControl: true,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.LARGE
        },
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var myMarker = new google.maps.Marker({
        position: defaultLocation,
        draggable: false
    });

    map.setCenter(myMarker.position);
    myMarker.setMap(map);
</script>

</html>