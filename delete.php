<?php
 require_once 'db_conn.php';
 mysqli_query($conn, "DELETE FROM heroes WHERE hero_name='$_REQUEST[name]'") or die(mysqli_error());

header("Location: view.php"); 

?>