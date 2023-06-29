<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include_once('./config.php');
  include('./db/get_news_detail.php');
  ?>
  <?php
  include_once('./config.php');
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
  <title>NU NEWS - Home </title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <style lang="postcss" scoped>
    .item-wrap:hover .bg-hover {
      opacity: 1;
    }

    .cardShadow {
      box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px;
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
          <img src="./assets/logo.png" class=" h-20 mr-3" alt=" Logo" />
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
      <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white">
        <div class="container-fluid px-4">
          <div class="container mt-5">
            <div class="grid grid-cols-12 space-x-6">
              <div class="col-span-8">
                <!-- Post content-->
                <article>
                  <!-- Post header-->
                  <header class="mb-4">
                    <!-- Post title-->
                    <h1
                      class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
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
                    <ul class="post-categories flex gap-x-1">
                      <li class="">
                        <a class="text-white rounded-sm bg-emerald-500 p-1 text-xs font-semibold uppercase">
                          <?= $item['category_name'] ?>
                        </a>
                      </li>
                    </ul>
                  </header>
                  <!-- Preview image figure-->
                  <figure class="mb-4">
                    <img class="img-fluid rounded max-h-[480px]" src="./images/<?php echo $item['image'] ?>"
                      alt="..." />
                  </figure>
                  <!-- Post content-->
                  <section class="mb-5">
                    <p class="fs-5 mb-4">
                      <?php echo nl2br($item['news_content']); ?>
                    </p>
                  </section>
                </article>
                <!-- Comments section-->
                <section class="w-full ">
                  <div class="card p-6 rounded-lg cardShadow bg-light">
                    <div class="card-body">
                      <!-- Comment form-->
                      <form class="mb-6" method="post" action="./db/posted_comment.php?news_id=<?= $item['news_id'] ?>"
                        enctype="multipart/form-data">
                        <div
                          class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                          <label for="comment" class="sr-only">Your comment</label>
                          <textarea name="comment" rows="6"
                            class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                            placeholder="Write a comment..." required></textarea>
                        </div>
                        <input value="<?= $user['subscriber_id'] ?>" type="text" class="sr-only" name="subscriber_id">
                        <button type="submit"
                          class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                          Post comment
                        </button>
                      </form>
                      <!-- Single comment-->
                      <?php
                      $query = "SELECT `tblsubscriber`.`subscriber_name`,`comment_content`,`comment_id`,`tblsubscriber`.`iamge`
                        FROM `tblcomment`
                        INNER JOIN `tblsubscriber` ON `tblsubscriber`.`subscriber_id` = `tblcomment`.`subscriber_id`
                        WHERE `news_id`='$ID'";
                      $result = mysqli_query($conn, $query);
                      if (
                        mysqli_num_rows($result) >
                        0
                      ) {
                        while ($row = mysqli_fetch_array($result)) { ?>
                          <div class="flex mb-6">
                            <div class="flex-shrink-0">
                              <img class="rounded-full h-14 w-14" src="./images/<?= $row['iamge'] ?>" alt="..." />
                            </div>
                            <div class="ml-3">
                              <div class="font-bold">
                                <?= $row['subscriber_name'] ?>
                              </div>
                              <p>
                                <?= $row['comment_content'] ?>
                              </p>
                            </div>
                          </div>
                          <?php
                        }
                      }
                      ?>
                    </div>
                  </div>
                </section>
              </div>
              <!-- Side widgets-->
              <div class="col-span-4">
                <!-- Search widget-->
                <section class="mb-6">
                  <form>
                    <label for="default-search"
                      class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                          stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                      </div>
                      <input type="search" id="default-search"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search..." required>
                      <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                  </form>
                </section>

                <!-- Categories widget-->
                <div class="block mb-6 cardShadow rounded-lg ">
                  <div class=" border-b-2  border-neutral-100 px-8 py-3 ">
                    Categories
                  </div>
                  <div class="card-body py-6 ">
                    <div class="grid grid-cols-2 px-8">
                      <?php
                      include_once('./config.php');
                      $query = "SELECT * FROM `tblnewscategory` ORDER BY `category_id`";
                      $result = mysqli_query($conn, $query);

                      if (
                        mysqli_num_rows($result) >
                        0
                      ) {
                        while ($row = mysqli_fetch_array($result)) { ?>
                          <div class=" justify-self-start">
                            <ul class="list-unstyled  text-blue-500 underline mb-0">
                              <li><a href="./category.php?category_id=<?php echo $row['category_id']; ?> ">
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
                <section></section>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

    <footer class="py-10">
      <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/"
            class="hover:underline">NU DEV TEAM</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
          <li>
            <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
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