<?php
error_reporting(E_ALL);
include_once '../conn/connection_utils.php';
include_once '../function/function_utils.php';

/*Check login status*/
session_start();

if(!isset($_SESSION['adminid'])){
	echo "<script>alert('�Բ������¼���������Ŷ��');window.location.href='adminlogin.php';</script>";
}

/*Check input parameters*/
$iOrderID = $_GET['orderid'];
$sItemName = FunctionUtils::CheckInputParameter("itemname","post");
$iItemNum = FunctionUtils::CheckInputParameter("itemnum","post");
$sExtraInfo = FunctionUtils::CheckInputParameter("extrainfo","post");
$sStatus = FunctionUtils::CheckInputParameter("status","post");

$sql = sprintf("update tb_orderinfo set itemname='%s',itemnum=%s,extrainfo='%s',lastupdatetime=now(),status='%s' 
				where orderid=%s;",$sItemName,$iItemNum,$sExtraInfo,$sStatus,$iOrderID);
echo $sql;
if(mysql_query($sql,$conn)==TRUE){
	echo "<script>alert('�޸Ķ����ɹ���');window.location.href='../history.php'</script>";
}else{
	echo "<script>alert('��������æ�����Ժ����ԣ�');window.location.href='../login.php'</script>";
}
?>

