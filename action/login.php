<?php
error_reporting(E_ALL);
include_once '../conn/connection_utils.php';
include_once '../function/function_utils.php';

/*Check input parameters*/
$sNickName = FunctionUtils::CheckInputParameter("nickname","post");
$sPassword = FunctionUtils::CheckInputParameter("password","post");

$sql = sprintf("select * from tb_userinfo where nickname='%s' and password='%s';",$sNickName,md5($sPassword));
$aRet = array();

$aRet = mysql_query($sql,$conn);
$iRowNumber = mysql_num_rows($aRet);
if(1==$iRowNumber){
	$sClientIP = $_SERVER['REMOTE_ADDR'];
	$row = mysql_fetch_array($aRet);
	$iUserID = $row['id'];
	$sql = sprintf("insert into tb_logininfo(id,ip,lastlogintime) values(%s,'%s',now());",$iUserID,$sClientIP);
	//echo $sql;
	if(mysql_query($sql,$conn)==TRUE){
		session_start();
		$_SESSION['nickname'] = $sNickName;
		$_SESSION['userid'] = $iUserID;
		$sURL = "../home.php?uid=".$sNickName;
		echo "<script>alert('登陆成功！'); window.location.href ="."'".$sURL."'".";</script>";
	}
	
}else{
	$sURL = "../login.php?uid=".$sNickName;
	echo "<script>alert('你的帐号或密码错误！'); window.location.href ="."'".$sURL."'".";</script>";	
}




