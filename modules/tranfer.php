<?
	include_once '../config.inc/config.inc.php';
	
	$data_first = array();
	$data_second = array();
	$sql = "SELECT subcode.code, subcode.degree, subname.name, tranfer.tranID FROM subjects ";
	$sql .= "LEFT JOIN subcode ON (subjects.subID = subcode.subjectID) ";
	$sql .= "LEFT JOIN subname ON (subjects.subID = subname.subjectID) ";
	$sql .= "LEFT JOIN tranfer ON (tranfer.subID = subjects.subID) ";
	$sql .= "WHERE subcode.subjectID='".$_REQUEST['subID']."' ";
	$rs = mysql_query($sql) or die (mysql_error());
	while($raw = mysql_fetch_assoc($rs)){
		$data_first = array(
							//"subID"=>$raw['code'],
							"subName"=>$raw['name'],
							//"degree_first"=>$raw['degree'],
							"tranID"=>$raw['tranID']
							);
	}

	$_sql = "SELECT subcode.code, subcode.degree, subname.name FROM subjects ";
	$_sql .= "LEFT JOIN subcode ON (subcode.subjectID=subjects.subID) ";
	$_sql .= "LEFT JOIN subname ON (subname.subjectID=subjects.subID) ";
	$_sql .= "WHERE subjects.subID='".$data_first['tranID']."'";
	$source = mysql_query($_sql);
	while($rw = mysql_fetch_assoc($source)){
		$data_second = array(
								"subID_tranfer"=>$rw['code'],
								"subName_tranfer"=>$rw['name'],
								"subDegree_tranfer"=>$rw['degree']
								);
	}
	$data_encode = array_merge(array_splice($data_first,0), $data_second);
	echo json_encode($data_encode);
?>