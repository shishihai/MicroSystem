<?php 
error_reporting(E_ALL);
include_once 'conn/connection_utils.php';
include_once 'function/function_utils.php';

/*Check login status*/
session_start();
if(!isset($_SESSION['userid'])){
	echo "<script>alert('�Բ������¼���������Ŷ��');window.location.href='login.php';</script>";
}
$sNickName = $_SESSION['nickname'];
$iOrderID = $_GET['orderid'];
$sql = sprintf("select * from tb_orderinfo where orderid=%s and nickname='%s';",$iOrderID,$sNickName);

$data = mysql_query($sql,$conn);
$rs = mysql_fetch_array($data);

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>�޸Ķ���</title>
	<script type="text/javascript" src="js/js_utils.js"></script>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
</head>
<body>	
	<script>
	  $(document).ready(function(){
		  /*Input code here when page is ready*/
		  if($.cookie("nickname")==undefined){
			  alert("�Բ������¼���������Ŷ��");
			  location.href = "login.htm";
		  }
		  var sItemName = "<?php echo $rs['itemname'];?>";
		  var iItemNum = "<?php echo $rs['itemnum'];?>";
		  var sExtrainfo = "<?php echo $rs['extrainfo'];?>";
		  $("#itemname").val(sItemName);
		  $("#itemnum").val(iItemNum);
		  $("#extrainfo").text(sExtrainfo);
	  });	 
	</script>
	
	<form name="buyform" method="post" action="./action/saveeditbuy.php?orderid=<?php echo $rs['orderid'];?>"
		onSubmit="return chkBuyInput(this)">
		��Ʒ���ƣ�<input type="text" name="itemname" id="itemname"><br/>
	        ��Ʒ������<select name="itemnum" id="itemnum">
		<option value="">��ѡ��������</option>
		<option value=1>1</option>
		<option value=2>2</option>
		<option value=3>3</option>
		<option value=4>4</option>
		<option value=5>5</option>
		<option value=6>6</option>
		<option value=7>7</option>
		<option value=8>8</option>
		<option value=9>9</option>
		<option value=0>����</option>
	</select><br/>	
	����˵����<textarea rows="3" cols="20" name="extrainfo" id="extrainfo"></textarea><br/>	
	�޸Ķ����� <input name="submit" type="submit" id="buy_btn" value="�޸Ķ���">
	</form>
</body>
</html>
