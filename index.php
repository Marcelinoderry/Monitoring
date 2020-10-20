<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Monitoring</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- normalize CSS -->
        <link rel="stylesheet" href="css/bootstrap-table.css">
        <link rel="stylesheet" href="css/bootstrap-editable.css">
        <link rel="stylesheet" href="css/normalize.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

    </head>
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href=""><img src="assets/img/pelindoo.png" alt=""> Monitoring</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Aplikasi Berjalan</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">DB Server Berjalan</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li> -->
                        <li> <button class="btn btn-danger" type="submit" name="logout" data-placement="top" title="Logout"><i class="fas fa-sign-out-alt"></i> </button></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navigation-->

        <!-- Masthead-->
        <header class="masthead" id="">
            <div class="container">
                <div class="masthead-subheading"><img src="assets/img/pelindoo.png" alt=""> Monitoring</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <!-- <a class="btn btn-primary btn-l text-uppercase js-scroll-trigger" href="#">LOGIN</a> -->
            </div>
        </header>
        <!-- Masthead-->

        <!-- Filter -->
        <section class="page-section bg-white" id="">
            <div class="container">
              <form>
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Direktorat</label>
                  <select name="direktorat" id="direktorat" class="form-control">
                    <option>Direktorat</option>
                    <option>Keuangan</option>
                    <option>Operasi</option>
                    <option>SDM & Umum</option>
                    <option>Teknik</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Pengguna</label>
                  <select name="pengguna" id="pengguna" class="form-control">
                    <option>Pengguna</option>
                    <option>JAYAPURA</option>
                    <option>PANTOLOAN</option>
                    <option>KENDARI</option>
                    <option>GORONTALO</option>
                    <option>TARAKAN</option>
                    <option>PUSAT</option>
                    <option>ALL</option>
                  </select>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Search</button>
            </form><br><br>

              <div class="row">
                <div class="table-responsive">
                  <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Direktorat</th>
                      <th>Aplikasi</th>
                      <th>Pengguna</th>
                      <th>Pemakaian</th>
                      <th>Posisi</th>
                      <th>URL</th>
                      <th>IP App Server</th>
                      <th>IP Database</th>
                      <th>Port Aplikasi</th>
                      <th>Deskripsi</th>
                      <th>Tolls Pembangun</th>
                      <th>Status</th>
                      <th>Milik</th>
                      <th>OS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Keuangan</td>
                      <td>SAP</td>
                      <td>ALL</td>
                      <td>Terpusat</td>
                      <td>KP</td>
                      <td>example.com</td>
                      <td>192.168.0.1</td>
                      <td>192.169.0.1</td>
                      <td>8080</td>
                      <td>Aplikasi ini</td>
                      <td>Ini</td>
                      <td>ON</td>
                      <td>Ini</td>
                      <td>Windows</td>
                    </tr>
                    <tr>
                      <td>Keuangan</td>
                      <td>IBS</td>
                      <td>ALL</td>
                      <td>Terpusat</td>
                      <td>KP</td>
                      <td>example.com</td>
                      <td>192.168.0.2</td>
                      <td>192.169.0.2</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Operasi</td>
                      <td>EBTOS</td>
                      <td>Jayapura</td>
                      <td>Jayapura</td>
                      <td>KP</td>
                      <td>example.com</td>
                      <td>192.168.0.3</td>
                      <td>192.169.0.3</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Operasi</td>
                      <td>ICONOS</td>
                      <td>Pantoloan</td>
                      <td>Pantoloan</td>
                      <td>KP</td>
                      <td>example.com</td>
                      <td>192.168.0.4</td>
                      <td>192.169.0.4</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Operasi</td>
                      <td>DEPO</td>
                      <td>Kendari</td>
                      <td>Terpusat</td>
                      <td>KP</td>
                      <td>example.com</td>
                      <td>192.168.0.5</td>
                      <td>192.169.0.5</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </div>
            </div>
        </section>
        <!-- Filter -->

        <!-- Aplikasi Berjalan-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
              <div class="text-center">
                  <h2 class="section-heading text-uppercase">Aplikasi berjalan</h2>
              </div><br>
                <div class="row">
                    <div class="col-lg-3 col-sm-3 mb-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                              <div class="portfolio-caption">
                                  <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-coins fa-stack-1x fa-inverse"></i>
                                  </span>
                                  <div class="portfolio-caption-heading">Keuangan</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 mb-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                              <div class="portfolio-caption">
                                  <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-sync-alt fa-stack-1x fa-inverse"></i>
                                  </span>
                                  <div class="portfolio-caption-heading">Operasi</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 mb-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                              <div class="portfolio-caption">
                                  <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-city fa-stack-1x fa-inverse"></i>
                                  </span>
                                  <div class="portfolio-caption-heading">SDM & Umum</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 mb-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                              <div class="portfolio-caption">
                                  <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-tools fa-stack-1x fa-inverse"></i>
                                  </span>
                                  <div class="portfolio-caption-heading">Teknik</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Aplikasi Berjalan-->

        <!-- DB server berjalan -->
        <section class="page-section bg-white" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">DB Server Berjalan</h2>
                </div><br>
                <div class="row">
                    <div class="col-lg-3 col-sm-3 mb-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                              <div class="portfolio-caption">
                                  <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-database fa-stack-1x fa-inverse"></i>
                                  </span>
                                  <div class="portfolio-caption-heading">Host</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 mb-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                              <div class="portfolio-caption">
                                  <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-database fa-stack-1x fa-inverse"></i>
                                  </span>
                                  <div class="portfolio-caption-heading">Host</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 mb-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                              <div class="portfolio-caption">
                                  <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-database fa-stack-1x fa-inverse"></i>
                                  </span>
                                  <div class="portfolio-caption-heading">Host</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 mb-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                              <div class="portfolio-caption">
                                  <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-database fa-stack-1x fa-inverse"></i>
                                  </span>
                                  <div class="portfolio-caption-heading">Host</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- DB server berjalan -->

        <!-- Contact-->
        <section class="page-section bg-light" id="contact">
            <div class="container">
                <div class="info-wrap">
                    <div class="row">
                      <div class="col-lg-3 col-md-6 info">
                        <i class="icofont-google-map"></i>
                        <h4>Location:</h4>
                        <p>A108 Adam Street<br>New York, NY 535022</p>
                      </div>

                      <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="icofont-clock-time icofont-rotate-90"></i>
                        <h4>Open Hours:</h4>
                        <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
                      </div>

                      <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com<br>contact@example.com</p>
                      </div>

                      <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="icofont-phone"></i>
                        <h4>Call:</h4>
                        <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                      </div>
                    </div>
                  </div>
            </div>
        </section>
        <!-- Contact-->

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-lg-center">Copyright © Your Website 2020</div>
                </div>
            </div>
        </footer>
        <!-- Footer-->

        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container-fluid">
                      <!-- Data Table start -->
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="sparkline13-list shadow-reset">

                                  <div class="sparkline13-graph">
                                      <div class="datatable-dashv1-list custom-datatable-overright">
                                          <div id="toolbar"></div>
                                          <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                              <thead>
                                                  <tr>
                                                      <th data-field="direktorat">Direktorat</th>
                                                      <th data-field="aplikasi">Aplikasi</th>
                                                      <th data-field="pengguna">Pengguna</th>
                                                      <th data-field="pemakaian">Pemakaian</th>
                                                      <th data-field="posisi">Posisi</th>
                                                      <th data-field="url">URL</th>
                                                      <th data-field="ipserver">IP App Server</th>
                                                      <th data-field="ipdatabase">IP Database</th>
                                                      <th data-field="port">Port Aplikasi</th>
                                                      <th data-field="deskripsi">Deskripsi</th>
                                                      <th data-field="tolls">Tolls Pembangun</th>
                                                      <th data-field="status">Status</th>
                                                      <th data-field="milik">Milik</th>
                                                      <th data-field="os">OS</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>Keuangan</td>
                                                      <td>SAP</td>
                                                      <td>All</td>
                                                      <td>Terpusat</td>
                                                      <td>KP</td>
                                                      <td>.com</td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                  </tr>
                                                  <tr>
                                                      <td>Keuangan</td>
                                                      <td>IBS</td>
                                                      <td>All</td>
                                                      <td>Terpusat</td>
                                                      <td>KP</td>
                                                      <td>.com</td>
                                                      <td>192.168.0.1</td>
                                                      <td>192.169.0.1</td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Data Table end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/02-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Explore</li>
                                        <li>Category: Graphic Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/03-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Finish</li>
                                        <li>Category: Identity</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/04-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Lines</li>
                                        <li>Category: Branding</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/05-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Southwest</li>
                                        <li>Category: Website Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Window</li>
                                        <li>Category: Photography</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- data table JS -->
        <script src="js/bootstrap-table.js"></script>
        <script src="js/tableExport.js"></script>
        <script src="js/data-table-active.js"></script>
        <script src="js/bootstrap-table-editable.js"></script>
        <script src="js/bootstrap-editable.js"></script>
        <script src="js/bootstrap-table-resizable.js"></script>
        <script src="js/colResizable-1.5.source.js"></script>
        <script src="js/bootstrap-table-export.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
