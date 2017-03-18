<?php  
    // Lampirkan db dan User
    require_once "library/database.php";
    require_once "class/user.php";


    // Buat object user
    $user = new User($db);

    // Logout! hapus session user
    $user->logout();

    // Redirect ke login
    header('location: login.php');
 ?>