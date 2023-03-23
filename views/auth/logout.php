<?php
echo "logging out";
session_start();
session_destroy();
header('Location: ../../views/auth/login.php');
