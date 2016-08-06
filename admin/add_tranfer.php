<?
	include_once '../config.inc/config.inc.php';
	if($_POST['is_ajax'] == 1){
		mysql_query("INSERT INTO subjects(type, categoryID) VALUES (1, ".$_POST['tran_category'].")") or die (mysql_error());
		
		$rs = mysql_query("SELECT subID FROM subjects ORDER BY subID DESC LIMIT 1") or die(mysql_error());
		$sub = mysql_fetch_array($rs);

		mysql_query("INSERT INTO subcode(subjectID, code, degree) VALUES ('".$sub['subID']."','".$_POST['tran_subid']."', '".$_POST['tran_degree']."')") or die (mysql_error());
		
		$sql = "INSERT INTO subname(subjectID, name) VALUES(".$sub['subID'].",'".$_POST['tran_subname']."')";
		mysql_query($sql) or die(mysql_error());
	}
?>