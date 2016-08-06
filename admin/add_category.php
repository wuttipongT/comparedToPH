<?
	include_once '../config.inc/config.inc.php';
	if($_POST['is_ajax']==1){
		$rs = mysql_query("INSERT INTO category(byteCode) VALUES('".$_POST['category']."')");
		echo "ok";
	}
//if(!$rs){echo -1}else{echo "บันทึกข้อมูลเรียบร้อย";}

?>