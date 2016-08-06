<?
session_start();
$usr = $_SESSION['student'];
include_once '../config.inc/config.inc.php';
if(isset($_POST['submit'])) {
	$one = $_POST['provinceroom'];
	$two = array();
	$chb_degree = $_POST['chb_degree'];
	switch($chb_degree){
		case '1' :	$two[0] = $_POST['chb_degree1'];break;
		case '2' :	$two[0] = $_POST['chb_degree2_1'];
						$two[1] = $_POST['chb_degree2_2'];break;
		case '3' :	$two[0] = $_POST['chb_degree3'];break;
		case '4' :	$two[0] = $_POST['chb_degree4'];break;
	}
	$str = ''; 
	if(strcmp($_POST['prename'], 'other') == 0){
		$str =  $_POST['prename_other'];
	}
	else{
		$str = $_POST['prename'];
	}
	$tree = array(
		"prename"=> $str,
		"name"=>$_POST['_name'],
		"lastname"=>$_POST['lastname']
	);

	$birthday = $_POST['birthday']."/".$_POST['mouth']."/".$_POST['year'];
	$four = array(
		"birthday"=>$birthday,
		"age"=>$_POST['age'],
		"idcard"=>$_POST['idcard'],
		"race"=>$_POST['race'],
		"nationality"=>$_POST['nationality'],
		"religion"=>$_POST['religion'],
		"status"=>$_POST['status'],
		"address"=>array("number"=>$_POST['number'],"moo"=>$_POST['moo'], "lane"=>$_POST['lane'], "road"=>$_POST['road'], "district"=>$_POST['district_4'], "amphur"=>$_POST['amphur_4'], "province"=>$_POST['province_4'], "postcode"=>$_POST['postcode']),
		"tel"=>$_POST['tel'],
		"phone"=>$_POST['phone']
	);

	$five = array(
		"workplace"=>$_POST['workplace'],
		"road"=>$_POST['currroad'],
		"district"=>$_POST['district_5'],
		"amphur"=>$_POST['amphur_5'],
		"province"=>$_POST['province_5'],
		"postcode"=>$_POST['currpost'],
		"tel"=>$_POST['currtel'],
		"to"=>$_POST['to'],
		"phone"=>$_POST['currphone'],
		"email"=>$_POST['email']
	);

	$six = array(
		"level_pri"=>$_POST['level-pri'],
		"level_pri_prov"=>$_POST['ddlProvince'],
		"graduate_pri"=>$_POST['graduate-pri'],
		"gpa_pri"=>$_POST['gpa-pri'],
		"level_second"=>$_POST['level-second'],
		"level_secon_prov"=>$_POST['level-secon-prov'],
		"graduate_second"=>$_POST['graduate-second'],
		"gpa_second"=>$_POST['gpa-second'],
		"diploma"=>$_POST['diploma'],
		"branch"=>$_POST['branch'],
		"uni"=>$_POST['uni'],
		"dipl_province"=>$_POST['dipl-province'],
		"graduate_dipl"=>$_POST['graduate-dipl'],
		"gpa_dipl"=>$_POST['gpa-dipl'],
		"bachelor"=>$_POST['bachelor'],
		"disciplines"=>$_POST['disciplines'],
		"university"=>$_POST['university'],
		"bachelor_province"=>$_POST['bachelor-province'],
		"graduate_bache"=>$_POST['graduate-bache'],
		"gpa_bache"=>$_POST['gpa-bache']
	);
	$seven = array(
		"jop"=>$_POST['jop'],
		"job_lev"=>$_POST['job-lev'],
		"depart"=>$_POST['depart'],
		"organi"=>$_POST['organi'],
		"district"=>$_POST['district_7'],
		"amphur"=>$_POST['amphur_7'],
		"province"=>$_POST['province_7'],
		"salary"=>$_POST['salary'],
		"salary_other"=>$_POST['salary-other'],
		"approx"=>$_POST['approx'],
		"sum"=>$_POST['sum'],
		"pay"=>$_POST['pay']
	);

	$exper = $_POST['exper'];
	$capability = $_POST['capability'];
	$workmanship = $_POST['workmanship'];

	$eleven = array(
		"intimate"=>$_POST['intimate'],
		"address"=>$_POST['inti-addr'],
		"district"=>$_POST['district_11'],
		"amphur"=>$_POST['amphur_11'],
		"province"=>$_POST['province_11'],
		"postcode"=>$_POST['inti-pastcode'],
		"tel"=>$_POST['inti-tel'],
		"to"=>$_POST['inti-to'],
		"phone"=>$_POST['inti-phone'],
		"relation"=>$_POST['relation']
	);

	$twelve_one = $_POST['category-en'];
	$twelve_two = $_POST['category-th'];
	$twelve_tree = $_POST['category-hu'];
	$twelve_four = $_POST['category-sc'];
	$twelve_five = $_POST['category-hea'];
	$twelve_six = $_POST['category-in'];
	$twelve_seven = $_POST['category-pro'];
	$twelve_eight = $_POST['category-el-first'];

	$twelve_nine = $_POST['category-el-second'];
	$twelve_ten = $_POST['category-el-third'];
	$twelve_eleven = $_POST['category-el-four'];
	$twelve_twelve = $_POST['category-el-five'];

	$twelve_thirteen = $_POST['category-vo-first'];
	$twelve_fourteen = $_POST['category-vo-second'];
	$twelve_fifteen = $_POST['category-vo-third'];
	$twelve_sixteen = $_POST['category-vo-four'];

	$acadyear =  $_POST['acadyear'];

	$data_tranfer = array();
	$data_tranfer[] = $_POST['category-en'];
	$data_tranfer[] = $_POST['category-th'];
	$data_tranfer[] = $_POST['category-hu'];
	$data_tranfer[] = $_POST['category-sc'];
	$data_tranfer[] = $_POST['category-hea'];
	$data_tranfer[] = $_POST['category-in'];
	$data_tranfer[] = $_POST['category-pro'];

	$data_tranfer[] = $_POST['category-el-first'];
	$data_tranfer[] = $_POST['category-el-second'];
	$data_tranfer[] = $_POST['category-el-third'];
	$data_tranfer[] = $_POST['category-el-four'];
	$data_tranfer[] = $_POST['category-el-five'];

	$data_tranfer[] = $_POST['category-vo-first'];
	$data_tranfer[] = $_POST['category-vo-second'];
	$data_tranfer[] = $_POST['category-vo-third'];
	$data_tranfer[] = $_POST['category-vo-four'];//16

	// init file vars
	$pic  = $_FILES['photo']['name'];
	$target = '../student/uploads/' . basename( $_FILES['photo']['name']);
	$temp_name = $_FILES['photo']['tmp_name'];
	$type = $_FILES["photo"]["type"];

	$str	=	"
				UPDATE `student` SET `password`='password', `images`='$pic', `prov_room`='$one', `prename`='$tree[prename]', `name`='$tree[name]', `lastname`='$tree[lastname]', 
				`birthday`='$birthday', 	`age`='$four[age]', `idcard`='$four[idcard]',`race`='$four[race]',`nationality`='$four[nationality]',
				`religion`='$four[religion]', `status`='$four[status]', `addr`='".$four[address][number]."', `moo`='".$four[address][moo]."', `lane`='".$four[address][lane]."', `road`='".$four[address][road]."', `district`='".$four[address][district]."', `amphur`='".$four[address][amphur]."', `province`='".$four[address][province]."', `postcode`='".$four[address][postcode]."', `tel`='$four[tel]', `phone`='$four[phone]', 
				`workplace`='$five[workplace]', `wp_road`='$five[road]', `wp_district`='$five[district]', `wp_amphur`='$five[amphur]', `wp_prov`='$five[province]', `wp_postcode`='$five[postcode]', `wp_tel`='$five[tel]', `wp_to`='$five[to]', `wp_phone`='$five[phone]', `email`='$five[email]', 
				`primary`='$six[level_pri]', `pri_prov`='$six[level_pri_prov]', `pri_graduate`='$six[graduate_pri]', `pri_gpa`='$six[gpa_pri]', 
				`secondary`='$six[level_second]', `secon_prov`='$six[level_secon_prov]', `secon_graduate`='$six[graduate_second]', `secon_gpa`='$six[gpa_second]', 
				`diploma`='$six[diploma]', `dip_branch`='$six[branch]', `dip_ins`='$six[uni]', `dip_prov`='$six[dipl_province]', `dip_graduate`='$six[graduate_dipl]', `dip_gpa`='$six[gpa_dipl]', 
				`bachelor`='$six[bachelor]', `bach_branch`='$six[disciplines]', `bach_ins`='$six[university]', `bach_prov`='$six[bachelor_province]', `bach_graduate`='$six[graduate_bache]', `bach_gpa`='$six[gpa_bache]', 
				`job`='$seven[jop]', `level`='$seven[job_lev]', `depart`='$seven[depart]', `organi`='$seven[organi]', `job_district`='$seven[district]', `job_amphur`='$seven[amphur]', `job_prov`='$seven[province]', `salary`='$seven[salary]', `sal_other`='$seven[salary_other]', `approx`='$seven[approx]', `sum`='$seven[sum]', `pay`='$seven[pay]', `intinate`='$eleven[intimate]', `in_addr`='$eleven[address]', `in_district`='$eleven[district]', `in_aumphur`='$eleven[amphur]', `in_prov`='$eleven[province]', `in_postcode`='$eleven[postcode]', `in_tel`='$eleven[tel]', `in_to`='$eleven[to]', `in_phone`='$eleven[phone]', `relation`='$eleven[relation]', `acadyear`='$acadyear' WHERE `idcard`='$usr';
				";
	$std_rs = mysql_query($str) or die (mysql_error()." at student") ; //student
	if($std_rs){
		fit_image_file_to_width($temp_name, 72, $type);
		move_uploaded_file($temp_name, $target) ;
		
		//add education background
		$num = 0;
		while($num<count($two)){
			mysql_query("UPDATE `ph`.`eduback` SET `idcard`='$four[idcard]', `radio_val`='$chb_degree' , `radio_text`=' ".$two[$num]."' WHERE `idcard`='$usr'" ) or die (mysql_error()." at education background");
			$num++;
		}
		//add experience
		foreach($exper as $val){
			mysql_query("UPDATE experience SET idcard='$four[idcard]', exper='$val' WHERE idcard='$usr'") or die(mysql_error()." at add experience");
		}

		//add skill
		foreach($capability as $val){
			mysql_query("UPDATE skill SET idcard='$four[idcard]' , _skill='$val'") or die(mysql_error());
		}
		//add workmanship
		foreach($workmanship as $val){
			mysql_query("UPDATE workmanship SET idcard='$four[idcard]' , workings='$val' WHERE idcard='$usr'") or die(mysql_error()."at workmanship");
		}
		//add data tranfer
		$i=0;
		while($i<count($data_tranfer)){
			$sql = "UPDATE `ph`.`rs_tranfer` SET `idcard`='$four[idcard]' , `subjectID`='".$data_tranfer[$i][0]."' , `subject_request`='".$data_tranfer[$i][1]." ".$data_tranfer[$i][2]."', `degree_request`='".$data_tranfer[$i][3]."', `grade`='".$data_tranfer[$i][4]."', `subject_tranfer`='".$data_tranfer[$i][5]."', `degree_tranfer`='".$data_tranfer[$i][6]."', `grade_tranfer`='".$data_tranfer[$i][7]."' WHERE `idcard`='$usr'";
			mysql_query($sql) or die (mysql_error()." at data tranfer");
			$i++;
		}
	}
	mysql_close();
}

