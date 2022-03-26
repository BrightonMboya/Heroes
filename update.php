<?php
include('db_conn.php');

// $id = $_REQUEST['id'];

$query = "select * from heroes" ; 
$result = mysqli_query($conn, $query) or die (mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<?php 

$update = true;
	if (isset($_GET['update'])) {
		$id = $_GET['update'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM heroes WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
      // $id = $n['id'];
			$name = $n['hero_name'];
			$real_name = $n['real_name'];
      $short_bio = $n['short_bio'];
      $long_bio = $n['long_bio'];
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="build/tailwind.css">
  <title>Update page</title>
</head>
<body>
<div class="min-h-screen bg-gray-100 flex flex-col justify-center py-12 px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
          <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow" />
          <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Update the Hero</h2>
        </div>
      
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
          <div class="bg-white py-8 px-6 shadow rounded-lg sm:px-10">
<form class="mb-0 space-y-6"method="post" action="" >

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<div class="input-group">
  <label>Hero Name</label>
  <input type="text" name="hero_name" value="<?php echo $row['hero_name'];?>" class="border border-gray-300 rounded-lg shadow-sm w-full py-1">
</div>
<div class="input-group">
  <label>Real Name</label>
  <input type="text" name="real_name" value="<?php echo $row['real_name'];?>" class="border border-gray-300 rounded-lg shadow-sm w-full py-1">
</div>
<div class="input-group">
  <label>Short bio</label>
  <input type="text" name="short_bio" value="<?php echo $row['short_bio'];?>" class="border border-gray-300 rounded-lg shadow-sm w-full py-1">
</div>
<div class="input-group">
  <label>Long bio</label>
  <input type="text" name="long_bio" value="<?php echo $row['long_bio'];?>" class="border border-gray-300 rounded-lg shadow-sm w-full py-1">
</div>
<div class="input-group">
<?php if ($update == true): ?>
<button type="submit" name="update" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none 
                focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">update</button>
<?php else: ?>
<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>

</div>
<?php

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['hero_name'];
	$real_name = $_POST['real_name'];
  $short_bio = $_POST['short_bio'];
  $long_bio = $_POST['long_bio'];

	mysqli_query($conn, "UPDATE heroes SET hero_name='$name', real_name='$real_name', short_bio='$short_bio', long_bio='$long_bio' WHERE id=$id");
	$_SESSION['message'] = "Record updated!"; 
	header('location: view.php');
}
?>
</form>
</body>
</html>