<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./css/user.css" />
  <link rel="stylesheet" href="./user/CSS/bootstrap.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=PT+Sans&family=Rubik&family=Rubik+Moonrocks&family=Splash&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="/fontawesome/css/all.css" />
  <script src="./js/fontawesome-all.js" crossorigin="anonymous"></script>

</head>

<body>
  <div style="background-color: #e9f0f6">
    <nav class="container navbar navbar-expand-lg "
      style="z-index: 99; background-color: transparent; padding: 20px 0px">
      <div class="container p-0">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="navbar-bran mt-2 mt-lg-0" href="#">
            <img src="./user/img/logo/logo.png" width="150" height="70" style="object-fit: cover; margin-left: -15px"
              alt="MDB Logo" loading="lazy" />
          </a>
          <ul class="navbar-nav me-auto mb-lg-0 d-flex justify-content-center gap-4" style="width: 100%">
            <li class="nav-item">
              <a class="nav-link link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./user/webpages/Login.html">About us</a>
            </li>

          </ul>

        </div>
        <div class="d-flex align-items-center ">
          <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown text-dark">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="fa-regular fa-user text-dark"></i></a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="./profile.php">Profile</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div style="height: 650px; background-color: #e9f0f6">
    <div class="bigCircle"></div>
    <div class="smallCircle"></div>
    <div class="container d-flex align-items-center" style="height: 620px">
      <div class="row">
        <div class="col" style="position: relative">
          <h1 class="fw-bold bigText">Welcome To <span class="highlightText">NU News</span></h1>
          <p class="mt-4" style="z-index: 99">
            The best website in Cambodia that provide many type ot news.
            Every user that jump into our website will enjoy readin the news
            with a quality image and description.
          </p>

          <p>
            All news are free to read and visit. We post many type of news a day and
            you can be our subscirber by loggin and using your phone number.

          </p>
        </div>
        <div class="col" style="position: relative">
          <img class="banner" src="./user/img/banner.png" alt="" />
        </div>
      </div>
    </div>
    <div class="bodycontainer">
      <div class="container" style="position: relative; z-index: 0;margin-top: 60px;">
        <div class="row">
          <h1 style="text-align: center; padding-bottom: 20px">
            NU News <span class="highlightText">Provides</span>
            <div style="display: flex; justify-content: center">
              <hr width="50px" class="line" />
            </div>
          </h1>

          <div class="col-md d-flex flex-column align-items-center">
            <img src="./user/img/thunder.png" style="width: 100px" alt="" />
            <h4>Fast Performance</h4>
            <p class="performace">
              Our website provides many hot news
              everdays make sure that you visit us on times.
              Don't miss our quality news.
            </p>
          </div>
          <div class="col-md d-flex flex-column align-items-center">
            <img src="./user/img/adimg.png" style="width: 65px; height: 75px; margin-top: 8px; margin-bottom: 18px;"
              alt="" />
            <h4>No Advertisement</h4>
            <p class="ads">
              In the site, there is no more interruption.
              We did no allow other company or our collaborate
              to put the advertisement in our news.
            </p>
          </div>
          <div class="col-md d-flex flex-column align-items-center">
            <img src="./user/img/shield_78370-582.png" style="width: 100px; height: 95px; margin-bottom: 6px;" alt="" />
            <h4>Best Security</h4>
            <p class="security">
              Don't worry about security, nowsaday we resolve that problems for
              our users and no more unsecure link.
            </p>
          </div>
        </div>
      </div>
      <!-- contents  -->
      <h1 style="text-align: center; margin-top: 60px;">
        Popular <span class="highlightText">Contents</span>
        <div style="display: flex; justify-content: center">
          <hr width="50px" class="line" />
        </div>
      </h1>
      <div class="container d-flex justify-content-center gap-3 mt-4">
        <?php
        include_once('./config.php');
        $query = "SELECT * FROM `tblnews` ORDER BY `news_id` DESC LIMIT 8";
        $result = mysqli_query($conn, $query);
        ?>
        <?php
        if (
          mysqli_num_rows($result) >
          0
        ) {
          while ($row = mysqli_fetch_array($result)) { ?>
            <div class="newsCard">
              <a href="./news-detail.php?news_id=<?php echo $row['news_id'] ?>">
                <img src="./images/<?= $row['image'] ?>" class="newsImage" alt="">
                <h6 class="newsTitle ">
                  <?= $row['news_title'] ?>
                </h6>
              </a>
            </div>
            <?php
          }
        }
        ?>
      </div>
      <div class="text-center text-lg-start bg-white text-muted ">
        <section class="" style="background-color: #e9f0f6">
          <div class="container-fluid py-2 text-center text-md-start mt-5" style="padding: 0px 70px;">
            <div class="row mt-5">
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4" style="color: #2f80ed;">
                  About website
                  <div style="width: 40px; height: 2px;background:  #56ccf2; margin-top: 9px;"></div>
                </h6>
                <p>NU News is a leading digital news and entertainment company in Cambodia.</p>
                <p>We provide daily news that take from our country or in other country.</p>
              </div>
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4" style="color: #2f80ed;">
                  Categories
                  <div style="width: 40px; height: 2px; background: #56ccf2; margin-top: 9px;"></div>
                </h6>
                <p>Society News</p>
                <p> Sports</p>
                <p>Technology</p>
                <p>Entertainment</p>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4" style="color: #2f80ed;">
                  Provides
                  <div style="width: 40px; height: 2px; background:  #56ccf2; margin-top: 9px;"></div>
                </h6>
                <p>Fast Performance</p>
                <p>More Security</p>
                <p> No advertisement </p>
                <p>Latest news</p>
              </div>
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold mb-4 " style="color: #2f80ed;">Contact us <div
                    style="width: 40px; height: 2px; background: #56ccf2; margin-top: 9px;"></div>
                </h6>
                <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
                <p>
                  <i class="fas fa-envelope me-3 text-secondary"></i>
                  info@example.com
                </p>
                <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
                <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
              </div>
            </div>
          </div>
        </section>
        <div class="text-center p-4" style="background-color: #e9f0f6; border-top: 1px solid #8a8988;">
          © 2023 Copyright
          <a class="text-reset fw-bold " style="text-decoration: none; " href="https://mdbootstrap.com/"> <span
              class="highlightText">NUNews.com.kh</span></a>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="./user/CSS/bootstrap.bundle.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>