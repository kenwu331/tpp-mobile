<?php   
	header('Access-Control-Allow-Credentials:true');
    header('Access-Control-Allow-Origin:http://localhost:8080');
    $conn=mysqli_connect("127.0.0.1","root","","tpp",3306);
    $sql="SET NAMES UTF8";
    mysqli_query($conn,$sql);
    session_start();
    $_SESSION["uname"]='';
    echo "登出成功";