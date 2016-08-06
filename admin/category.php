<style>
	#tb-category{border-collapse:collapse;background:#fff;}
	#tb-category th{border: 1px solid #ccc;text-align:center;background: rgba(204,204,204,.20);}
	#tb-category td{border: 1px solid #ccc;text-align:center;}
	#tb-category tr:not(.tr):hover{
		background: rgba(204,204,204,.10);
	}
</style>
<table cellpadding="5" width="100%" align="center" id="tb-category">
	<tr class="tr"><th>No.</th><th>หมวดหมู่รายวิชา</th></tr>
<?
	include_once '../config.inc/config.inc.php';
	$result = mysql_query("SELECT * FROM category");
	$arr = array();
	while($data = mysql_fetch_assoc($result)){
?>
	<tr><td><?=$data['dest']?></td><td style="text-align:left;text-indent: 20px;"><?=$data['byteCode']?></td></tr>
<?}?>
</table>