//$json=json_decode(stripslashes($_POST['data']), true);
///print_r($json);
// we've POST'ed the  javascript "something" object to this php script.
// echo it straight back so we can see it working in our js alert();
//echo "Post data: \n" . var_export($_POST,true) . "\n";
// start a php array which we will return as ajax to our javascript (eventually)
// resizes an image to fit a given width in pixels.
// works with BMP, PNG, JPEG, and GIF
// $file is overwritten
function fit_image_file_to_width($file, $w, $mime = 'image/jpeg') {
    list($width, $height) = getimagesize($file);
    $newwidth = $w;
    $newheight = $w * $height / $width;

    switch ($mime) {
        case 'image/jpeg':
            $src = imagecreatefromjpeg($file);
            break;
        case 'image/png';
            $src = imagecreatefrompng($file);
            break;
        case 'image/bmp';
            $src = imagecreatefromwbmp($file);
            break;
        case 'image/gif';
            $src = imagecreatefromgif($file);
            break;
    }

    $dst = imagecreatetruecolor($newwidth, $newheight);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

    switch ($mime) {
        case 'image/jpeg':
            imagejpeg($dst, $file);
            break;
        case 'image/png';
            imagealphablending($dst, false);
            imagesavealpha($dst, true);
            imagepng($dst, $file);
            break;
        case 'image/bmp';
            imagewbmp($dst, $file);
            break;
        case 'image/gif';
            imagegif($dst, $file);
            break;
    }

    imagedestroy($dst);
}
?>
<script langquage='javascript'>
	window.location="../index.php";
</script>
