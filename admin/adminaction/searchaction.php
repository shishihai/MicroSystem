<?php
error_reporting(E_ALL);
include_once '../../conn/connection_utils.php';
include_once '../../function/function_utils.php';

session_start();
if(!isset($_SESSION['adminid'])){
	echo "<script>alert('�Բ������¼���������Ŷ��');window.location.href='../adminlogin.php';</script>";
}
/*Check input parameters*/
$sItemName = FunctionUtils::CheckInputParameter("itemname","post");
$sNickName= FunctionUtils::CheckInputParameter("nickname","post");
$sLastUpdateTime = FunctionUtils::CheckInputParameter("lastupdatetime","post");
$sCondition = FunctionUtils::CheckInputParameter("condition","post");

$sql = "";
if("and"==$sCondition){
	$sSqlCondition="1=1";
	if(isset($sItemName)&&$sItemName!=""){
       $sSqlCondition .= " and itemname like '%".$sItemName."%'";
	}
	if(isset($sNickName)&&$sNickName!=""){
		$sSqlCondition .= " and nickname = "."'".$sNickName."'";
	}
	if(isset($sLastUpdateTime)&&$sLastUpdateTime!=""){
		$sSqlCondition .= " and (lastupdatetime > '".$sLastUpdateTime." 00:00:00'"
					   ." and lastupdatetime < '".$sLastUpdateTime." 23:59:59')";
	}
	$sql = "select * from tb_orderinfo where ".$sSqlCondition;
}elseif ("or"==$sCondition){
	$sSqlCondition="1=0";
	if(isset($sItemName)&&$sItemName!=""){
       $sSqlCondition .= " or itemname like '%".$sItemName."%'";
	}
	if(isset($sNickName)&&$sNickName!=""){
		$sSqlCondition .= " or nickname = "."'".$sNickName."'";
	}
	if(isset($sLastUpdateTime)&&$sLastUpdateTime!=""){
		$sSqlCondition .= " or (lastupdatetime > '".$sLastUpdateTime." 00:00:00'"
					   ." and lastupdatetime < '".$sLastUpdateTime." 23:59:59')";
	}
	$sql = "select * from tb_orderinfo where ".$sSqlCondition;
}else{
    echo "<script>alert('���������쳣��');window.location.href='../search.php';</script>";
}
//echo $sql."<br/>";
$data = mysql_query($sql,$conn);
?>

<table border="1">
	<tr>
		<th>������</th>
		<th>��Ʒ����</th>
		<th>��Ʒ����</th>
		<th>������Ϣ</th>
		<th>�ύʱ��</th>
		<th>����޸�ʱ��</th>
		<th>����״̬</th>
		<th>�޸Ķ���</th>
	</tr>

	<?php
	while($rs = mysql_fetch_array($data)){
	?>

	<tr>
		<td><?php echo $rs["orderid"]?></td>
		<td><?php echo $rs["nickname"]?></td>
		<td><?php echo $rs["itemname"]?></td>
		<td><?php echo $rs["itemnum"]?></td>
		<td><?php echo $rs["extrainfo"]?></td>
		<td><?php echo $rs["lastupdatetime"]?></td>
		<td><?php echo $rs["status"]?></td>		
		<?php		   
		    $sHref = '../editbuy.php?orderid='.$rs["orderid"];
			echo "<td><a href=$sHref>�޸Ķ���</a></td>";		   
		?>
	</tr>
	<?php
	}
	?>
</table>



