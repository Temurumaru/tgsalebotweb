<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Cards - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

 
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Category 1</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Category 2</span>
            </a>
          </li>
          <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>Category 3</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Category 4</span>
            </a>
          </li>
          <li>
            <a href="components-buttons.html">
              <i class="bi bi-circle"></i><span>Category 5</span>
            </a>
          </li>
          <li>
            <a href="components-cards.html">
              <i class="bi bi-circle"></i><span>Category 6</span>
            </a>
          </li>
          <li>
            <a href="components-carousel.html">
              <i class="bi bi-circle"></i><span>Category 7</span>
            </a>
          </li>
          <li>
            <a href="components-list-group.html">
              <i class="bi bi-circle"></i><span>Category 8</span>
            </a>
          </li>
          <li>
            <a href="components-modal.html">
              <i class="bi bi-circle"></i><span>Category 9</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Cards</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Cards</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row align-items-top">
        <div class="col-lg-9">


          <!-- Card with an image on left -->
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="/assets/img/card.jpg" class="img-fluid rounded-start" >
                <!-- <video src="">
                  <source>
                </video> -->
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card with an image on left</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  
                  <hr>
                  <form class="row g-3">
                    <div class="col-md-6">
                      <label for="validationDefault01" class="form-label">Title </label>
                      <input type="text" class="form-control" id="validationDefault01" value="John" required>
                    </div>
                  
                    <div class="col-md-6">
                        <label for="validationDefault05" class="form-label">Rasm yoki video</label>
                        <input type="file" class="form-control" id="validationDefault05" required>
                    </div>
                    <div class="col-md-12">
                      <textarea class="form-control" placeholder="Bu yerda fikr qoldiring" id="floatingTextarea" style="height: 100px;"></textarea>
                    </div>
                    
                   
                
                   
                    <div class="col-12">
                  <button class="btn btn-danger" type="submit">Delete  Card</button>

                      <button class="btn btn-primary" type="submit">Change Card</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div><!-- End Card with an image on left -->
          <!-- Card with an image on left -->
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/img/card.jpg" class="img-fluid rounded-start" >
                <!-- <video src="">
                  <source>
                </video> -->
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card with an image on left</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  
                  <hr>
                  <form class="row g-3">
                    <div class="col-md-6">
                      <label for="validationDefault01" class="form-label">Title </label>
                      <input type="text" class="form-control" id="validationDefault01" value="John" required>
                    </div>
                  
                    <div class="col-md-6">
                        <label for="validationDefault05" class="form-label">Rasm yoki video</label>
                        <input type="file" class="form-control" id="validationDefault05" required>
                    </div>
                    <div class="col-md-12">
                      <textarea class="form-control" placeholder="Bu yerda fikr qoldiring" id="floatingTextarea" style="height: 100px;"></textarea>
                    </div>
                    
                   
                
                   
                    <div class="col-12">
                  <button class="btn btn-danger" type="submit">Delete  Card</button>

                      <button class="btn btn-primary" type="submit">Change Card</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div><!-- End Card with an image on left -->
          <!-- Card with an image on left -->
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/img/card.jpg" class="img-fluid rounded-start" >
                <!-- <video src="">
                  <source>
                </video> -->
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card with an image on left</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  
                  <hr>
                  <form class="row g-3">
                    <div class="col-md-6">
                      <label for="validationDefault01" class="form-label">Title </label>
                      <input type="text" class="form-control" id="validationDefault01" value="John" required>
                    </div>
                  
                    <div class="col-md-6">
                        <label for="validationDefault05" class="form-label">Rasm yoki video</label>
                        <input type="file" class="form-control" id="validationDefault05" required>
                    </div>
                    <div class="col-md-12">
                      <textarea class="form-control" placeholder="Bu yerda fikr qoldiring" id="floatingTextarea" style="height: 100px;"></textarea>
                    </div>
                    
                   
                
                   
                    <div class="col-12">
                  <button class="btn btn-danger" type="submit">Delete  Card</button>

                      <button class="btn btn-primary" type="submit">Change Card</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div><!-- End Card with an image on left -->
          <!-- Card with an image on left -->
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/img/card.jpg" class="img-fluid rounded-start" >
                <!-- <video src="">
                  <source>
                </video> -->
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card with an image on left</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  
                  <hr>
                  <form class="row g-3">
                    <div class="col-md-6">
                      <label for="validationDefault01" class="form-label">Title </label>
                      <input type="text" class="form-control" id="validationDefault01" value="John" required>
                    </div>
                  
                    <div class="col-md-6">
                        <label for="validationDefault05" class="form-label">Rasm yoki video</label>
                        <input type="file" class="form-control" id="validationDefault05" required>
                    </div>
                    <div class="col-md-12">
                      <textarea class="form-control" placeholder="Bu yerda fikr qoldiring" id="floatingTextarea" style="height: 100px;"></textarea>
                    </div>
                    <div class="col-12">
                  <button class="btn btn-danger" type="submit">Delete  Card</button>

                      <button class="btn btn-primary" type="submit">Change Card</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div><!-- End Card with an image on left -->
          <!-- Card with an image on left -->
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/img/card.jpg" class="img-fluid rounded-start" >
                <!-- <video src="">
                  <source>
                </video> -->
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card with an image on left</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  
                  <hr>
                  <form class="row g-3">
                    <div class="col-md-6">
                      <label for="validationDefault01" class="form-label">Title </label>
                      <input type="text" class="form-control" id="validationDefault01" value="John" required>
                    </div>
                  
                    <div class="col-md-6">
                        <label for="validationDefault05" class="form-label">Rasm yoki video</label>
                        <input type="file" class="form-control" id="validationDefault05" required>
                    </div>
                    <div class="col-md-12">
                      <textarea class="form-control" placeholder="Bu yerda fikr qoldiring" id="floatingTextarea" style="height: 100px;"></textarea>
                    </div>
                    
                   
                
                   
                    <div class="col-12">
                  <button class="btn btn-danger" type="submit">Delete  Card</button>

                      <button class="btn btn-primary" type="submit">Change Card</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div><!-- End Card with an image on left -->

        </div>

       

        <div class="col-lg-3">

          <!-- Card with an image overlay -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yangi qowiw</font></font></h5>
  
              <form class="row g-3">
                <div class="col-md-6">
                  <label for="validationDefault01" class="form-label">Title </label>
                  <input type="text" class="form-control" id="validationDefault01" value="John" required>
                </div>
              
                <div class="col-md-6">
                    <label for="validationDefault05" class="form-label">Rasm yoki video</label>
                    <input type="file" class="form-control" id="validationDefault05" required>
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" placeholder="Bu yerda fikr qoldiring" id="floatingTextarea" style="height: 100px;"></textarea>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Create Card</button>
                </div>
              </form>
  
            </div>
          </div><!-- End Card with an image overlay -->
          
          
          
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="/assets/vendor/echarts/echarts.min.js"></script>
  <script src="/assets/vendor/quill/quill.min.js"></script>
  <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>