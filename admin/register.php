<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </head>

  <body>
    <main class="flex min-h-full flex-col justify-center px-6 py-8 lg:px-8">
      <section class="sm:mx-auto sm:w-full sm:max-w-md">
      <form method="post" action="../db/create_author.php" enctype="multipart/form-data">
          <div class="space-y-6">
            <div class="">
              <h2
                class="text-2xl font-bold leading-9 tracking-tight text-gray-900"
              >
                Register your account now
              </h2>

              <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                <div class="col-span-full">
                  <label
                    for="photo"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Photo</label
                  >
                  <div class="mt-2 flex items-center gap-x-3">
                    <div class="text-center">
                      <img
                        id="image-preview"
                        class="h-14 w-14 rounded-full"
                        src="https://www.iprcenter.gov/image-repository/blank-profile-picture.png/@@images/image.png"
                      />
                    </div>
                    <input
                      type="file"
                      name="files"
                      class="form-control"
                      accept="image/*"
                      onchange="updatePreview(this, 'image-preview')"
                    />
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label
                    for="first-name"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >First name</label
                  >
                  <div class="mt-2">
                    <input
                      type="text"
                      name="first-name"
                      id="first-name"
                      autocomplete="given-name"
                      class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                  </div>
                </div>

                <div class="sm:col-span-3">
                  <label
                    for="last-name"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Last name</label
                  >
                  <div class="mt-2">
                    <input
                      type="text"
                      name="last-name"
                      id="last-name"
                      autocomplete="family-name"
                      class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                  </div>
                </div>
                <div class="col-span-full">
                  <label
                    for="street-address"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Street address</label
                  >
                  <div class="mt-2">
                    <input
                      type="text"
                      name="street-address"
                      id="street-address"
                      autocomplete="street-address"
                      class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                  </div>
                </div>
                <div class="col-span-full">
                  <label
                    for="email"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Phone Contact</label
                  >
                  <div class="mt-2">
                    <input
                      name="phone"
                      type="number"
                      autocomplete="phone"
                      class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                  </div>
                </div>
                <div class="col-span-full">
                  <label
                    for="email"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Email address</label
                  >
                  <div class="mt-2">
                    <input
                      id="email"
                      name="email"
                      type="email"
                      autocomplete="email"
                      class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                  </div>
                </div>
                <div class="col-span-full">
                  <label
                    for="email"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Password</label
                  >
                  <div class="mt-2">
                    <input
                      name="password"
                      type="password"
                      class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                  </div>
                </div>
         
            </div>
          </div>
          <div>
            <button
              type="submit"
              class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            >
              Create account
            </button>
          </div>
        </form>
      </section>
    </main>
    <script type="text/javascript">
      function updatePreview(input, target) {
        let file = input.files[0];
        let reader = new FileReader();

        reader.readAsDataURL(file);
        reader.onload = function () {
          let img = document.getElementById(target);
          // can also use "this.result"
          img.src = reader.result;
        };
      }
    </script>
  </body>
</html>
