<?
	session_start();
	include_once '../config.inc/config.inc.php';
	
	$is_ajax = $_POST['is_ajax'];
	if($is_ajax == '0'){
		$username = $_POST['username'];
		$password =$_POST['password'];
		
		$sql = "SELECT idcard, password FROM student WHERE idcard='$username' AND password='$password' LIMIT 1 ";
		$rs = mysql_query($sql) or die(mysql_error());
		if(mysql_num_rows($rs) > 0){
			$_SESSION['student'] = $username;
			echo '1';
		}
	}else if($is_ajax == '1'){
		$username = $_POST['username'];
		$password =$_POST['password'];
		
		$sql = "SELECT * FROM staff WHERE username='$username' AND password='$password' LIMIT 1 ";
		$rs = mysql_query($sql) or die(mysql_error());
		if(mysql_num_rows($rs) > 0){
			$_SESSION['admin'] = $username;
			echo '1';
		}
	}
	session_write_close();
?>