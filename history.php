<?php
error_reporting(E_ALL);
include_once 'conn/connection_utils.php';
include_once 'function/function_utils.php';

/*Check login status*/
session_start();
if(!isset($_SESSION['userid'])){
	echo "<script>alert('�Բ������¼���������Ŷ��');window.location.href='login.php';</script>";
}
$iUserID = $_SESSION['userid'];

$sql = sprintf("select * from tb_orderinfo where userid=%s;",$iUserID);
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
		<td><?php echo $rs["itemname"]?></td>
		<td><?php echo $rs["itemnum"]?></td>
		<td><?php echo $rs["extrainfo"]?></td>
		<td><?php echo $rs["inputtime"]?></td>
		<td><?php echo $rs["lastupdatetime"]?></td>
		<td><?php echo $rs["status"]?></td>
		<?php
		    if($rs["status"]=="���µ�"){
		    	 $sHref = 'editbuy.php?orderid='.$rs["orderid"];
				echo "<td><a href=$sHref>�޸Ķ���</a></td>";
		    }else{
		    	echo "<td>��ǰ���������޸�</td>";
		    }
		   
		?>
	</tr>
	<?php
	}
	?>
</table>


