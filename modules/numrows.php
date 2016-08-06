<?
	include '../config.inc/config.inc.php';

	if(isset($_REQUEST['is_ajax']) && $_REQUEST['is_ajax']){
		
		$sql = "SELECT * FROM subname ";
		$sql .= "WHERE subjectID='".$_REQUEST['subID']."'";

		$rs = mysql_query($sql) or die (mysql_error());
		$num_rows = mysql_num_rows($rs);
		
		echo $num_rows;
	}
?>