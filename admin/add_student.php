 <meta charset="UTF-8" />
<?
//$json=json_decode(stripslashes($_POST['data']), true);
///print_r($json);
// we've POST'ed the  javascript "something" object to this php script.
// echo it straight back so we can see it working in our js alert();
//echo "Post data: \n" . var_export($_POST,true) . "\n";
// start a php array which we will return as ajax to our javascript (eventually)
 include_once '../config.inc/config.inc.php';

$type =  $_FILES['img-profile']['type'];
copy($_FILES['img-profile'['tmp_name'],"images/tmp.jpg") or die ("can not copy");
$one = $_POST['provinceroom'];
$two = array();
switch($_POST['chb_degree']){
	case '1' :	$two[0] = $_POST['chb_degree1_1'];break;
	case '2' :	$two[0] = $_POST['chb_degree2_1'];
				$two[1] = $_POST['chb_degree2_2'];break;
	case '3' :	$two[0] = $_POST['chb_degree3_1'];break;
	case '4' :	$two[0] = $_POST['chb_degree4_1'];break;
}
$str = "";
if($_POST['prename'] == 'other'){
	$str =  $_POST['prename_other'];
}
else{
	$str = $_POST['prename'];
}
$tree = array(
	"prname"=> $str,
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
	"level-pri"=>$_POST['level-pri'],
	"level-pri-prov"=>$_POST['ddlProvince'],
	"graduate-pri"=>$_POST['graduate-pri'],
	"gpa-pri"=>$_POST['gpa-pri'],
	"level-second"=>$_POST['level-second'],
	"level-secon-prov"=>$_POST['level-secon-prov'],
	"graduate-secon"=>$_POST['graduate-secon'],
	"gpa-second"=>$_POST['gpa-second'],
	"diploma"=>$_POST['diploma'],
	"branch"=>$_POST['branch'],
	"uni"=>$_POST['uni'],
	"dipl-province"=>$_POST['dipl-province'],
	"graduate-dipl"=>$_POST['graduate-dipl'],
	"gpa-dipl"=>$_POST['gpa-dipl'],
	"bachelor"=>$_POST['bachelor'],
	"disciplines"=>$_POST['disciplines'],
	"university"=>$_POST['university'],
	"bachelor-province"=>$_POST['bachelor-province'],
	"graduate-bache"=>$_POST['graduate-bache'],
	"gpa-bache"=>$_POST['gpa-bache']
);


$seven = array(
	"jop"=>$_POST['jop'],
	"job-lev"=>$_POST['job-lev'],
	"depart"=>$_POST['depart'],
	"organi"=>$_POST['organi'],
	"district"=>$_POST['district_7'],
	"amphur"=>$_POST['amphur_7'],
	"province"=>$_POST['province_7'],
	"salary"=>$_POST['salary'],
	"salary-other"=>$_POST['salary-other'],
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
print("<br/>");
print_r($eleven);
print("<br/>");
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

print("<br/><br/>");
foreach($twelve_one as $i => $val){
	echo $i."=>".$val." ";
}
print("<br/><br/>");
foreach($twelve_two as $i => $val){
	echo $i."=>".$val." ";
}
print("<br/><br/>");
foreach($twelve_tree as $i => $val){
	echo $i."=>".$val." ";
}
print("<br/><br/>");
foreach($twelve_four as $i => $val){
	echo $i."=>".$val." ";
}
print("<br/><br/>");
foreach($twelve_five as $i => $val){
	echo $i."=>".$val." ";
}
print("<br/><br/>");
foreach($twelve_six as $i => $val){
	echo $i."=>".$val." ";
}
print("<br/><br/>");
foreach($twelve_seven as $i => $val){
	echo $i."=>".$val." ";
}
print("<br/><br/>");
foreach($twelve_eight as $i => $val){
	echo $i."=>".$val." ";
}
print("<br/><br/>");
foreach($twelve_nine as $i => $val){
	echo $i."=>".$val." ";
}
print("<br/><br/>");
foreach($twelve_ten as $i => $val){
	echo $i."=>".$val." ";
}
print("<br/><br/>");
foreach($twelve_eleven as $i => $val){
	echo $i."=>".$val." ";
}
print("<br/><br/>");
foreach($twelve_twelve as $i => $val){
	echo $i."=>".$val." ";
}
print("<br/><br/>");
foreach($twelve_thirteen as $i => $val){
	echo $i."=>".$val." ";
}
print("<br/><br/>");
foreach($twelve_fourteen as $i => $val){
	echo $i."=>".$val." ";
}
print("<br/><br/>");
foreach($twelve_fifteen as $i => $val){
	echo $i."=>".$val." ";
}
print("<br/><br/>");
foreach($twelve_sixteen as $i => $val){
	echo $i."=>".$val." ";
}
print("<br/><br/>");

echo $_POST['acadyear'];

$sql = "";
?>
