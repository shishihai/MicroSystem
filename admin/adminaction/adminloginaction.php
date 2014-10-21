<?php
error_reporting(E_ALL);
include_once '../../conn/connection_utils.php';
include_once '../../function/function_utils.php';
include_once '../../cfg/macromsg.php';

/*Check input parameters*/
$sNickName = FunctionUtils::CheckInputParameter("adminname","post");
$sPassword = FunctionUtils::CheckInputParameter("password","post");

$doc = new DOMDocument();
$doc->load('../../cfg/adminaccount.xml');
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
	session_start();
	$_SESSION['adminid']=$acid;
	FunctionUtils::EchoRet(0, FunctionUtils::gbk2utf8($ArrSuccessMsg["LOGIN"]),$acid);
}else{
	FunctionUtils::EchoRet(-1, FunctionUtils::gbk2utf8($ArrFailMsg["LOGIN"]));
}




