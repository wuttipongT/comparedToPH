<meta charset="UTF-8" />
<?
	require_once '../config.inc/config.inc.php';
	$rs = mysql_query("SELECT byteCode, idcard FROM subjects JOIN rs_tranfer ON subID=subjectID JOIN category ON categoryID=dest WHERE categoryID='1'") or die (mysql_error());
	while($data = mysql_fetch_assoc($rs)){
		echo $data['byteCode'].' '.$data['idcard']."\n";
	}
	echo mysql_num_rows($rs);
?>