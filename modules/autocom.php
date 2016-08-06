<?
	include_once '../config.inc/config.inc.php'; 
	$sql = "SELECT subjectID, code, degree FROM subcode INNER JOIN subjects ON (subjectID=subID) WHERE type=0";
	$rs = mysql_query($sql);
	$info1 = array();
	$info2 = array();
	$info3 = array();
	while ($auto = mysql_fetch_array($rs)) {
		 $info1[] = $auto['subjectID'];
		 $info2[] = $auto['code'];
		 $info3[] = $auto['degree'];
	}
	$encode = array(
		'subID' => $info1,
		'subName' => $info2,
		'subDegree' => $info3
	);		
		
	echo json_encode($encode);
	

function js_thai_encode($data)
{	// fix all thai elements
	if (is_array($data))
	{
		foreach($data as $a => $b)
		{
			if (is_array($data[$a]))
			{
				$data[$a] = js_thai_encode($data[$a]);
			}
			else
			{
				$data[$a] = iconv("utf-8","utf-8",$b);
			}
		}
	}
	else
	{
		$data =iconv("utf-8","utf-8",$data);
	}
	return $data;
}
?>