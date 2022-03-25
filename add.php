<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" href="build/tailwind.css">
    <title>ADD HERO</title>
</head>
<body>
    <div class="bg-gray-100">
        <ul class="">
            <li class="ml-8">
                <!-- <a href="#" class="ml-10 h-12"><img src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" class="h-12" alt="#homelogo"></a> -->
                <p class="text-xl text-indigo-500 font-bold"><a href="view.php" class="text-xl text-indigo-500 font-bold">Xavier Heroes</a></p>
            </li>
        </ul>
    </div>
<div class="min-h-screen bg-gray-100 flex flex-col justify-center py-12 px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
          <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow" />
          <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Add New Hero</h2>
         
        </div>
      
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
          <div class="bg-white py-8 px-6 shadow rounded-lg sm:px-10">
            <form class="mb-0 space-y-6" action="add_hero.php" method="post">
                <?php if (isset($_GET['error'])){ ?>
                <p class="error">
                    <?php echo $_GET['error']; ?>
                </p>
            <?php } ?>
                
              <div>
                <label class="block text-sm font-medium text-gray-700">Hero name</label>
                <div class="mt-1">
                  <input type="text" name="hero_name" placeholder="Hero Name" required class="border border-gray-300 rounded-lg shadow-sm w-full py-1" />
                </div>
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700">Real name</label>
                <div class="mt-1">
                  <input type="text" name="real_name" placeholder="Real Name" required class="border border-gray-300 rounded-lg shadow-sm w-full py-1" />
                </div>
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700">Short Bio</label>
                <div class="mt-1">
                  <input type="text" name="short_bio" placeholder="Short Bio" required class="border border-gray-300 rounded-lg shadow-sm w-full py-1" />
                </div>
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700">Long Bio</label>
                <div class="mt-1">
                  <input type="text" name="long_bio" placeholder="Long Bio" required class="border border-gray-300 rounded-lg shadow-sm w-full py-1" />
                </div>
              </div>
      
              
              <div>
                <button type="submit" name="add" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none 
                focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add</button>
              </div>
            </form>
          </div>
        </div>
      </div> 
</body>
</html>