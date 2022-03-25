<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" href="build/tailwind.css">
    <title>LOGIN</title>
</head>
<body>
    <div class="min-h-screen bg-gray-100 flex flex-col justify-center py-12 px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
          <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow" />
          <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Log in to your Account</h2>
          <p class="mt-2 text-center text-sm text-gray-600 max-w">
            Don't have an account?
            <a href="register.php" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">Register</a>
          </p>
        </div>
      
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
          <div class="bg-white py-8 px-6 shadow rounded-lg sm:px-10">
            <form class="mb-0 space-y-6" action="login.php" method="post">
                <?php if (isset($_GET['error'])){ ?>
                    <p class="error">
                        <?php echo $_GET['error']; ?>
                    </p>
                <?php } ?>
                
              <div>
                <label class="block text-sm font-medium text-gray-700">User name</label>
                <div class="mt-1">
                  <input id="name" name="uname" required class="border border-gray-300 rounded-lg shadow-sm w-full py-1" />
                </div>
              </div>
      
              <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <div class="mt-1">
                  <input id="password" name="password" type="password" autocomplete="current-password" required class="border border-gray-300 rounded-lg shadow-sm w-full py-1" />
                </div>
              </div>
      
              <!-- <div class="flex items-center">
                <input id="terms-and-privacy" name="terms-and-privacy" type="checkbox" class="" />
                <label for="terms-and-privacy" class="ml-2 block text-sm text-gray-900"
                  >I agree to the
                  <a href="#" class="text-indigo-600 hover:text-indigo-500">Terms</a>
                  and
                  <a href="#" class="text-indigo-600 hover:text-indigo-500">Privacy Policy</a>.
                </label>
              </div>
       -->
              <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none 
                focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Log in</button>
              </div>
            </form>
          </div>
        </div>
      </div> 
</body>
</html>