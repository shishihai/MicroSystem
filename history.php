<?php
error_reporting(E_ALL);
include_once 'conn/connection_utils.php';
include_once 'function/function_utils.php';

/*Check login status*/
session_start();
if(!isset($_SESSION['userid'])){
	echo "<script>alert('对不起，请登录后继续操作哦！');window.location.href='login.php';</script>";
}
$iUserID = $_SESSION['userid'];

$sql = sprintf("select * from tb_orderinfo where userid=%s;",$iUserID);
$data = mysql_query($sql,$conn);
?>

<table border="1">
	<tr>
		<th>订单号</th>
		<th>物品名称</th>
		<th>物品数量</th>
		<th>附加信息</th>
		<th>提交时间</th>
		<th>最后修改时间</th>
		<th>订单状态</th>
		<th>修改订单</th>
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
		    if($rs["status"]=="新下单"){
		    	 $sHref = 'editbuy.php?orderid='.$rs["orderid"];
				echo "<td><a href=$sHref>修改订单</a></td>";
		    }else{
		    	echo "<td>当前订单不可修改</td>";
		    }
		   
		?>
	</tr>
	<?php
	}
	?>
</table>


