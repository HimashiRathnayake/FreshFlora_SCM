<?php
    session_start();
    unset($_SESSION['uid']);
    unset($_SESSION['cart']);
    header('Location:http://localhost/FreshFlora_SCM/common_user/home.php')
?>