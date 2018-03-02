<?php   
	header('Access-Control-Allow-Credentials:true');
	header('Access-Control-Allow-Origin:http://localhost:8080');	
    $conn=mysqli_connect("127.0.0.1","root","","tpp",3306);
    $sql="SET NAMES UTF8";
    mysqli_query($conn,$sql);
	session_start();
	@$uname=$_SESSION["uname"];
	if($uname!=null){
		$sql=
			"select * from tpp_user where uname='$uname'";
		$result=mysqli_query($conn,$sql);
		$user=mysqli_fetch_all($result,1);
		echo json_encode($user[0]);
	}else{
		echo json_encode(Array("uname"=>""));
	}