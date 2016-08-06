<?
	include_once '../config.inc/config.inc.php';
	if($_POST['is_ajax'] == 1){
		$resullt_subjects = mysql_query("INSERT INTO subjects (categoryID) VALUES('".$_POST['subCategory']."')") or die (mysql_error());
		$amount = mysql_query("SELECT subID FROM subjects ORDER BY subID DESC LIMIT 1");
		$count = mysql_fetch_array($amount);
		$rs_subcode;
		foreach($_POST['subName'] as $data){
			$sql = "INSERT INTO subname (subjectID , name) VALUES (".$count['subID'].", '$data')";
			mysql_query($sql) or die (mysql_error());
		}

		$subID = $_POST['subID'];
		$degree = $_POST['subDegree'];
		$rs_subname;
		for($i=0;$i<count($subID);$i++){
			mysql_query("INSERT INTO subcode (subjectID , code, degree) VALUES(".$count['subID'].", '".$subID[$i]."', '".$degree[$i]."')") or die (mysql_error());
		}
			mysql_query("INSERT INTO tranfer (subID, tranID) VALUES (".$count['subID'].", '".$_POST['tranID']."')");
	}
?>

