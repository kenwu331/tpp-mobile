<?php
    header('Access-Control-Allow-Origin:*');
    require('init.php');
    session_start();
    if($_SESSION["uname"]!='')
    echo $_SESSION["uname"]