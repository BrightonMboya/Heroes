<?php

if (isset($_POST['hero_name'])){
    include "db_conn.php";

    function validate($data){
        $data=trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $hero_name = validate($_GET['hero_name']);

    $sql ="SELECT * from heroes WHERE hero_name = $hero_name";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
    }else{
        header("Location: index.php");
    }
}else if (isset($_POST['update'])){
    echo "string";
}
// }else{
//     header("Location: view.php");
// }