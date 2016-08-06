<style>
	#tb-tranfer{border-collapse:collapse;background:#fff;}
	#tb-tranfer th{border: 1px solid #ccc;text-align:center;background: rgba(204,204,204,.20);}
	#tb-tranfer td{border: 1px solid #ccc;text-indent: 20px;}
	#tb-tranfer tr:not(.tr):hover{
		background: rgba(204,204,204,.10);
	}
</style>
<?
	if(!isset($start)){
		$start = 0;
	}
	 // แสดงผลหน้าละกี่หัวข้อ
	include_once '../config.inc/config.inc.php';
	/* หาจำนวน record ทั้งหมด
	ปล. อันนี้ต้องใช้กับตัวแบ่งนะ ห้ามเอาออก*/
	//$Qtotal = mysql_query("SELECT * FROM subjects"); //คิวรี่ คำสั่ง
	//$total = mysql_num_rows($Qtotal); // หาจำนวน record 
	$sql = "SELECT * FROM subjects WHERE type='0' LIMIT $start, $limit";
	$c = 0;
	$rs = mysql_query($sql) or die (mysql_error());
	$subid = array();
	while($data = mysql_fetch_assoc($rs)){
		$subid[] = $data['subID'];
	}
	$num = array();
	$subjectcode = array();
	$subdegree = array();
	for($i=0;$i<count($subid);$i++){
		$rs = mysql_query("SELECT code, degree FROM subcode WHERE subjectID='".$subid[$i]."'");
		$num[] = mysql_num_rows($rs);
		while($data = mysql_fetch_assoc($rs)){ 
			$exp = explode("/",$data['code']."/".$data['degree']);
			$subjectcode[$i][] = $exp[0];
			$subdegree[$i][] = $exp[1];
		}
	}
	$num2 = array();
	$subjectname = array();
	for($i=0;$i<count($subid);$i++){
		$rs = mysql_query("SELECT name FROM subname WHERE subjectID='".$subid[$i]."'");
		$num2[] = mysql_num_rows($rs);
		while($data = mysql_fetch_assoc($rs)){
			$subjectname[$i][] = $data['name'];
			$c++;
		}
	}
	echo '<table cellpadding="5" width="100%" align="center" id="tb-tranfer">';
	echo '<tr class="tr"><th>รหัสวิชา</th><th>รายวิชาที่ขอเทียบโอน</th><th>หน่วยกิต</th></tr>';
	for($j=0;$j<count($subid);$j++){
		echo '<tr><td>';
		for($k=0;$k<$num[$j];$k++){
			if($num[$j] >= 2 )
				echo $subjectcode[$j][$k].",";
			else
				echo $subjectcode[$j][$k];
		}
		echo '&nbsp;หรือ xxxxxx</td><td>';
		for($m=0;$m<$num2[$j];$m++){
			if($num2[$j] >= 2 )
				echo $subjectname[$j][$m].",";
			else
				echo $subjectname[$j][$m];
		}
		echo '</td><td>';
		for($k=0;$k<$num[$j];$k++){
			if($num[$j] >= 2 )
				echo $subdegree[$j][$k].",";
			else
				echo $subdegree[$j][$k];
		}
		echo '</td></tr>';
	}
	echo '</table>';
?>