<?php
error_reporting(E_ALL);
include_once '../conn/connection_utils.php';
include_once '../function/function_utils.php';
include_once '../cfg/macromsg.php';

/*Check login status*/
session_start();
FunctionUtils::CheckLogin();
$sNickName = $_SESSION['nickname'];

/*Check input parameters*/
/*Change chinese character type to insert into mysql database which is encoded with gbk2312*/
$sItemName = iconv('UTF-8', 'GB2312', urldecode(FunctionUtils::CheckInputParameter("itemname","post")));
$iItemNum = FunctionUtils::CheckInputParameter("itemnum","post");
$sExtraInfo = iconv('UTF-8', 'GB2312', urldecode(FunctionUtils::CheckInputParameter("extrainfo","post")));

$sql = sprintf("insert into tb_orderinfo(nickname,itemname,itemnum,extrainfo,inputtime,lastupdatetime) 
								values('%s','%s',%s,'%s',now(),now())",$sNickName,$sItemName,$iItemNum,$sExtraInfo);
//echo $sql;
/*Save order*/
if(mysql_query($sql,$conn)==TRUE){
	FunctionUtils::EchoRet(0, FunctionUtils::gbk2utf8($ArrSuccessMsg["BUY"]));
}else{
	FunctionUtils::EchoRet(-1, FunctionUtils::gbk2utf8($ArrFailMsg["BUY"]));
}
?>

