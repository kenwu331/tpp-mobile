<?php   
	header('Access-Control-Allow-Credentials:true');
    header('Access-Control-Allow-Origin:http://www.wuhaijun.com.cn');
    $conn=new mysqli('qdm11341678.my3w.com','qdm11341678','ken198931','qdm11341678_db');
    $sql="SET NAMES UTF8";
    mysqli_query($conn,$sql);
    session_start();
    $_SESSION["uname"]='';
    echo "登出成功";