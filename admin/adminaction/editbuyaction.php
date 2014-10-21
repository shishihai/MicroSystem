<?php
error_reporting(E_ALL);
include_once '../../conn/connection_utils.php';
include_once '../../function/function_utils.php';
include_once '../../cfg/macromsg.php';

/*Check login status*/
session_start();

if(!isset($_SESSION['adminid'])){
	echo "<script>alert('对不起，请登录后继续操作哦！');window.location.href='adminlogin.php';</script>";
}

/*Check input parameters*/
$iOrderID = $_GET['orderid'];
$sItemName = iconv('UTF-8', 'GB2312', urldecode(FunctionUtils::CheckInputParameter("itemname","post")));
$iItemNum = FunctionUtils::CheckInputParameter("itemnum","post");
$sExtraInfo = iconv('UTF-8', 'GB2312', urldecode(FunctionUtils::CheckInputParameter("extrainfo","post")));
$sStatus = iconv('UTF-8', 'GB2312', urldecode(FunctionUtils::CheckInputParameter("status","post")));

$sql = sprintf("update tb_orderinfo set itemname='%s',itemnum=%s,extrainfo='%s',lastupdatetime=now(),status='%s' 
				where orderid=%s;",$sItemName,$iItemNum,$sExtraInfo,$sStatus,$iOrderID);
//echo $sql;
if(mysql_query($sql,$conn)==TRUE){
	FunctionUtils::EchoRet(0, FunctionUtils::gbk2utf8($ArrSuccessMsg["EDITBUY"]));
}else{
	FunctionUtils::EchoRet(-1, FunctionUtils::gbk2utf8($ArrFailMsg["EDITBUY"]));
}
?>

