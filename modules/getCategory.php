<?
	include_once '../config.inc/config.inc.php';
	$sql = "SELECT * FROM category";
	$rs = mysql_query($sql);
	$encode = array();
	while($category = mysql_fetch_assoc($rs)){
		$encode[] = $category['byteCode'];
	}
	echo json_encode($encode);
?>