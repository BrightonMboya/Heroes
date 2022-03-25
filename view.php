<?php
session_start();
include('db_conn.php');
if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && isset($_SESSION['role'])) {
?>
<!DOCTYPE html>
<html>
     <head>
     <meta charset="utf-8">
          <title>View Records</title>
          <link rel="stylesheet" href="build/tailwind.css" />
     </head>
<body class="bg-gray-100">
     <div class="">
     <div class="mt-5 px-5">
       <ul class="flex">
           <li class="flex-1 ml-8">
            <!-- <a href="#" class="ml-10 h-12"><img src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" class="h-12" alt="#homelogo"></a> -->
            <p class="text-xl text-indigo-500 font-bold">Xavier Heroes</p>
           </li>

           <li class="flex-3 mr-6 py-3 hidden md:flex">
            <!-- <a href="#" class="px-5 py-10 md:py-0">Home</a> -->
            <?php if ($_SESSION['role'] === 'admin'){ ?>
               <div class="">
                 <a href="add.php" class="bg-green-400 px-3 py-2 text-white rounded-lg shadow-lg">Add Hero</a></p>
               </div>
                
               <?php } ?>
        </li>

        <li class="flex-3 hidden md:flex py-1">
            <a href="logout.php" class="order-last mr-8 bg-indigo-400 px-3 mb-2 py-2 text-white rounded-lg shadow-lg">Logout</a></p>
           
        </li>
       </ul>
   </div>
          
     <!-- <h2>View Records</h2> -->
     <h2 class="mt-3 ml-8 mr-4 italic px-5">
          These are the names of the heroes who had the honour of working with Proffessor Xavier
     </h2>
     <?php
     // $count variable used to increment the records in the table
     $count=1;

     $sel_query="Select * from heroes;";
     $result = mysqli_query($conn,$sel_query);
     while($row = mysqli_fetch_assoc($result)) { ?>
     <div class="mt-6 ml-8 px-5 py-5 mr-5">
          
         <div class="mr-4 ">
              <div class="text-2xl text-green-500 font-bold mt-15">
                   <p class="mt-5">
                   <?php echo $row["hero_name"]; ?> 
                   </p>
              
              </div>
          
              <p class="text-lg">
              <?php echo $row["real_name"]; ?> 
              </p>

              <p class="mt-0 italic">
              <?php echo $row["short_bio"]; ?> 
              </p>
               <p class="mt-4 text-lg">
               <?php echo $row["long_bio"]; ?> 
               </p>
          

         </div> 
     </div>
     <?php if ($_SESSION['role'] === 'admin'){ ?>
          <div class="flex justify-start">
          <div class="mt-5 ml-8 px-5">
     <a href="update.php?id=<?php echo $row["id"]; ?>" class="bg-indigo-500 px-3 py-2 text-white rounded-lg shadow-lg">Update</a>
     
     </div>
     
     <div class="mt-5 ml-8">
     <a href="delete.php?name=<?php echo $row["hero_name"]; ?>" class="bg-red-500 px-3 py-2 text-white rounded-lg shadow-lg">Delete</a>
     </div>
          </div>
    
     
  
     <?php } ?>
    
     <?php $count++; } ?>

     </div>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
?>