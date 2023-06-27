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
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
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
            <li class="breadcrumb-item active">News</li>
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
                    <th scope="col" class="px-4 py-3 font-medium text-gray-900">#</th>
                    <th scope="col" class="px-4 py-3 font-medium text-gray-900">
                      Category
                    </th>
                    <th scope="col" class="px-4 py-3 font-medium text-gray-900">
                      Title
                    </th>
                    <th scope="col" class="px-4  py-3 font-medium text-gray-900">
                      Status
                    </th>
                    <th scope="col" class="px-4 whitespace-nowrap py-3 font-medium text-gray-900">
                      Created Date
                    </th>

                    <th scope="col" class="px-4 py-3 font-medium text-gray-900"></th>
                  </tr>
                </thead>
                <?php
                include_once('../config.php');
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
                ORDER BY `tblnews`.`news_id`";
                $result = mysqli_query($conn, $query);
                if (
                  mysqli_num_rows($result) >
                  0
                ) {
                  while ($row = mysqli_fetch_array($result)) { ?>
                    <tr class="hover:bg-gray-50">
                      <td>
                        <?php echo $row['news_id']; ?>
                      </td>
                      <td>
                        <?php echo $row['category_name']; ?>
                      </td>
                      <td>
                        <?php echo $row['news_title']; ?>
                      </td>
                      <td>
                        <?php
                        $t = $row['news_status'];
                        if ($t == 1) {
                          ?>
                          <div class="d-flex align-items-center">
                            <div style="width:8px;height:8px; background:green;" class="rounded-pill"></div>
                            <span class="px-2 ">Visible</span>
                          </div>
                          <?php
                        } else {
                          ?>
                          <div class="d-flex align-items-center">
                            <div style="width:8px;height:8px; background:green;" class="rounded-pill"></div>
                            <span class="px-2 ">Invisible</span>
                          </div>
                          <?php
                        }
                        ?>
                      </td>
                      <td>
                        <?php echo $row['created_date'] ?>
                      </td>
                      <td>
                        <div class="d-flex align-items-center justify-content-between ">
                          <a x-data="{ tooltip: 'Delete' }"
                            href="../db/delete-category.php?category_id=<?php echo $row['news_id']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#b91c1c"
                              class="bi bi-trash3" viewBox="0 0 16 16">
                              <path
                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                            </svg>
                          </a>
                          <a x-data="{ tooltip: 'Edit' }" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              class="bi bi-pencil-square" viewBox="0 0 16 16">
                              <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                              <path fill-rule="evenodd"
                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg> </a>
                        </div>
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
  <script src="../js/simple-datatables.min.js"
    crossorigin="anonymous"></script>
  <script src="../js/datatables-simple-demo.js"></script>
</body>

</html>