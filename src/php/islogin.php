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
		$user=mysqli_fetch_row($result);
		echo json_encode(Array("uid"=>$user[0],"uname"=>$user[1],"upwd"=>$user[2],"user_name"=>$user[3],'phone'=>$user[4],'piao'=>$user[5]));
	}else{
		echo json_encode(Array("uname"=>""));
	}


	// <?php   
	// header('Access-Control-Allow-Credentials:true');
	// //header('Access-Control-Allow-Origin:http://localhost:8080');dev环境
	// header('Access-Control-Allow-Origin:http://www.wuhaijun.com.cn');	
    // $conn=new mysqli('qdm11341678.my3w.com','qdm11341678','ken198931','qdm11341678_db'); 
    // $sql="SET NAMES UTF8";
    // mysqli_query($conn,$sql);
	// session_start();
	// @$uname=$_SESSION["uname"];
	// if($uname!=null){
	// 	$sql=
	// 		"select * from tpp_user where uname='$uname'";
	// 	$result=mysqli_query($conn,$sql);
	// 	$user=mysqli_fetch_row($result);
	// 	echo json_encode(Array("uid"=>$user[0],"uname"=>$user[1],"upwd"=>$user[2],"user_name"=>$user[3]));
	// }else{
	// 	echo json_encode(Array("uname"=>""));
	// }