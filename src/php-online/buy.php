<?php
    header('Access-Control-Allow-Credentials:true');
	header('Access-Control-Allow-Origin:http://www.wuhaijun.com.cn');
	$conn=new mysqli('qdm11341678.my3w.com','qdm11341678','ken198931','qdm11341678_db'); 
    $sql="SET NAMES UTF8";
    mysqli_query($conn,$sql);
	@$mn=$_REQUEST["mn"];
    @$mt=$_REQUEST["mt"];
	@$arr=$_REQUEST["arr"];
	@$piao=$_REQUEST["piao"];
	
	//$staff_json = json_encode($uname);
	// $staff_serialize = serialize($uname);
	// $sql="INSERT INTO tpp_seat VALUES(NULL,'$uname');";
	// mysqli_query($conn,$sql);

	
	$sql=
	"UPDATE tpp_seat SET arr='$arr' WHERE movie='$mn' and mtime='$mt'";
	$result=mysqli_query($conn,$sql);
	$user=mysqli_affected_rows($conn);
	// $aaa=unserialize($user[1]);
	//echo json_encode(Array("uname"=>$user));
	session_start();
	@$uname=$_SESSION["uname"];
	$sql=
		"UPDATE tpp_user SET piao='$piao' WHERE uname='$uname'";
	$result=mysqli_query($conn,$sql);
	echo json_encode(Array("msg"=>'ok'));
	// $user=mysqli_fetch_row($result);
	// echo json_encode(Array("uid"=>$user[0],"uname"=>$user[1],"upwd"=>$user[2],"user_name"=>$user[3],'phone'=>$user[4],'piao'=>$user[5]));
	
	
	// $aaa=unserialize($user);
	// echo $aaa;
	// $staff_dejson = unserialize($user[0], true);
	// echo $staff_dejson;