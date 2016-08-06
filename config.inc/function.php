<?
	function detail(){
		switch($_GET['uri']){
			case "step-1" : include_once 'modules/page-1.php'; break;
			case "step-2" : include_once 'modules/page-2.php';break;
			case "step-3" : include_once 'modules/page-3.php';break;
			default : include 'modules/page-1.php';break;
		}
	}
?>