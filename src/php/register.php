<?php
    header('Access-Control-Allow-Credentials:true');
	header('Access-Control-Allow-Origin:http://localhost:8080');
	$conn=mysqli_connect("127.0.0.1","root","","tpp",3306);
    $sql="SET NAMES UTF8";
    mysqli_query($conn,$sql);
	@$uname=$_REQUEST["uname"];
    @$upwd=$_REQUEST["upwd"];
    @$user_name=$_REQUEST["user_name"];
	if($uname){
		$sql="select * from tpp_user where uname='$uname'";
		$result=mysqli_query($conn,$sql);
		$user=mysqli_fetch_all($result,1);
		if(count($user)!=0){//如果有结果
			echo json_encode(Array("uname"=>"用户已存在"));
		}else{//否则
            $sql="INSERT INTO tpp_user VALUES(NULL,'$uname','$upwd','$user_name');";
			mysqli_query($conn,$sql);
			session_start();//打开session
			$_SESSION["uname"]=$uname;
            echo json_encode(Array("uname"=>$uname,"upwd"=>$upwd,"user_name"=>$user_name));
        }
	}

	// <?php
    // header('Access-Control-Allow-Credentials:true');
	// //header('Access-Control-Allow-Origin:http://localhost:8080');dev环境
	// header('Access-Control-Allow-Origin:http://www.wuhaijun.com.cn');
	// $conn=new mysqli('qdm11341678.my3w.com','qdm11341678','ken198931','qdm11341678_db');
    // $sql="SET NAMES UTF8";
    // mysqli_query($conn,$sql);
	// @$uname=$_REQUEST["uname"];
    // @$upwd=$_REQUEST["upwd"];
    // @$user_name=$_REQUEST["user_name"];
	// if($uname){
	// 	$sql="select * from tpp_user where uname='$uname'";
	// 	$result=mysqli_query($conn,$sql);
	// 	$user=mysqli_fetch_row($result);
	// 	if(count($user)!=0){//如果有结果
	// 		echo json_encode(Array("uname"=>"用户已存在"));
	// 	}else{//否则
    //         $sql="INSERT INTO tpp_user VALUES(NULL,'$uname','$upwd','$user_name');";
	// 		mysqli_query($conn,$sql);
	// 		session_start();//打开session
	// 		$_SESSION["uname"]=$uname;
    //         echo json_encode(Array("uname"=>$uname,"upwd"=>$upwd,"user_name"=>$user_name));
    //     }
	// }