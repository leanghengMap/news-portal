<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('./session.php');
  ?>
  <?php
  include_once('../config.php');
  $ID = isset($_REQUEST['news_id']) ? $_REQUEST['news_id'] : '';
  // $query = "SELECT * FROM `tblnews` WHERE `news_id`='$ID'";
  $query = "SELECT
  `tblnews`.`news_id`,
  `news_title`,
  `news_content`,
  `tblnewscategory`.`category_name`,
  `tblauthor`.`author_name`,
  `tblnews`.`created_date`,
  `tblnews`.`image`,
  `news_status`
  FROM `tblnews`
  INNER JOIN `tblnewscategory` ON `tblnewscategory`.`category_id` = `tblnews`.`category_id`
  INNER JOIN `tblauthor` ON `tblauthor`.`author_id` = `tblnews`.`author_id`
  WHERE `news_id`='$ID'";
  $result = mysqli_query($conn, $query);
  $item = mysqli_fetch_array($result);
  ?>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Home- News Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="../css/styles.css" rel="stylesheet" />
  <script src="../js/fontawesome-all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.php">News Portal</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
      <i class="fas fa-bars"></i>
    </button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
          aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="button">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="./profile.php">Profile</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="index.php">
              <div class="sb-nav-link-icon">
                <i class="fa-solid fa-house"></i>
              </div>
              Home
            </a>
            <a class="nav-link" href="./subscriber-list.php">
              <div class="sb-nav-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-people-fill" viewBox="0 0 16 16">
                  <path
                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                </svg>
              </div>
              Subscriber
            </a>
            <a class="nav-link" href="./author-list.php">
              <div class="sb-nav-link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                </svg>
              </div>
              Author
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
              aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-table"></i>
                </div>
              </div>
              Category
              <div class="sb-sidenav-collapse-arrow">
                <i class="fas fa-angle-down"></i>
              </div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="./create-category.php">Add Category
                </a>
                <a class="nav-link" href="./category-list.php">View All</a>
              </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseNewsLayouts"
              aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-table"></i>
                </div>
              </div>
              News
              <div class="sb-sidenav-collapse-arrow">
                <i class="fas fa-angle-down"></i>
              </div>
            </a>
            <div class="collapse" id="collapseNewsLayouts" aria-labelledby="headingOne"
              data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="./create-news.php">Add News </a>
                <a class="nav-link" href="./news-list.php">View All</a>
              </nav>
            </div>

            <div class="sb-sidenav-menu-heading">Subscriber page</div>

            <a class="nav-link" href="tables.html">
              <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
              Landing Page
            </a>
          </div>
        </div>
        <div class="sb-sidenav-footer">
          <div class="small">Logged in as:</div>
          <?= $login_session ?>
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <div class="container mt-5">
            <div class="row">
              <div class="col-lg-8">
                <!-- Post content-->
                <article>
                  <!-- Post header-->
                  <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">
                      <?= $item['news_title'] ?>
                    </h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">
                      Posted on
                      <?php
                      $date = $item['created_date'];
                      $datetime = new DateTime($date);

                      echo $datetime->format("F j Y"); ?>
                      by
                      <?= $item['author_name'] ?>
                    </div>
                    <!-- Post categories-->
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">
                      <?= $item['category_name'] ?>
                    </a>
                  </header>
                  <!-- Preview image figure-->
                  <figure class="mb-4">
                    <img class="img-fluid rounded" src="../images/<?php echo $item['image'] ?>" alt="..." />
                  </figure>
                  <!-- Post content-->
                  <section class="mb-5">
                    <p class="fs-5 mb-4">
                      <?php echo nl2br($item['news_content']); ?>
                    </p>
                  </section>
                </article>
                <!-- Comments section-->
                <section class="mb-5">
                  <div class="card bg-light">
                    <div class="card-body">
                      <!-- Comment form-->
                      <form class="mb-4">
                        <textarea class="form-control" rows="3"
                          placeholder="Join the discussion and leave a comment!"></textarea>
                      </form>
                      <!-- Comment with nested comments-->
                      <div class="d-flex mb-4">
                        <!-- Parent comment-->
                        <div class="flex-shrink-0">
                          <img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                        </div>
                        <div class="ms-3">
                          <div class="fw-bold">Commenter Name</div>
                          If you're going to lead a space frontier, it has to
                          be government; it'll never be private enterprise.
                          Because the space frontier is dangerous, and it's
                          expensive, and it has unquantified risks.
                          <!-- Child comment 1-->
                          <div class="d-flex mt-4">
                            <div class="flex-shrink-0">
                              <img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg"
                                alt="..." />
                            </div>
                            <div class="ms-3">
                              <div class="fw-bold">Commenter Name</div>
                              And under those conditions, you cannot establish
                              a capital-market evaluation of that enterprise.
                              You can't get investors.
                            </div>
                          </div>
                          <!-- Child comment 2-->
                          <div class="d-flex mt-4">
                            <div class="flex-shrink-0">
                              <img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg"
                                alt="..." />
                            </div>
                            <div class="ms-3">
                              <div class="fw-bold">Commenter Name</div>
                              When you put money directly to a problem, it
                              makes a good headline.
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Single comment-->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                        </div>
                        <div class="ms-3">
                          <div class="fw-bold">Commenter Name</div>
                          When I look at the universe and all the ways the
                          universe wants to kill us, I find it hard to
                          reconcile that with statements of beneficence.
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <!-- Side widgets-->
              <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                  <div class="card-header">Search</div>
                  <div class="card-body">
                    <div class="input-group">
                      <input class="form-control" type="text" placeholder="Enter search term..."
                        aria-label="Enter search term..." aria-describedby="button-search" />
                      <button class="btn btn-primary" id="button-search" type="button">
                        Go!
                      </button>
                    </div>
                  </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                  <div class="card-header">Categories</div>
                  <div class="card-body">
                    <div class="row">
                      <?php
                      include_once('../config.php');
                      $query = "SELECT * FROM `tblnewscategory` ORDER BY `category_id`";
                      $result = mysqli_query($conn, $query);

                      if (
                        mysqli_num_rows($result) >
                        0
                      ) {
                        while ($row = mysqli_fetch_array($result)) { ?>
                          <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                              <li><a href="#!">
                                  <?php echo $row['category_name']; ?>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <?php
                        }
                      }
                      ?>
                    </div>
                  </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                  <div class="card-header">Side Widget</div>
                  <div class="card-body">
                    You can put anything you want inside of these side
                    widgets. They are easy to use, and feature the Bootstrap 5
                    card component!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2023</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/scripts.js"></script>
</body>

</html>