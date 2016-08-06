<?
	include_once '../config.inc/config.inc.php';
	$sql = "SELECT subname.subjectID, subname.name FROM subname ";
	$sql .= "INNER JOIN subjects ON (subname.subjectID=subjects.subID) ";
	$sql .= "WHERE subjects.type = 1";
	$rs = mysql_query($sql);
	$encode = array();
	while($subjects = mysql_fetch_assoc($rs)){
		$str = explode("(",$subjects['name']);
		$encode[] = $subjects['subjectID']."/".$str[0];
	};
	echo json_encode($encode);
?>