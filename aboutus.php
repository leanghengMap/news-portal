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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About us</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
              <a href="/news-portal" aria-current="page">Home</a>
            </li>
            <li>
              <a href="./aboutus.php"
                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 ">About</a>
            </li>
            <li>
              <a href="./contact.php"
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
        <section class="text-gray-600 body-font">
          <div class="container px-5 py-6 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
              <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">
                OUR TEAM
              </h1>
              <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                We are a team of developer students who love coding and learning new things. We work on various projects
                together, from web development to machine learning. We always support each other and share our knowledge
                and experience. We are not afraid of challenges and we enjoy having fun along the way
              </p>
            </div>
            <div class="flex flex-wrap -m-4">
              <div class="p-4 lg:w-1/2">
                <div
                  class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                  <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                    src="./assets/img/photo_2020-07-04_18-03-30.jpg" />
                  <div class="flex-grow sm:pl-8">
                    <h2 class="title-font font-medium text-lg text-gray-900">
                      Ly Meng ngoun
                    </h2>
                    <h3 class="text-gray-500 mb-3">Web Developer</h3>
                    <p class="mb-4">
                      "Stay Strong " There's a rainbow , After every storm.
                    </p>
                    <span class="inline-flex">
                      <a class="text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                      </a>
                      <a class="ml-2 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                          </path>
                        </svg>
                      </a>
                      <a class="ml-2 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path
                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                          </path>
                        </svg>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
              <div class="p-4 lg:w-1/2">
                <div
                  class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                  <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                    src="./assets/img/IMG_1494.JPG" />
                  <div class="flex-grow sm:pl-8">
                    <h2 class="title-font font-medium text-lg text-gray-900">
                      Seng Kanika
                    </h2>
                    <h3 class="text-gray-500 mb-3">Web Developer</h3>
                    <p class="mb-4">
                      If love is the answer, then could you rephrase the question?
                    </p>
                    <span class="inline-flex">
                      <a class="text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                      </a>
                      <a class="ml-2 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                          </path>
                        </svg>
                      </a>
                      <a class="ml-2 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path
                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                          </path>
                        </svg>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
              <div class="p-4 lg:w-1/2">
                <div
                  class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                  <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                    src="./assets/img/photo_2022-05-30_07-40-44.jpg" />
                  <div class="flex-grow sm:pl-8">
                    <h2 class="title-font font-medium text-lg text-gray-900">
                      Chao Seavthinh
                    </h2>
                    <h3 class="text-gray-500 mb-3">Mobile App Developer</h3>
                    <p class="mb-4">
                      I have not failed I just found ten thousand ways that don’t work.
                    </p>
                    <span class="inline-flex">
                      <a class="text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                      </a>
                      <a class="ml-2 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                          </path>
                        </svg>
                      </a>
                      <a class="ml-2 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path
                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                          </path>
                        </svg>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
              <div class="p-4 lg:w-1/2">
                <div
                  class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                  <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                    src="./assets/img/photo_2023-05-09_18-41-57.jpg" />
                  <div class="flex-grow sm:pl-8">
                    <h2 class="title-font font-medium text-lg text-gray-900">
                      Map Leangheng
                    </h2>
                    <h3 class="text-gray-500 mb-3">Web Developer</h3>
                    <p class="mb-4">
                      Don't give up your dream, Keep sleeping.
                    </p>
                    <span class="inline-flex">
                      <a class="text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                      </a>
                      <a class="ml-2 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                          </path>
                        </svg>
                      </a>
                      <a class="ml-2 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path
                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                          </path>
                        </svg>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
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
            <a href="./aboutus.php" class="mr-4 hover:underline md:mr-6">About</a>
          </li>
          <li>
            <a href="" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
          </li>

          <li>
            <a href="./contact.php" class="hover:underline">Contact</a>
          </li>
        </ul>
      </div>
    </footer>
  </main>
</body>

</html>