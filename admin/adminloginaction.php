<?php
error_reporting(E_ALL);
include_once '../conn/connection_utils.php';
include_once '../function/function_utils.php';

/*Check input parameters*/
$sNickName = FunctionUtils::CheckInputParameter("adminname","post");
$sPassword = FunctionUtils::CheckInputParameter("password","post");

$doc = new DOMDocument();
$doc->load('adminaccount.xml');
$accounts = $doc->getElementsByTagName('account');
$bLoginFlag = FALSE;

$acid="";
foreach ($accounts as $ac){
	$acids = $ac->getElementsByTagName('id');
	$acid = $acids->item(0)->nodeValue;
	//echo $acid." ";
	
	$psws = $ac->getElementsByTagName('psw');
	$psw = $psws->item(0)->nodeValue;
	
	if($sNickName==$acid && $sPassword==$psw){
		$bLoginFlag = TRUE;
		break;		
	}
}
if (TRUE==$bLoginFlag){
	$_SESSION['adminid']=$acid;
	echo "<script>alert('��½�ɹ�!');window.location.href='search.php';</script>";
}else{
	echo "<script>alert('�����ʺŻ��������!');window.location.href='adminlogin.php';</script>";
}




