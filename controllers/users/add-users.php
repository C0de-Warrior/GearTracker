<?php
require ("../../config/db-config.php");

if (isset($_POST['submit'])){

    // getting info from form
    $name = $_POST['name'];
    $number =$_POST['number'];
    $email = $_POST['email'];
    $sport = $_POST['sport'];
    $id = $_POST['id'];
    $passw = $_POST['password'];

    $query = "INSERT INTO `users`(`ID`, `Name`, `Email`, `PhoneNumber`, `password`, `Sport`) VALUES ('$id','$name','$email','$number','$passw','$sport')";

    $request = mysqli_query($conn, $query);

    if($request){
        echo '<script> window.location.href="../../views/users/list-users.php"; </script>';
    }
    else{
        echo '<script> alert("User registration failed.");
        window.location.href = "../../views/users/add-users.php";
         </script>';
    }
}
else{
    echo '<script> alert("Database failed");
        window.location.href = "../../views/auth/login.php";
         </script>';
}
