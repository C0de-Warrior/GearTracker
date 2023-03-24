<?php
require ("../../config/db-config.php");

if (isset($_POST['submit'])){

    // getting info from form
    $name = $_POST['name'];
    $code =$_POST['code'];
    $equipment = $_POST['equipment'];
    $quantity = $_POST['quantity'];
    //$id = $_POST['id'];
    //$passw = $_POST['password'];

    $query = "INSERT INTO `equipment`(`code`, `name`, /*`sport`,*/ `quanity`/*, `available`, `Sport`*/) VALUES ('$code','$name',' $quantity'/*,'$number','$passw','$sport'*/)";

    $request = mysqli_query($conn, $query);

    if($request){
        echo '<script> window.location.href="../../views/equipment/list-equipment.php"; </script>';
    }
    else{
        echo '<script> alert("Equipment Addition failed.");
        window.location.href = "../../views/equipment/add-equipment.php";
         </script>';
    }
}
else{
    echo '<script> alert("Database failed");
        window.location.href = "../../views/auth/login.php";
         </script>';
}
