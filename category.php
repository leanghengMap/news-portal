<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('./config.php');
  session_start();
  $user_check = isset($_SESSION['login_user']) ? $_SESSION['login_user'] : null;
  $sql = "SELECT *  FROM `tblsubscriber` WHERE `subscriber_name` = '$user_check'";
  $ses_sql = mysqli_query($conn, $sql);

  $user = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

  $notLogin = true;
  if (!isset($_SESSION['login_user']) || !isset($user_check)) {
    $notLogin = true;
  } else {
    $notLogin = false;
  }
  ?>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>NU NEWS - Home</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <style lang="postcss" scoped>
    .item-wrap:hover .bg-hover {
      opacity: 1;
    }
  </style>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
  <main>
    <!-- Responsive navbar-->

    <nav class="bg-white border-gray-200 dark:bg-gray-900 z-20 top-0 sticky">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/news-portal" class="flex items-center">
          <img src="./assets/logo.png" class="h-20 mr-3" alt=" Logo" />
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">NORTON NEWS</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
          class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
          <ul
            class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="/news-portal"
                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                aria-current="page">Home</a>
            </li>
            <li>
              <a href="./404.html"
                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
            </li>
            <li>
              <a href="#"
                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
            </li>

            <?php
            if ($notLogin) {
              ?>
              <li>
                <a href="./login.php"
                  class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
              </li>
              <li>
                <a href="./register.php"
                  class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Register</a>
              </li>
              <?php
            } else {
              ?>
              <li>
                <a href="./logout.php"
                  class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">logout</a>
              </li>
              <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>

    <div class="max-w-7xl mt-5 mx-auto">
      <div>
        <section class="py-8">
          <h1 class="pb-8 text-2xl uppercase tracking-wider font-semibold">
            <?php
            $categoryId = isset($_REQUEST['category_id']) ? $_REQUEST['category_id'] : '';
            $query = " SELECT  `category_name`FROM `tblnewscategory` WHERE `category_id`='$categoryId'";
            $result = mysqli_query($conn, $query);
            $item = mysqli_fetch_array($result);
            echo $item['category_name']
              ?>
          </h1>
          <div class="grid grid-cols-2 relative space-x-4">
            <div class="col-span-2">
              <section class="text-gray-600 body-font">
                <div class="container mx-auto">
                  <div class="grid grid-cols-4 gap-4">
                    <?php
                    include_once('./config.php');
                    $query = "SELECT * FROM `tblnews`
                    INNER JOIN `tblnewscategory` ON `tblnewscategory`.`category_id` = `tblnews`.`category_id` WHERE  `tblnews`.`category_id` = $categoryId
                    ORDER BY `news_id` DESC ";

                    $result = mysqli_query($conn, $query);
                    ?>
                    <?php
                    if (
                      mysqli_num_rows($result) >
                      0
                    ) {
                      while ($row = mysqli_fetch_array($result)) { ?>
                        <section>
                          <a href="./news-detail.php?news_id=<?php echo $row['news_id'] ?>" class="group block">
                            <div
                              class="h-full relative border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                              <img
                                class="lg:h-48 md:h-36 w-full transition duration-300 ease-in-out hover:scale-110 object-cover object-center"
                                src="./images/<?= $row['image'] ?>" alt="blog" />
                              <div class="z-[2] absolute top-3 left-2">
                                <ul class="post-categories flex gap-x-1">
                                  <li class="">
                                    <a class="text-white rounded-sm bg-emerald-500 p-1 text-xs font-semibold uppercase">
                                      <?= $row['category_name'] ?>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="px-5 py-3">
                                <div class="pb-2"></div>
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-2.5">
                                  <?= $row['news_title'] ?>
                                </h1>
                                <p class="leading-relaxed mb-2.5">
                                  <!-- $row['news_content'] -->
                                </p>
                                <div class="flex items-center flex-wrap">
                                  <h-6 class="text-sm text-gray-400 text-medium">
                                    <?php $date = $row['created_date'];
                                    $datetime = new DateTime($date);
                                    echo $datetime->format("F
                                  j, Y"); ?>
                                  </h-6>
                                  <span
                                    class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                  </span>
                                  <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                      <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                      </path>
                                    </svg>6
                                  </span>
                                </div>
                              </div>
                            </div>
                          </a>
                        </section>
                        <?php
                      }
                    }
                    ?>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </section>
      </div>
    </div>

    <footer class="py-10">
      <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023
          <a href="https://flowbite.com/" class="hover:underline">NU DEV TEAM</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
          <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">About</a>
          </li>
          <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
          </li>
          <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
          </li>
          <li>
            <a href="#" class="hover:underline">Contact</a>
          </li>
        </ul>
      </div>
    </footer>
  </main>
</body>

</html>