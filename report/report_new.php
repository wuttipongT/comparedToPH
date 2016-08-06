<?
	session_start();
	ini_set("max_execution_time",300);
	require_once '../config.inc/config.inc.php';
	$identify =  $_SESSION['student'];
	require_once 'PHPWord.php';
	$PHPWord = new PHPWord();
	$document = $PHPWord->loadTemplate('template.docx');
	$val = data($identify);
	
	$provRoom = $val['prov_room'];
	if($provRoom==0){
		$document->setValue('0', '/');
		$document->setValue('1', ' ');
		$document->setValue('2', ' ');
		$document->setValue('3', ' ');
	}else if($provRoom==1){
		$document->setValue('0', ' ');
		$document->setValue('1', '/');
		$document->setValue('2', ' ');
		$document->setValue('3', ' ');
	}else if($provRoom==2){
		$document->setValue('0', ' ');
		$document->setValue('1', ' ');
		$document->setValue('2', '/');
		$document->setValue('3', ' ');
	}
	else if($provRoom==3){
		$document->setValue('0', ' ');
		$document->setValue('1', ' ');
		$document->setValue('2', ' ');
		$document->setValue('3', '/');
	}
	$key = $val['radio_val'];
	if($key == 1){
		$document->setValue('4', '/');
		$document->setValue('5', ' ');
		$document->setValue('6', ' ');
		$document->setValue('7', ' ');

		$document->setValue('A', $val['radio_text']);
		$document->setValue('B', ' ');
		$document->setValue('C', ' ');
		$document->setValue('D', ' ');
		$document->setValue('E', ' ');
	}else if($key == 2){
		$document->setValue('4', ' ');
		$document->setValue('5', '/');
		$document->setValue('6', ' ');
		$document->setValue('7', ' ');
		$arr = array();
		$rs = mysql_query("SELECT radio_text FROM eduback WHERE idcard = '".$identify."' ") or die (mysql_error());
		while($data = mysql_fetch_assoc($rs)){
			$arr[] = $data;
		}
		$document->setValue('B', $arr['0']['radio_text']);
		$document->setValue('C', $arr['1']['radio_text']);

		$document->setValue('A', ' ');
		$document->setValue('D', ' ');
		$document->setValue('E', ' ');
	}else if($key == 3){
		$document->setValue('4', ' ');
		$document->setValue('5', ' ');
		$document->setValue('6', '/');
		$document->setValue('7', ' ');
		
		$document->setValue('A', ' ');
		$document->setValue('B', ' ');
		$document->setValue('C', ' ');
		$document->setValue('D', $val['radio_text']);
		$document->setValue('E', ' ');
	}else if($key == 4){
		$document->setValue('4', ' ');
		$document->setValue('5', ' ');
		$document->setValue('6', ' ');
		$document->setValue('7', '/');
		
		$document->setValue('A', ' ');
		$document->setValue('B', ' ');
		$document->setValue('C', ' ');
		$document->setValue('D', ' ');
		$document->setValue('E', $val['radio_text']);
	}
	
	$document->setValue('acadyear', $val['acadyear']);
	$document->setValue('name', $val['prename']. $val['name']);
	$document->setValue('lastname', $val['lastname']);
    list($day, $month, $year) = explode("/",$val['birthday']);
	$document->setValue('lastname', $val['lastname']);
	$document->setValue('day', $day);
	$document->setValue('month', $month);
	$document->setValue('year', $year);
	$document->setValue('age', $val['age']);
	$document->setValue('idcard', $val['idcard']);
	$document->setValue('race', $val['race']);
	$document->setValue('nationality', $val['nationality']);
	$document->setValue('religion', $val['religion']);
	$document->setValue('status', $val['status']);
	$document->setValue('addr', $val['addr']);
	$document->setValue('moo', $val['moo']);
	$document->setValue('lane', $val['lane']);
	$document->setValue('road', $val['road']);
	$district = dataAddr("DISTRICT_NAME", "district", "DISTRICT_ID", $val['district']);
	$document->setValue('district', $district['DISTRICT_NAME']);
	$amphur = dataAddr("AMPHUR_NAME", "amphur", "AMPHUR_ID", $val['amphur']);
	$document->setValue('amphur', $amphur['AMPHUR_NAME']);
	$province = dataAddr("PROVINCE_NAME", "province", "PROVINCE_ID", $val['province']);
	$document->setValue('province', $province['PROVINCE_NAME']);
	$document->setValue('postcode', $val['postcode']);
	$document->setValue('tel', $val['tel']);
	$document->setValue('phone', $val['phone']);
	$document->setValue('workplace', $val['workplace']);
	$document->setValue('wpRoad', $val['wp_road']);
	$wpDistrict = dataAddr("DISTRICT_NAME", "district", "DISTRICT_ID", $val['wp_district']);
	$document->setValue('wpDist', $wpDistrict['DISTRICT_NAME']);
	$wpAmphur = dataAddr("AMPHUR_NAME", "amphur", "AMPHUR_ID", $val['wp_amphur']);
	$document->setValue('wpAmph', $wpAmphur['AMPHUR_NAME']);
	$wpProvince = dataAddr("PROVINCE_NAME", "province", "PROVINCE_ID", $val['wp_prov']);
	$document->setValue('wpProv', $wpProvince['PROVINCE_NAME']);
	$document->setValue('wpost', $val['wp_postcode']);
	$document->setValue('wpTel', $val['wp_tel']);
	$document->setValue('wpTo', $val['wp_to']);
	$document->setValue('wpPhone', $val['wp_phone']);
	$document->setValue('email', $val['email']);
	$document->setValue('pri', $val['primary']);
	$priProv = dataAddr("PROVINCE_NAME", "province", "PROVINCE_ID", $val['pri_prov']);
	$document->setValue('priProv', $priProv['PROVINCE_NAME']);
	$document->setValue('priGra', $val['pri_graduate']);
	$document->setValue('priGPA', $val['pri_gpa']);
	$document->setValue('second', $val['secondary']);
	$secProv = dataAddr("PROVINCE_NAME", "province", "PROVINCE_ID", $val['secon_prov']);
	$document->setValue('secProv', $secProv['PROVINCE_NAME']);
	$document->setValue('secGra', $val['secon_graduate']);
	$document->setValue('secGPA', $val['secon_gpa']);
	$document->setValue('diploma', $val['diploma']);
	$document->setValue('branch', $val['dip_branch']);
	$document->setValue('ins', $val['dip_ins']);
	$dipProv = dataAddr("PROVINCE_NAME", "province", "PROVINCE_ID", $val['dip_prov']);
	$document->setValue('dipProv', $dipProv['PROVINCE_NAME']);
	$document->setValue('dipGra', $val['dip_graduate']);
	$document->setValue('dipGPA', $val['dip_gpa']);
	$document->setValue('bachelor', $val['bachelor']);
	$document->setValue('disciplines', $val['bach_branch']);
	$document->setValue('uni', $val['bach_ins']);
	$bachProv = dataAddr("PROVINCE_NAME", "province", "PROVINCE_ID", $val['bach_prov']);
	$document->setValue('bacheProv', $bachProv['PROVINCE_NAME']);
	$document->setValue('bacheGra', $val['bach_graduate']);
	$document->setValue('bacheGPA', $val['bach_gpa']);
	$document->setValue('job', $val['job']);
	$document->setValue('level', $val['level']);
	$document->setValue('depart', $val['depart']);
	$document->setValue('organi', $val['organi']);
	$jobDistrict = dataAddr("DISTRICT_NAME", "district", "DISTRICT_ID", $val['job_district']);
	$document->setValue('jobDist', $jobDistrict['DISTRICT_NAME']);
	$jobAmphur = dataAddr("AMPHUR_NAME", "amphur", "AMPHUR_ID", $val['job_amphur']);
	$document->setValue('jobAmph', $jobAmphur['AMPHUR_NAME']);
	$jobProvince = dataAddr("PROVINCE_NAME", "province", "PROVINCE_ID", $val['job_prov']);
	$document->setValue('jobProv', $jobProvince['PROVINCE_NAME']);
	$document->setValue('salary', $val['salary']);
	$document->setValue('salOther', $val['sal_other']);
	$document->setValue('approx', $val['approx']);
	$document->setValue('sum', $val['sum']);
	$document->setValue('pay', $val['pay']);

	$exper = dataExper($identify);
	$document->setValue('exper1', $exper[0]['exper']);
	$document->setValue('exper2', $exper[1]['exper']);
	$document->setValue('exper3', $exper[2]['exper']);
	$document->setValue('exper4', $exper[3]['exper']);
	$document->setValue('exper5', $exper[4]['exper']);
	$skill = dataSkill($identify);
	$document->setValue('skill1', $skill[0]['_skill']);
	$document->setValue('skill2', $skill[1]['_skill']);
	$document->setValue('skill3', $skill[2]['_skill']);
	$document->setValue('skill4', $skill[3]['_skill']);
	$document->setValue('skill5', $skill[4]['_skill']);
	$work = dataWork($identify);
	$document->setValue('work1', $work[0]['workings']);
	$document->setValue('work2', $work[1]['workings']);
	$document->setValue('work3', $work[2]['workings']);
	$document->setValue('work4', $work[3]['workings']);
	$document->setValue('work5', $work[4]['workings']);
	$document->setValue('intinate', $val['intinate']);
	$document->setValue('inaddr', $val['in_addr']);
	$inDistrict = dataAddr("DISTRICT_NAME", "district", "DISTRICT_ID", $val['in_district']);
	$document->setValue('indistrict',$inDistrict['DISTRICT_NAME'] );
	$inAmphur = dataAddr("AMPHUR_NAME", "amphur", "AMPHUR_ID", $val['in_amphur']);
	$document->setValue('inamphur', $inAmphur['AMPHUR_NAME']);
	$inProvince = dataAddr("PROVINCE_NAME", "province", "PROVINCE_ID", $val['in_prov']);
	$document->setValue('inprovinc', $inProvince['PROVINCE_NAME']);
	$document->setValue('inpostcode',$val['in_postcode']);
	$document->setValue('intel', $val['in_tel']);
	$document->setValue('into', $val['in_to']);
	$document->setValue('inphone', $val['in_phone']);
	$document->setValue('relation', $val['relation']);

	$tranfer = dataTranfer($identify);
	$document->setValue('en', $tranfer[0]['subject_request']);
	$document->setValue('end', $tranfer[0]['degree_request']);
	$document->setValue('eng', $tranfer[0]['grade']);
	$document->setValue('ent', $tranfer[0]['subject_tranfer']);
	$document->setValue('endt', $tranfer[0]['degree_tranfer']);
	$document->setValue('engt', $tranfer[0]['grade_tranfer']);

	$document->setValue('th', $tranfer[1]['subject_request']);
	$document->setValue('thd', $tranfer[1]['degree_request']);
	$document->setValue('thg', $tranfer[1]['grade']);
	$document->setValue('tht', $tranfer[1]['subject_tranfer']);
	$document->setValue('thdt', $tranfer[1]['degree_tranfer']);
	$document->setValue('thgt', $tranfer[1]['grade_tranfer']);
	
	$document->setValue('hu', $tranfer[2]['subject_request']);
	$document->setValue('hud', $tranfer[2]['degree_request']);
	$document->setValue('hug', $tranfer[2]['grade']);
	$document->setValue('hut', $tranfer[2]['subject_tranfer']);
	$document->setValue('hudt', $tranfer[2]['degree_tranfer']);
	$document->setValue('hugt', $tranfer[2]['grade_tranfer']);

	$document->setValue('sc', $tranfer[3]['subject_request']);
	$document->setValue('scd', $tranfer[3]['degree_request']);
	$document->setValue('scg', $tranfer[3]['grade']);
	$document->setValue('sct', $tranfer[3]['subject_tranfer']);
	$document->setValue('scdt', $tranfer[3]['degree_tranfer']);
	$document->setValue('scgt', $tranfer[3]['grade_tranfer']);

	$document->setValue('hea', $tranfer[4]['subject_request']);
	$document->setValue('head', $tranfer[4]['degree_request']);
	$document->setValue('heag', $tranfer[4]['grade']);
	$document->setValue('heat', $tranfer[4]['subject_tranfer']);
	$document->setValue('headt', $tranfer[4]['degree_tranfer']);
	$document->setValue('heagt', $tranfer[4]['grade_tranfer']);

	$document->setValue('in', $tranfer[5]['subject_request']);
	$document->setValue('ind', $tranfer[5]['degree_request']);
	$document->setValue('ing', $tranfer[5]['grade']);
	$document->setValue('int', $tranfer[5]['subject_tranfer']);
	$document->setValue('indt', $tranfer[5]['degree_tranfer']);
	$document->setValue('ingt', $tranfer[5]['grade_tranfer']);

	$document->setValue('pro', $tranfer[6]['subject_request']);
	$document->setValue('prod', $tranfer[6]['degree_request']);
	$document->setValue('prog', $tranfer[6]['grade']);
	$document->setValue('prot', $tranfer[6]['subject_tranfer']);
	$document->setValue('prodt', $tranfer[6]['degree_tranfer']);
	$document->setValue('progt', $tranfer[6]['grade_tranfer']);

	$document->setValue('el1', $tranfer[7]['subject_request']);
	$document->setValue('el1d', $tranfer[7]['degree_request']);
	$document->setValue('el1g', $tranfer[7]['grade']);
	$document->setValue('el1t', $tranfer[7]['subject_tranfer']);
	$document->setValue('el1dt', $tranfer[7]['degree_tranfer']);
	$document->setValue('el1gt', $tranfer[7]['grade_tranfer']);

	$document->setValue('el2', $tranfer[8]['subject_request']);
	$document->setValue('el2d', $tranfer[8]['degree_request']);
	$document->setValue('el2g', $tranfer[8]['grade']);
	$document->setValue('el2t', $tranfer[8]['subject_tranfer']);
	$document->setValue('el2dt', $tranfer[8]['degree_tranfer']);
	$document->setValue('el2gt', $tranfer[8]['grade_tranfer']);

	$document->setValue('el3', $tranfer[9]['subject_request']);
	$document->setValue('el3d', $tranfer[9]['degree_request']);
	$document->setValue('el3g', $tranfer[9]['grade']);
	$document->setValue('el3t', $tranfer[9]['subject_tranfer']);
	$document->setValue('el3dt', $tranfer[9]['degree_tranfer']);
	$document->setValue('el3gt', $tranfer[9]['grade_tranfer']);

	$document->setValue('el4', $tranfer[10]['subject_request']);
	$document->setValue('el4d', $tranfer[10]['degree_request']);
	$document->setValue('el4g', $tranfer[10]['grade']);
	$document->setValue('el4t', $tranfer[10]['subject_tranfer']);
	$document->setValue('el4dt', $tranfer[10]['degree_tranfer']);
	$document->setValue('el4gt', $tranfer[10]['grade_tranfer']);

	$document->setValue('el5', $tranfer[11]['subject_request']);
	$document->setValue('el5d', $tranfer[11]['degree_request']);
	$document->setValue('el5g', $tranfer[11]['grade']);
	$document->setValue('el5t', $tranfer[11]['subject_tranfer']);
	$document->setValue('el5dt', $tranfer[11]['degree_tranfer']);
	$document->setValue('el5gt', $tranfer[11]['grade_tranfer']);

	$document->setValue('vo1', $tranfer[12]['subject_request']);
	$document->setValue('vo1d', $tranfer[12]['degree_request']);
	$document->setValue('vo1g', $tranfer[12]['grade']);
	$document->setValue('vo1t', $tranfer[12]['subject_tranfer']);
	$document->setValue('vo1dt', $tranfer[12]['degree_tranfer']);
	$document->setValue('vo1gt', $tranfer[12]['grade_tranfer']);

	$document->setValue('vo2', $tranfer[13]['subject_request']);
	$document->setValue('vo2d', $tranfer[13]['degree_request']);
	$document->setValue('vo2g', $tranfer[13]['grade']);
	$document->setValue('vo2t', $tranfer[13]['subject_tranfer']);
	$document->setValue('vo2dt', $tranfer[13]['degree_tranfer']);
	$document->setValue('vo2gt', $tranfer[13]['grade_tranfer']);

	$document->setValue('vo3', $tranfer[14]['subject_request']);
	$document->setValue('vo3d', $tranfer[14]['degree_request']);
	$document->setValue('vo3g', $tranfer[14]['grade']);
	$document->setValue('vo3t', $tranfer[14]['subject_tranfer']);
	$document->setValue('vo3dt', $tranfer[14]['degree_tranfer']);
	$document->setValue('vo3gt', $tranfer[14]['grade_tranfer']);

	$document->setValue('vo4', $tranfer[15]['subject_request']);
	$document->setValue('vo4d', $tranfer[15]['degree_request']);
	$document->setValue('vo4g', $tranfer[15]['grade']);
	$document->setValue('vo4t', $tranfer[15]['subject_tranfer']);
	$document->setValue('vo4dt', $tranfer[15]['degree_tranfer']);
	$document->setValue('vo4gt', $tranfer[15]['grade_tranfer']);

	$document->save('MyDoc/'.$identify.'.docx');

