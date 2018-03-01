<?php
    header('Access-Control-Allow-Origin:*');
	@$un=$_REQUEST['uname'];
	if($un===null || $un===""){
			die('uname错');
	}
	@$uw=$_REQUEST['upwd'];
	if($uw===null || $uw===""){
			die('upwd错');
	}
	require('init.php');
	$sql="SELECT * FROM tpp_user WHERE uname='$un' and upwd='$uw'";
	$result= mysqli_query($conn,$sql);
	if($result===false){
		echo '输出出错<br>';
		echo "请查看代码：$sql";
	}else{
		echo '代码执行成功<br>';
		$user= mysqli_fetch_assoc($result);
		if($user===null){
			echo '用户名或密码有误';
		}else{
			echo '登录成功';
		}
	}