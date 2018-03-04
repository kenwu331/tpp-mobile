<?php
    header('Access-Control-Allow-Credentials:true');
	header('Access-Control-Allow-Origin:http://localhost:8080');
	$conn=mysqli_connect("127.0.0.1","root","","tpp",3306);
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