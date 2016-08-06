<style>
	#tb-tran{border-collapse:collapse;background:#fff;}
	#tb-tran th{border: 1px solid #ccc;text-align:center;background: rgba(204,204,204,.20);}
	#tb-tran td{border: 1px solid #ccc;text-indent: 20px;}
	#tb-tran tr:not(.tr):hover{
		background: rgba(204,204,204,.10);
	}
</style>
<?
	include_once '../config.inc/config.inc.php';
	$sql = "SELECT subcode.code, subcode.degree, subname.name FROM subjects ";
	$sql .= "LEFT JOIN subcode ON (subjects.subID=subcode.subjectID) ";
	$sql .= "LEFT JOIN subname ON (subjects.subID=subname.subjectID) ";
	$sql .= "WHERE type=1 LIMIT $start, $limit";

	$rs = mysql_query($sql) or die (mysql_error());
	echo "<table id=\"tb-tran\" width=\"100%\" cellpadding=\"5\" width=\"100%\" align=\"center\"><tr class=\"tr\"><th>รหัสวิชา</th><th>รายวิชาที่เทียบโอน</th><th>หน่วยกิต</th></tr>";
	while($data = mysql_fetch_assoc($rs)){
		echo "<tr><td width=\"100\">".$data['code']."</td><td>".$data['name']."</td><td>".$data["degree"]."</td></tr>";
	}
	echo "</table>";
?>