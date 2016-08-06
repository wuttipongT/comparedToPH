<?php
	define("HOST","localhost");
	define("USER","root");
	define("PASS","password");
	define('DB', 'PH');
	$con = mysql_connect(HOST,USER,PASS) or die(mysql_error());
	$db = mysql_select_db(DB);
	//mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci';");
	mysql_set_charset('utf8');
	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
	
	$title = "
		ฟอร์มสมัครเข้าศึกษาต่อระดับปริญญาตรี หลักสูตรสาธารณสุขศาสตร์บัณฑิต (เทียบเข้า)
	";
	$footer = "<br/><br/><br/>
			พัฒนาโดยนายวุฒิพงษ์ ทองมนต์ สาขาวิทยาการคอมพิวเตอร์ มหาวิทยาลัยมหาสารคาม  Copyright &#169;  2013 คณะสาธารณสุขศาสตร์. All Rights Reserved. 
	";

	$month = array("ม.ค.", "ก.พ", "มี.ค.", "เม.ย", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย", "ธ.ค.");

	$xYear = date('Y')+533;
?>