<?
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
	$std_day = $_POST['birthday'];
	$std_month = $_POST['mount'];
	$std_year = $_POST['year'];
	$password = '';
	$birthday = $std_day." ".$std_month." ".$std_year;
	foreach($month as $i => $val){
		if($val==$std_month){$password = $std_day.$i.$std_year;}
	}
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
				INSERT INTO `student` VALUES ('password', '$pic', '$one', '$tree[prename]', '$tree[name]', '$tree[lastname]', 
				'$birthday', 	'$four[age]', '$four[idcard]','$four[race]','$four[nationality]',
				'$four[religion]', '$four[status]', '".$four[address][number]."', '".$four[address][moo]."', '".$four[address][lane]."', '".$four[address][road]."', '".$four[address][district]."', '".$four[address][amphur]."', '".$four[address][province]."', '".$four[address][postcode]."', '$four[tel]', '$four[phone]', 
				'$five[workplace]', '$five[road]', '$five[district]', '$five[amphur]', '$five[province]', '$five[postcode]', '$five[tel]', '$five[to]', '$five[phone]', '$five[email]', 
				'$six[level_pri]', '$six[level_pri_prov]', '$six[graduate_pri]', '$six[gpa_pri]', 
				'$six[level_second]', '$six[level_secon_prov]', '$six[graduate_second]', '$six[gpa_second]', 
				'$six[diploma]', '$six[branch]', '$six[uni]', '$six[dipl_province]', '$six[graduate_dipl]', '$six[gpa_dipl]', 
				'$six[bachelor]', '$six[disciplines]', '$six[university]', '$six[bachelor_province]', '$six[graduate_bache]', '$six[gpa_bache]', 
				'$seven[jop]', '$seven[job_lev]', '$seven[depart]', '$seven[organi]', '$seven[district]', '$seven[amphur]', '$seven[province]', '$seven[salary]', '$seven[salary_other]', '$seven[approx]', '$seven[sum]', '$seven[pay]', '$eleven[intimate]', '$eleven[address]', '$eleven[district]', '$eleven[amphur]', '$eleven[province]', '$eleven[postcode]', '$eleven[tel]', '$eleven[to]', '$eleven[phone]', '$eleven[relation]', '$acadyear');
				";
	$std_rs = mysql_query($str) or die (mysql_error().'at std') ; //student
	if($std_rs){
		fit_image_file_to_width($temp_name, 72, $type);
		move_uploaded_file($temp_name, $target) ;
		//add education background
		$num = 0;
		while($num<count($two)){
			mysql_query("INSERT INTO `ph`.`eduback` (`edubackID` , `idcard` , `radio_val` , `radio_text`) VALUES (NULL , '$four[idcard]', '$chb_degree', '".$two[$num]."')") or die (mysql_error());
			$num++;
		}
		//add experience
		foreach($exper as $val){
			mysql_query("INSERT INTO experience(idcard ,exper) VALUES('$four[idcard]', '$val')") or die(mysql_error());
		}

		//add skill
		foreach($capability as $val){
			mysql_query("INSERT INTO skill(idcard ,_skill) VALUES('$four[idcard]', '$val')") or die(mysql_error());
		}
		//add workmanship
		foreach($workmanship as $val){
			mysql_query("INSERT INTO workmanship(idcard ,workings) VALUES('$four[idcard]', '$val')") or die(mysql_error());
		}
		//add data tranfer
		$i=0;
		while($i<count($data_tranfer)){
			$sql = "INSERT INTO `ph`.`rs_tranfer` (`rsID` ,`idcard` ,`subjectID` ,`subject_request` ,`degree_request`, `grade` ,`subject_tranfer` , `degree_tranfer`, `grade_tranfer`)";
			$sql .= " VALUES (NULL , '$four[idcard]', '".$data_tranfer[$i][0]."', '".$data_tranfer[$i][1]." ".$data_tranfer[$i][2]."', '".$data_tranfer[$i][3]."', '".$data_tranfer[$i][4]."', '".$data_tranfer[$i][5]."', '".$data_tranfer[$i][6]."', '".$data_tranfer[$i][7]."');";
			mysql_query($sql) or die (mysql_error());
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
