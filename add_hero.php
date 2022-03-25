<?php
session_start();
if (isset($_POST['add'])){

    include "db_conn.php";

    function validate($data){
        $data=trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $hero_name = validate($_POST['hero_name']);
    $real_name = validate($_POST['real_name']);
    $short_bio = validate($_POST['short_bio']);
    $long_bio = validate($_POST['long_bio']);

    if (empty($hero_name)){
        header("Location: index.php?error=Hero Name is required");
        exit();
    }else if (empty($real_name)){
        header("Location: index.php?error=Real Name is required");
        exit();
    }else if (empty($short_bio)){
        header("Location: index.php?error=Short Bio is required");
        exit();
    }else if (empty($long_bio)){
        header("Location: index.php?error=Long Bio is required");
        exit();
    }else{
        $sql = "INSERT INTO heroes(hero_name, real_name, short_bio, long_bio) 
                VALUES('$hero_name', '$real_name','$short_bio','$long_bio')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: view.php");
            exit();
        }else{
            header("Location: ../view.php?error=unknown error occured");
        }
    }
    
    




}



