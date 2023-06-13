
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GBI Tambunan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/logo.png" rel="icon" style="border-radius:12px">
  <link href="/img/logo.png" rel="apple-touch-icon" style="border-radius:12px">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset/vendor/animate.css/animate.min.css" rel="stylsheet">
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="asset/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v4.7.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-color:#F2F4F4">

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top bg-primary">
     @include('layouts.nav')
  </nav><!-- End Header/Navbar -->
  <!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">
  @include('layouts/userkarausels.index')
</div>

<div class="swiper-pagination"></div>
</div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
     @yield('content')
    </section><!-- End Services Section -->
     
    <!-- ======= Agents Section ======= -->
    <hr>
 
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <div class="card" style="background-color:black">
    <footer style="background-color:black">
      @include('layouts.footer')
    </footer><!-- End  Footer -->
   </div>


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/asset/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/asset/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/asset/js/main.js"></script>

</body>

</html> 