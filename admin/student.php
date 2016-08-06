<style>
	#tb-student{border-collapse:collapse;background:#fff;}
	#tb-student th{border: 1px solid #ccc;text-align:center;background: rgba(204,204,204,.20);}
	#tb-student td{border: 1px solid #ccc;text-indent: 20px;}
	#tb-student tr:not(.tr):hover{
		background: rgba(204,204,204,.10);
	}
</style>
<table cellpadding="5" width="100%" align="center" id="tb-student">
<tr class="tr"><th>No.</th><th>ชื่อ-สกุล</th><th>อายุ</th><th>เบอร์ติดต่อ</th><th>ไฟล์แนบ</th></tr>
<?
	include_once '../config.inc/config.inc.php';
	$result = mysql_query("SELECT name, lastname, age, idcard, tel FROM student WHERE acadyear='$acadyear' LIMIT $start, $limit");
	if(mysql_num_rows($result) == 0){
		echo "<tr><td align=\"center\">ไม่มีข้อมูล</td></tr>";
	}else {
	$arr = array();
	$c = 0;
	while($data = mysql_fetch_assoc($result)){
		$c++
?>
	<tr><td><?=$c?></td><td><?=$data['name']." ".$data['lastname']?></td><td><?=$data['age']?></td><td><?=$data['tel']?></td><td><a href="../report/MyDoc/<?=$data['idcard']?>.docx"><i class="icon-download"></i></a></td></tr>
<?}}?>
</table>