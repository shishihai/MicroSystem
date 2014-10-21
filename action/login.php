<?php
error_reporting(E_ALL);
include_once '../conn/connection_utils.php';
include_once '../function/function_utils.php';
include_once '../cfg/macromsg.php';

/*Check input parameters*/
$sNickName = FunctionUtils::CheckInputParameter("nickname","post");
$sPassword = FunctionUtils::CheckInputParameter("password","post");

/*Check login information*/
$sql = sprintf("select * from tb_userinfo where nickname='%s' and password='%s';",$sNickName,md5($sPassword));
$aRet = array();

$aRet = mysql_query($sql,$conn);
$iRowNumber = mysql_num_rows($aRet);
if(1==$iRowNumber){
	$sClientIP = $_SERVER['REMOTE_ADDR'];
	$row = mysql_fetch_array($aRet);
	$iUserID = $row['id'];
	$sql = sprintf("insert into tb_logininfo(id,ip,lastlogintime) values(%s,'%s',now());",$iUserID,$sClientIP);

	if(mysql_query($sql,$conn)==TRUE){
		/*Open session and set session value*/
		session_start();
		$_SESSION['nickname'] = $sNickName;
		$_SESSION['userid'] = $iUserID;	
		/*Output result*/		
		FunctionUtils::EchoRet(0, FunctionUtils::gbk2utf8($ArrSuccessMsg["LOGIN"]),$sNickName);/*ajax reqires utf-8 encode*/
	}	
}else{
	FunctionUtils::EchoRet(-1, FunctionUtils::gbk2utf8($ArrFailMsg["LOGIN"]),$sNickName);
}




