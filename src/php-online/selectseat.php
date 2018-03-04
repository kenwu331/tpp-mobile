<?php
    header('Access-Control-Allow-Credentials:true');
	header('Access-Control-Allow-Origin:http://www.wuhaijun.com.cn');
	$conn=new mysqli('qdm11341678.my3w.com','qdm11341678','ken198931','qdm11341678_db'); 
    $sql="SET NAMES UTF8";
    mysqli_query($conn,$sql);
	@$mn=$_REQUEST["mn"];
    @$mt=$_REQUEST["mt"];
    @$arr=$_REQUEST["arr"];
	$sql=
	"select arr from tpp_seat where movie='$mn' and mtime='$mt'";
	$result=mysqli_query($conn,$sql);
	$user=mysqli_fetch_row($result);
	echo json_encode(Array("uname"=>$user[0]));