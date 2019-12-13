<?php
    session_start();
    unset($_SESSION['customer_ID']);
    header('http://localhost/FreshFlora_SCM/codes/index.html')
?>