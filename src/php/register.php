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
            echo json_encode(Array("uname"=>$uname,"upwd"=>$upwd,"user_name"=>$user_name));
        }
	}