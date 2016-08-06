<?
	include_once '../config.inc/config.inc.php';
	
	$subID = $_REQUEST['subID'];
	$tranID = (string) NULL;

	$subname = array();
	$sub_tranfer = array();
	/*
	$sql = "SELECT subjectID FROM subcode ";
	$sql .= "WHERE subcode.subjectID='".$_REQUEST['subID']."' ";
//RAPA009
	$rs = mysql_query($sql) or die (mysql_error());
	while($raw = mysql_fetch_assoc($rs)){
		$subID = $raw['subjectID'];
	}
*/
	//echo $subID."<br/>";
	$sql = "SELECT name FROM subname WHERE subjectID = '$subID'";
	$rs = mysql_query($sql);
	while($raw = mysql_fetch_assoc($rs)){
		$subname[] = $raw['name'];
	}
	//print("<br/>");
	
	//print("<br/>");
	$sql = "SELECT tranfer.tranID FROM tranfer ";
	$sql .= "INNER JOIN subcode ON subcode.subjectID = tranfer.subID ";
	$sql .= "WHERE subcode.subjectID = '$subID' ";
	$rs = mysql_query($sql);
	while($raw = mysql_fetch_assoc($rs)){
		$tranID = $raw['tranID'];
	}
	//echo $tranID;


	//-----------------tranfer

	$sql = "SELECT code, degree FROM subcode WHERE subjectID = '$tranID'";
	$rs = mysql_query($sql);
	while($raw = mysql_fetch_assoc($rs)){
		$sub_tranfer[] = $raw['code']."/".$raw['degree'];
	}
	$sql = "SELECT name FROM subname WHERE subjectID = '$tranID'";
	$rs = mysql_query($sql);
	$subname_tranfer = array();
	while($raw = mysql_fetch_assoc($rs)){
		$subname_tranfer[] = $raw['name'];
	}
	
	//print("<br/>");
	$data_encode = array(
		"Subname" => $subname,
		"Tranfer" =>$sub_tranfer,
		"NameTran" =>$subname_tranfer
	);

	echo json_encode($data_encode);
/*
	$_sql = "SELECT subcode.code, subname.name, subdegree.number FROM subjects ";
	$_sql .= "LEFT JOIN subcode ON (subcode.subjectID=subjects.subID) ";
	$_sql .= "LEFT JOIN subname ON (subname.subjectID=subjects.subID) ";
	$_sql .= "LEFT JOIN subdegree ON (subdegree.subjectID=subjects.subID) ";
	$_sql .= "WHERE subjects.subID='".$data_first['tranID']."'";
	$source = mysql_query($_sql);
	while($rw = mysql_fetch_assoc($source)){
		$data_second = array(
								"subID_tranfer"=>$rw['code'],
								"subName_tranfer"=>$rw['name'],
								"subDegree_tranfer"=>$rw['number']
								);
	}*/
	//print_r ($data_encode = array_merge(array_splice($data_first,$data_first,2,3), $data_second));
	//echo json_encode($data_encode);
?>