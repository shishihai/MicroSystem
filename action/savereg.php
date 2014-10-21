<?php
error_reporting(E_ALL);
include_once '../conn/connection_utils.php';
include_once '../function/function_utils.php';
include_once '../cfg/macromsg.php';

/*Check input parameters*/
$sNickName = iconv('UTF-8', 'GB2312', urldecode(FunctionUtils::CheckInputParameter("nickname","post")));
$iGender = iconv('UTF-8', 'GB2312', urldecode(FunctionUtils::CheckInputParameter("gender","post")));
$sPhone = iconv('UTF-8', 'GB2312', urldecode(FunctionUtils::CheckInputParameter("phone","post")));
$sEmail = iconv('UTF-8', 'GB2312', urldecode(FunctionUtils::CheckInputParameter("email","post")));
$sAddress = iconv('UTF-8', 'GB2312', urldecode(FunctionUtils::CheckInputParameter("address","post")));
$sPassword = iconv('UTF-8', 'GB2312', urldecode(FunctionUtils::CheckInputParameter("password","post")));


/*Check whether the 'nickname' exists*/
$sql = sprintf("select count(id) as iCount from tb_userinfo where nickname='%s'", $sNickName);
//echo "query sql:".$sql."</br>";
$aRet = array();

$aRet = mysql_query($sql,$conn);
$row = mysql_fetch_row($aRet);
//echo "query ret:".$row[0]."</br>";
if ($row[0]) {
	echo "<script>alert('对不起，您的昵称已被占用！')</script>";
	exit;
}

$sql = sprintf("insert into tb_userinfo(nickname,gender,email,phone,address,password,lastmodifiedtime) values ('%s','%s','%s','%s','%s','%s',now());",
				$sNickName,$iGender,$sEmail,$sPhone,$sAddress,md5($sPassword));
//echo "insert sql:".$sql."</br>";
if(mysql_query($sql,$conn)){
	FunctionUtils::EchoRet(0, FunctionUtils::gbk2utf8($ArrSuccessMsg["REGISTER"]));
	//echo "<script>alert('注册成功！');window.location.href='../login.php';</script>";
}else{
	FunctionUtils::EchoRet(0, FunctionUtils::gbk2utf8($ArrFailMsg["REGISTER"]));
	//echo "<script>alert('注册失败！');window.location.href='../register.php';</script>";
}
?>

