<?php
session_start();
session_unset();
session_destroy();  

if (isset($_COOKIE["user_id"])) {
    setcookie("user_id", "", time() - 3600, "/");
}

header("Location: Login.php");  // Redirige al login
exit();
?>
