<?php
class FunctionUtils{
	
	/*Check Input Data via "GET", "POST" or "REQUEST"*/
	public static function CheckInputParameter($sParaName,$sType="get"){
		
		if(0==strcmp("get", $sType)){
			if(!isset($_GET[$sParaName])){
				echo "Could not find parameter ".$sParaName."</br>";
				exit;
			}
			$sParaValue = trim($_GET[$sParaName]);
		}elseif (0==strcmp("post", $sType)){
			if(!isset($_POST[$sParaName])){
				echo "Could not find parameter ".$sParaName."</br>";
				exit;
			}
			$sParaValue = trim($_POST[$sParaName]);
		}else{
			if(!isset($_REQUEST[$sParaName])){
				echo "Could not find parameter ".$sParaName."</br>";
				exit;
			}
			$sParaValue = trim($_REQUEST[$sParaName]);
		}
		
		$sParaValue = addslashes($sParaValue);
		return $sParaValue;
	
	}
	
	public static function CheckLogin(){
		if(!isset($_SESSION['userid'])){
			echo "<script>alert('对不起，请登录后继续操作哦！);window.locaiton.href='../login.htm';</script>";
		}
	}
}