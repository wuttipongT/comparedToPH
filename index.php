<?session_start();if(session_is_registered("admin")){header("Location: admin");}?>
<!DOCTYPE html>
<html id="<?php echo $_SESSION['student']; ?>">
<head>
<?
	require_once ('config.inc/config.inc.php');
	require_once ('config.inc/function.php'); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="http://comparedtoph.info:80/css/style.css" />
	<link rel="stylesheet" type="text/css" href="http://comparedtoph.info:80/fonts/thsarabunnew.css" />
	<script type="text/javascript" src="http://comparedtoph.info/jQueryUI/js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="http://comparedtoph.info:80/scripts/jquery.mockjax.js"></script>
    <script type="text/javascript" src="http://comparedtoph.info:80/src/jquery.autocomplete.js"></script>
    <script type="text/javascript" src="http://comparedtoph.info:80/scripts/demo.js"></script>
	<script type="text/javascript" src="http://comparedtoph.info:80/scripts/script.js"></script>
	<!--<script type="text/javascript" src="http://comparedtoph.info:80/scripts/jquery.hint.js.js"></script>-->
	<SCRIPT type="text/javascript" src="http://comparedtoph.info:80/popup/js/jquery.easing.1.3.js"></SCRIPT>
	<SCRIPT type="text/javascript" src="http://comparedtoph.info/popup/js/alertbox.js"></SCRIPT>
	<LINK rel="stylesheet" type="text/css" media="all" href="http://comparedtoph.info:80/popup/js/style.css">
</head>
<body>
<?
include 'config.inc/thailand.province.php';?>
<div class="bg-top"></div>
<div id="container">
<?if($_SESSION['student']){?>
	<div style="float:right; right: 10px; position:relative;"><i class="icon-user"></i>&nbsp;&nbsp;คุณ&nbsp;<?=$_SESSION['student']?>&nbsp;&nbsp;<i class="icon-off"></i><a href="logout.php">&nbsp;&nbsp;ออกจากระบบ</a></div>
	<script type="text/javascript" src="http://comparedtoph.info:80/scripts/jquery.gdocsviewer.min.js"></script> 
	<script type="text/javascript">
		$(document).ready(function(){
			$("input, select").prop('disabled', true);
			$('#ok').html('<input id="_edit" class="btn btn-primary" type="submit" name="submit" style="float: right; margin:0;display: none;margin-top: 5px;margin-right: 5px;" value="แก้ไขข้อมูล" disabled />');
			$('#_edit').click(function(){
				$('#frmMain').attr("action","modules/editStudent.php");
			});
			$('#edit').click(function(){
				$('input, select').prop("disabled",!$('input, select').prop("disabled"));
			});
			loadData();
		});
	</script>
	<?}?>
	<div id="top" style="line-height: 15px;">
		<?if(!$_SESSION['student']){?>
		<a id="btn" href="#" >มุมสมาชิก</a><?}?>
		<form id="login" action="modules/login.php">
			<div style="display: block;margin: auto; width: 200px; height: auto;">
				<h3 style="float:right; margin-right: 5px;">
					<i class="icon-lock" style="position:absolute;margin:-2px -5px"></i>&nbsp;&nbsp;กรอกข้อมูลเพื่อเข้าสู่ระบบ
				</h3>
				<input class="username not"  type="text"style="display:block; width:200px; height: 35px;clear:right;text-indent: 10px;" placeholder="IDCard" />
				<input class="password not" type="password" style="display:block;width:200px; height: 35px; margin-top: 10px;text-indent: 10px;" placeholder="Birthday"/>
				<select id="type">
					<option value="0">นักศึกษา</option>
					<option value="1">เจ้าหน้าที่</option>
				</select>
				<span style="position:absolute">&nbsp;</span>
				<input class="submit" type="submit" style="display:block; float: right;width: 120px;height: 35px;background:red;border:none;margin-top:30px;margin-right: -15px; text-indent: 3px; cursor: pointer;" value="เข้าสู่ระบบ" />
				<b style="clear: right">&nbsp;</b>
			</div>
			<div id="up" class="icon-chevron-up" style="margin: 10px 10px;cursor: pointer;"></div>
		</form>
		<div id="customize" style="float:left;text-aling:center;">
			<img src="images/msu-logo2.png" class="logo" style="display:inline-block;"/>
			<h3>ฟอร์มสมัครศึกษาต่อระดับปริญญาตรี หลักสูตรสาธารณสุขศาสตร์บัญฑิต  (เทียบเข้า)</h3>
			<h3>ระบบนอกเวลาราชการ ประจำปีการศึกษา&nbsp;
				<div class="aca-left-arrow"></div>&nbsp;<span id="acadyear"></span>&nbsp;<div class="aca-right-arrow"></div>
			</h3>
			<h3>คณะสาธารณสุขศาสตร์ มหาวิทยาลัยมหาสารคาม</h3>
		</div>
	</div><!--end id top -->
	<form id="frmMain" name="frmMain" action="modules/add_student.php" method="post" enctype="multipart/form-data">
			<div class="container-file" style="position:absolute;border:1px solid #ccc;width:121px;height: 1.2in; top: 70px;right:0; margin: 10px 10px;">
					<div id="show-pic" style="width:121px; height: 1.2in; position:relative;"><img id="ok" /></div>
					<label for="photo" class="wrap-file"></label>
					<input id="photo" name="photo" type='file' size="7" onchange="pictureUpload()" />
			</div>
			<?if($_SESSION['student']){?><div style="position:absolute;right: 150px; top: 200px;" ><i class="icon-edit" id="edit"></i>&nbsp;<i class="icon-print" id="print"></i>&nbsp;<i class="icon-download" id="download"></i></div>
			<?}?>
			<hr class="hr2" style="clear: both;" />
			<input id="hidden-acadyear" type="hidden" name="acadyear"/>
			<div id="slider"><!-- centered middel-->
				<ul>
					<li><?include 'modules/page-1.php';?></li>
					<li><?include 'modules/page-2.php';?></li>
					<li><?include 'modules/page-3.php';?></li>
				</ul>
			</div><!--end id slider -->
			<hr class="hr" style="margin:0;" />
			<div class="btn" style="float: left;margin:0;"><div id="left" class="back">กลับ</div><div id="right" class="next">ถัดไป</div></div>
			<div id="ok"><input id="_save" class="btn btn-primary" type="submit" name="submit" style="float: right;display: none; margin-top: 5px;margin-right: 5px;" value="บันทึกข้อมูล" /></div>
			<i style="clear: both;"></i>
	</form>
	<div id="footer"><?=$footer;?></div>
</div>
 <div id="loading-div-background"></div>
 <div id="loading-div" class="ui-corner-all" ></div>
 <div id="print_c" style="display: none;width:800;height:auto;background:#fff;" ></div>
</body>
</html>
<?
session_write_close();
mysql_close($con);?>