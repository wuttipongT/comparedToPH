<?
	require_once '../config.inc/config.inc.php';
	$is_ajax = $_REQUEST['is_ajax'];
	if($is_ajax == 0){
		$rs = mysql_query("SELECT * FROM subjects") or die(mysql_error());
		$num = mysql_num_rows($rs);
		echo $num;
	}else if($is_ajax == 1){
		$acadyear = $_REQUEST['acadyear'];
		$rs = mysql_query("SELECT * FROM student WHERE acadyear='".$acadyear."'") or die(mysql_error());
		$num = mysql_num_rows($rs);
		echo $num;
	}else if($is_ajax == 2){
		$rs = mysql_query("SELECT * FROM subjects WHERE type='1'") or die(mysql_error());
		$num = mysql_num_rows($rs);
		echo $num;
	}
	
?>