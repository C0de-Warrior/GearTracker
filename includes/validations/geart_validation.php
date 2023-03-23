<?php
// start sessions
session_start();
if(isset($_SESSION['user_id'])){
    //pass

}else{
    echo '<script> window.location.href = "../../views/auth/login.php"; </script>';
}
?>
 
 