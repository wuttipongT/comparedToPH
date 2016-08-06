<?
	session_start();
	//DISTINCT
	//GROUP BY field,filed
	$usr = $_SESSION['student'];
	require_once '../config.inc/config.inc.php';
	$result = mysql_query("SELECT * FROM student WHERE idcard='".$usr."' ") or die (mysql_error());
	$arr_std = array();
	while($data = mysql_fetch_assoc($result)){
		$arr_std[] = $data;
		
	}
	$arr2_std = array();
	$rs = mysql_query("SELECT exper FROM experience WHERE idcard='".$usr."'");
	while($data = mysql_fetch_assoc($rs)){
		$arr2_std[] = $data['exper'];
	}
	$arr3_std = array();
	$rs = mysql_query("SELECT _skill FROM skill WHERE idcard='".$usr."'");
	while($data = mysql_fetch_assoc($rs)){
		$arr3_std[] = $data['_skill'];
	}
	$arr4_std = array();
	$rs = mysql_query("SELECT workings FROM workmanship WHERE idcard='".$usr."'");
	while($data = mysql_fetch_assoc($rs)){
		$arr4_std[] = $data['workings'];
	}
	$arr5_std = array();
	$rs = mysql_query("SELECT subjectID, subject_request, degree_request, grade, subject_tranfer, degree_tranfer, grade_tranfer FROM rs_tranfer WHERE idcard='".$usr."'");
	while($data = mysql_fetch_assoc($rs)){
		$arr5_std[] = $data;
	}
	$arr6_std = array();
	$rs = mysql_query("SELECT radio_val, radio_text FROM eduback WHERE idcard='".$usr."'");
	while($data = mysql_fetch_assoc($rs)){
		$arr6_std[] = $data;
	}
	$arr2 = array(
		'profile'=>$arr_std,
		'expers'=>$arr2_std,
		'skill'=>$arr3_std,
		'workings'=>$arr4_std,
		'tranfer'=>$arr5_std,
		'eduback'=>$arr6_std
	);
	//print_r($arr5_std);
	echo json_encode($arr2);
?>