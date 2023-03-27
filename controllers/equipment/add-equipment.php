<?php
require ("../../config/db-config.php");

if (isset($_POST['submit'])){

    // getting info from form
    $name = $_POST['name'];
    $code =$_POST['code'];
    $sport = $_POST['sport'];
    $available = $_POST['available'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    
    
   
    //$passw = $_POST['password'];

    $query = "INSERT INTO `equipment`(`name`,`code`,`sport`,`quantity_available`,`quanity`,`description`) VALUES ('$name','$code','$sport', $available,' $quantity','$description')";

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