function data($key){
	$sql = "SELECT student.*, eduback.* FROM student ";
	$sql .= "LEFT JOIN eduback ON(student.idcard=eduback.idcard) ";
	$sql .= "WHERE student.idcard = '".$key."' ";
	$arr = array();
	$rs = mysql_query($sql) or die (mysql_error());
	while($data = mysql_fetch_assoc($rs)){
		 return $arr[] = $data;
	}
	//print_r($arr);
}
function dataExper($key){
	$sql = "SELECT exper FROM experience ";
	$sql .= "WHERE idcard = '".$key."' ";
	$arr = array();
	$rs = mysql_query($sql) or die (mysql_error());
	while($data = mysql_fetch_assoc($rs)){
		$arr[] = $data;
	}
	return $arr;
}
function dataSkill($key){
	$sql = "SELECT _skill FROM skill ";
	$sql .= "WHERE idcard = '".$key."' ";
	$arr = array();
	$rs = mysql_query($sql) or die (mysql_error());
	while($data = mysql_fetch_assoc($rs)){
		$arr[] = $data;
	}
	return $arr;
}
function dataWork($key){
	$sql = "SELECT workings FROM workmanship ";
	$sql .= "WHERE idcard = '".$key."' ";
	$arr = array();
	$rs = mysql_query($sql) or die (mysql_error());
	while($data = mysql_fetch_assoc($rs)){
		$arr[] = $data;
	}
	return $arr;
}
function dataTranfer($key){
	$sql = "SELECT subject_request, degree_request, grade, subject_tranfer, degree_tranfer, grade_tranfer FROM rs_tranfer ";
	$sql .= "WHERE idcard = '".$key."' ";
	$arr = array();
	$rs = mysql_query($sql) or die (mysql_error());
	while($data = mysql_fetch_assoc($rs)){
		$arr[] = $data;
	}
	return $arr;
}
function dataAddr($field, $table,$condition,$id){
		require_once '../config.inc/config.inc.php';
		$rs = mysql_query("SELECT $field FROM $table WHERE $condition='$id' LIMIT 1 ") or die (mysql_error());
		return mysql_fetch_assoc($rs);
}
echo $identify;
session_write_close();
?>
