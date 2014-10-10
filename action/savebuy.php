<?php
error_reporting(E_ALL);
include_once '../conn/connection_utils.php';
include_once '../function/function_utils.php';

/*Check login status*/
session_start();
FunctionUtils::CheckLogin();
$iUserID = $_SESSION['userid'];

/*Check input parameters*/
$sItemName = FunctionUtils::CheckInputParameter("itemname","post");
$iItemNum = FunctionUtils::CheckInputParameter("itemnum","post");
$sExtraInfo = FunctionUtils::CheckInputParameter("extrainfo","post");

$sql = sprintf("insert into tb_orderinfo(userid,itemname,itemnum,extrainfo,inputtime,lastupdatetime) 
								values(%s,'%s',%s,'%s',now(),now())",$iUserID,$sItemName,$iItemNum,$sExtraInfo);
echo $sql;
if(mysql_query($sql,$conn)==TRUE){
	echo "<script>alert('下单成功！');window.location.href='../history.php'</script>";
}else{
	echo "<script>alert('服务器繁忙，请稍后再试！');window.location.href='../login.php'</script>";
}
?>

