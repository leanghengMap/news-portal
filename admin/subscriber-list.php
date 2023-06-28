<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('./session.php');
  ?>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Tables - News Admin</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
          <h1 class="mt-4">Tables</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Authors</li>
          </ol>

          <div class="card mb-4">
            <div class="card-header">
              <i class="fas fa-table me-1"></i>
              tblnews
            </div>
            <div class="card-body">
              <table id="datatablesSimple">
                <thead class="bg-gray-50 uppercase">
                  <tr>
                    <th scope="col" class="px-6 py-3 font-medium text-gray-900">
                      #
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Avatar
                    </th>
                    <th scope="col" class="px-6 py-3">
                      First name
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium text-gray-900">
                      Last Name
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium text-gray-900">
                      email
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium text-gray-900">
                      Status
                    </th>
                   
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                  <?php
                  include_once('../config.php');
                  $query = "SELECT * FROM `tblsubscriber` ORDER BY `subscriber_id`";
                  $result = mysqli_query($conn, $query);
                  if (
                    mysqli_num_rows($result) >
                    0
                  ) {
                    while ($row = mysqli_fetch_array($result)) { ?>
                      <tr class="hover:bg-gray-50">
                        <td class="px-6 py-3">
                          <?php echo $row['subscriber_id'] ?>
                        </td>
                        <td>
                          <img style="width:40px;height:40px" class="rounded-pill object-cover object-center"
                            src="../images/<?php echo $row['iamge'] ?>" alt="<?php echo $row['iamge'] ?>" />
                        </td>
                        <td class="px-6 py-3">
                          <?php echo $row['subscriber_name']; ?>
                        </td>
                        <td class="px-6 py-3">
                          <?php echo $row['lastname']; ?>
                        </td>
                        <td class="px-6 py-3">
                          <?php echo $row['subscriber_email']; ?>
                        </td>
                        <td class="px-6 py-3">
                          <?php
                          $t = $row['account_status'];
                          if ($t == 1) {
                            ?>
                            <span
                              class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2.5 py-1.5 text-xs font-semibold text-green-600">
                              <span class="h-2 w-2 rounded-full bg-green-600"></span>
                              Active
                            </span>
                            <?php
                          } else {
                            ?>
                            <span
                              class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2.5 py-1.5 text-xs font-semibold text-green-600">
                              <span class="h-2 w-2 rounded-full bg-red-600"></span>
                              Inactive
                            </span>
                            <?php
                          }
                          ?>
                        </td>
                       
                      </tr>
                      <?php
                    }
                  }
                  ?>
                </tbody>
              </table>
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
  <script src="../js/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="../js/datatables-simple-demo.js"></script>
</body>

</html>