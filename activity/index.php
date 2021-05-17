<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>กิจกรรมในทีม | Allianz</title>
  <meta content="" name="description">
  <meta content="กิจกรรมในทีม activity ประกันรถยนตร์ ประกันชีวิต" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="16x16" href="https://www.allianz.com/content/dam/onemarketing/azcom/Allianz_com/favicon/AZ_Logo_eagle.png/jcr:content/renditions/cq5dam.thumbnail.32.32.png">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/activity.css">
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <!-- create css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- aos -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <?php include '../component/Top_Bar.php'; ?>

  <!-- ======= Header ======= -->
  <?php include '../component/Header.php'; ?>
  <!-- End Header -->
  <?php $page = isset($_GET["page"]) ? $_GET["page"] : ''; ?>

  <main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <?php if ($page == "") { ?>
            <h2>กิจกรรมในทีม</h2>
            <ol>
              <li><a href="index.html">Activity</a></li>
              <li>กิจกรรมในทีม</li>
            </ol>
          <?php } else if ($page == "insurance") { ?>
            <h2>มอบกรมธรรม์</h2>
            <ol>
              <li><a href="index.html">Insurance</a></li>
              <li>มอบกรมธรรม์</li>
            </ol>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <!-- activity -->
        <?php if ($page == "") { ?>
          <div class="gallery">
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/1.jpg" class="gallery-image" width="100px" height="100px" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/2.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/3.jpg" class="gallery-image" alt="">
            </div>

            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/4.jpg" class="gallery-image" alt="">
            </div>

            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/5.jpg" class="gallery-image" alt="">
            </div>

            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/6.jpg" class="gallery-image" alt="">
            </div>

            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/7.jpg" class="gallery-image" alt="">
            </div>

            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/8.jpg" class="gallery-image" alt="">
            </div>

            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/9.jpg" class="gallery-image" alt="">
            </div>

            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/10.jpg" class="gallery-image" alt="">
            </div>

            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/11.jpg" class="gallery-image" alt="">
            </div>

            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/12.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/13.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/14.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/15.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/16.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/17.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/18.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/19.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/20.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/21.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/22.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/23.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/24.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/25.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/26.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/27.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/28.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/29.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../img/activity/30.jpg" class="gallery-image" alt="">
            </div>

          </div>
        <?php } else if ($page == "insurance") { ?>
          <!-- insurance -->
          <div class="gallery">
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/1.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/2.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/3.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/4.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/5.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/6.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/7.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/8.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/9.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/10.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/11.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/12.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/13.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/14.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/15.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/16.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/17.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/18.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/19.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/20.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/21.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/22.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/23.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/24.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/25.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/26.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/27.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/28.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/29.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/30.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/31.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/32.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/33.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/34.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/35.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/36.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/37.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/38.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/39.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/40.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/41.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/42.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/43.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/44.jpg" class="gallery-image" alt="">
            </div>
            <div class="gallery-item" tabindex="0" data-aos="flip-left">
              <img src="../assets/img/มอบกธ/45.jpg" class="gallery-image" alt="">
            </div>
          </div>
        <?php } ?>
      </div>
    </section>

  </main>

  <!-- ======= Footer ======= -->
  <?php include '../component/Footer.php'; ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <!-- aos -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>