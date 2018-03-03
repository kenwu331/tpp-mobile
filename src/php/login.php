<?php
    header('Access-Control-Allow-Credentials:true');
	header('Access-Control-Allow-Origin:http://localhost:8080');
	$conn=mysqli_connect("127.0.0.1","root","","tpp",3306);
    $sql="SET NAMES UTF8";
    mysqli_query($conn,$sql);
	//从request中获得uname和upwd
	@$uname=$_REQUEST["uname"];
	@$upwd=$_REQUEST["upwd"];
	if($uname&&$upwd){
		//定义SQL语句: select 
		$sql="select * from tpp_user where uname='$uname' and upwd='$upwd'";
		$result=mysqli_query($conn,$sql);//执行查询
		//获得查询结果
		$user=mysqli_fetch_row($result);
		if(count($user)!=0){//如果有结果
			session_start();//打开session
			$_SESSION["uname"]=$user[1];
			
			echo json_encode(Array("uid"=>$user[0],"uname"=>$user[1],"upwd"=>$user[2],"user_name"=>$user[3]));
		}else//否则
			echo json_encode(Array("uname"=>""));//登录失败
	}

	// <?php
    // header('Access-Control-Allow-Credentials:true');
	// //header('Access-Control-Allow-Origin:http://localhost:8080');dev环境
	// header('Access-Control-Allow-Origin:http://www.wuhaijun.com.cn');
	// $conn=new mysqli('qdm11341678.my3w.com','qdm11341678','ken198931','qdm11341678_db'); 
    // $sql="SET NAMES UTF8";
    // mysqli_query($conn,$sql);
	// //从request中获得uname和upwd
	// @$uname=$_REQUEST["uname"];
	// @$upwd=$_REQUEST["upwd"];
	// if($uname&&$upwd){
	// 	//定义SQL语句: select 
	// 	$sql="select * from tpp_user where uname='$uname' and upwd='$upwd'";
	// 	$result=mysqli_query($conn,$sql);//执行查询
	// 	//获得查询结果
	// 	$user=mysqli_fetch_row($result);
	// 	if(count($user)!=0){//如果有结果
	// 		session_start();//打开session
	// 		$_SESSION["uname"]=$user[1];
			
	// 		echo json_encode(Array("uid"=>$user[0],"uname"=>$user[1],"upwd"=>$user[2],"user_name"=>$user[3]));
	// 	}else//否则
	// 		echo json_encode(Array("uname"=>""));//登录失败
	// }