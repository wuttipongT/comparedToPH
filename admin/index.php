<?session_start();if(!session_is_registered("admin")){header("Location: ../index.php");}?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>การจัดการข้อมูลการสมัครเข้าศึกษาต่อระดับปริญญาตรี หลักสูตรสาธารณสุขศาสตร์บัณฑิต (เทียบเข้า)</title>
	<link rel="stylesheet" type="text/css" href="http://comparedtoph.info/admin/scripts/simplePagination.css" />
	<link rel="stylesheet" type="text/css" href="http://comparedtoph.info/admin/scripts/stylesheet.css" />
	<link rel="stylesheet" type="text/css" href="http://comparedtoph.info/jQueryUI/css/ui-lightness/jquery-ui-1.10.1.custom.min.css" />
	<link rel="stylesheet" type="text/css" href="../fonts/thsarabunnew.css" />
	<script type="text/javascript" src="http://comparedtoph.info/jQueryUI/js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="http://comparedtoph.info/jQueryUI/js/jquery-ui-1.10.1.custom.min.js"></script>
	<script type="text/javascript" src="http://comparedtoph.info/admin/scripts/jquery.simplePagination.js"></script>
	<script type="text/javascript" src="http://comparedtoph.info/admin/scripts/script.js"></script>
</head>
<body>
	<?
		require_once ('../config.inc/config.inc.php');
		require_once ('../config.inc/function.php');
	?>
<div style="background-image:url(../images/pattern.png);position: absolute;left: 0;width: 100%;height: 270px;z-index: -1;top: 0;border-bottom:2px solid #fff;-webkit-box-shadow: inset 0 1px 3px rgba(255, 255, 255, 0.25), 0 1px 0 rgba(255, 255, 255, 0.25);
-moz-box-shadow: inset 0 1px 3px rgba(255, 255, 255, 0.25), 0 1px 0 rgba(255, 255, 255, 0.25);
box-shadow: inset 0px 2px 3px 0px rgba(255,255, 255, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
webkit-box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.50);
-moz-box-shadow:    0px 15px 30px rgba(0, 0, 0, 0.50);
box-shadow:         0px 15px 30px rgba(0, 0, 0, 0.50);"></div>
<div id="container">
	<img src="../images/side-start.png" style="width: auto;height: auto;position: absolute;left: -20px; z-index: -1;" />
	<img src="../images/side-start.png" style="width: auto;height: auto;position: absolute;right: -20px; z-index: -1; -moz-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    filter: FlipH;
    -ms-filter: \"FlipH\";" />
	<div id="top" style="line-height: 15px;">
		<div style="float:left;text-aling:center;margin-left:50px;">
			<img src="../images/logo.png" style="display:block;opacity:.80;-moz-opacity: .80; filfer: alpha(opacity=80);margin-top: 50px;"/>
			<h3>การจัดการฟอร์มสมัครศึกษาต่อระดับปริญญาตรี หลักสูตรสาธารณสุขศาสตร์บัญฑิต  (เทียบเข้า)</h3>
			<h3>คณะสาธารณสุขศาสตร์ มหาวิทยาลัยมหาสารคาม</h3>
		</div>
		<div style="float:right; margin-bottom: 0;bottom: -180px; right: 10px; position:relative;"><i class="icon-user"></i>&nbsp;&nbsp;คุณ&nbsp;<?=$_SESSION['admin']?>&nbsp;&nbsp;<i class="icon-off"></i><a href="../logout.php">&nbsp;&nbsp;ออกจากระบบ</a></div>
		<div style="float:right;display:inline; border-radius: 5px;-moz-border-radius: 5px; -webkit-border-raius: 5px;background-color: #ccc;padding:3px; postion:relative;margin: -10px 10px; opacity: .60; filfer: alpha(opacity=60); -moz-opacity:.60;"><input type="text" style="width: 240px; height: 20px; border: none; border-radius: 5px;-moz-border-radius: 5px; -webkit-border-raius: 5px;" class="highlight" /><i style="-moz-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    filter: FlipH;
    -ms-filter: \"FlipH\";" class="icon-search"></i></div>
		<hr class="hr" style="clear: both;"/>
	</div>
	<div id="vcenter">
		<div style="marin: auto auto; position:relative; display:block; width: auto; height:auto;border: 1px solid #ccc;margin-left: 350px;">
			<div class="nav" id="btn-add-sub"><i class="nav-add"></i><p/>&nbsp;&nbsp;เพิ่มวิชา</div>
			<div class="nav" id="btn-add-tran-sub"><i class="nav-add-tranfer"></i><p/>รายวิชาที่เที่ยบโอน</div>
			<div class="nav" id="btn-add-category"><i class="nav-add-category"></i><p/>&nbsp;&nbsp;หมวดหมู่รายวิชา</div>
			<div class="nav" id="btn-report"><i class="nav-report"></i><p/>&nbsp;&nbsp;รายงานสรุปยอด</div>
			<div class="nav"><i class="nav-logout"></i><p/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ออก</div>
		</div>
		
		<div id="tabs" style="clear:both;">
			<ul>
				<li><a id="std" href="#tabs-1">ข้อมูลนิสิต</a></li>
				<li><a id="subjects" href="#tabs-2">รายวิชาที่ขอเทียบโอน</a></li>
				<li><a id="tranfer-data" href="#tabs-3">รายวิชาที่เทียบโอน</a></li>
				<li><a id="category" href="#tabs-4">หมวดหมู่รายวิชา</a></li>
			</ul>
			<div id="tabs-1">
				ปีการศึกษา <div class="arrow-left"></div>&nbsp;<label id="acadyear"></label>&nbsp;<div class="arrow-right"></div>
				<div id="std_content" style="margin: 5px;"></div>
				<div id="std_paging" style="margin-top: 5px; float: right;"></div>
			</div>
			<div id="tabs-2">
				<div id="content"></div>
				<div id="paging" style="margin-top: 5px; float: right;"></div>
			</div>
			<div id="tabs-3">	
				<div id="tran_content" style="margin: 5px;"></div>
				<div id="tran_paging" style="margin-top: 5px; float: right;"></div>
			</div>
			<div id="tabs-4"></div>
		</div>
	</div>
	<img src="../images/Shadow_L.png" style="width: 20px;height: 150px;position: absolute;left: -20px;" />
	<img src="../images/Shadow_L.png" style="width: 20px;height: 150px;position: absolute;right: -20px; -moz-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    filter: FlipH;
    -ms-filter: \"FlipH\";" />
    <hr class="hr" />
</div>
<div style="background-image:url(../images/crossback.gif);position: absolute;left: 0;width: 100%;height: 100px;z-index: -1;text-align:center; ">
	 By: EmphasisChristian T-Shirts <br/>
Copyright © 2013 คณะสาธารณสุขศาสตร์. All Rights Reserved.
</div>
<!--//** --------------------------- **//add subject-->
<div class="dialog-op" style="display: none;">
<form name="form-sub-add" method="post" action="">
	<table id="table-subid"style="border-collapse:collapse;vertical-align: middle;float:left;">
		<tr>
			<td>รหัสวิชา</td>
			<td><input id="subid1" type="text" class="highlight" style="width: 250px; height: 30px;"/></td>
		</tr>
		<tr>
		</tr>
	</table>
	<table id="table-subname"style="border-collapse:collapse;vertical-align: middle; float:left;">
		<tr>
			<td>&nbsp;&nbsp;ชื่อวิชา</td>
			<td><input id="subname1" type="text" class="highlight" style="width: 250px; height: 30px"/></td>
		</tr>
	</table>
	<table id="table-degree"style="border-collapse:collapse;vertical-align: middle; float:left;">
		<tr>
			<td>&nbsp;&nbsp;หน่วยกิต</td>
			<td><input id="degree1" type="text" class="highlight" style="width: 250px; height: 30px" /></td>
		</tr>
	</table>
	<br style="clear:both;"/>
	<div style="display:inline-block; margin-left:270px;">
		<i id="add-subid-dialog" class="icon-plus"></i><i id="remove-subid-dialog" class="icon-minus"></i>
	</div>
	<div style="display:inline-block;float: right;">
		<i id="add-subname-dialog" class="icon-plus"></i><i id="remove-subname-dialog" class="icon-minus"></i>
	</div>
	<hr style="opacity:.50;-moz-opacity:.50; filfer:alpha(opacity=50);clear:both;"/>
	<table cellspacing="5" id="main" style="border-collapse:collapse;vertical-align: middle;float:right;">
		<tr>
			<td>หมวดหมู่</td>
			<td><select id="select-category" style="width: 250px; padding: 5px;" class="highlight"></select></td>
		</tr>
		<tr>
			<td>รายวิชาที่เทียบโอน</td>
			<td><select id="select-tranfer" style="width: 250px; padding: 5px;" class="highlight"></select></td>
		</tr>
	</table>
	<br style="clear:both;"/>
	<hr style="opacity:.50;-moz-opacity:.50; filfer:alpha(opacity=50);"/>
	<div style="bottom:-10px;float:right;margin-right:10px;">
		<a id="close-addsub" href="#" class="btn">ปิด</a>
		<input type="submit" class="btn btn-primary" value="บันทึกข้อมูล" />
	</div>
	<i style="clear:right;"></i>
</form>
</div>
<!----------------------------------------------------------------->
<div class="dialog-add-tranfer" style="display: none;">
<form id="form_tranfer" method="post" action="">
	<table cellspacing="5" id="main" style="border-collapse:collapse;vertical-align: middle;clear:right;">
		<tr>
			<td>รหัสวิชา</td>
			<td><input id="tranfer_subid" type="text" class="highlight" style="width: 250px; height: 30px;display:block;"/></td>
		</tr>
		<tr>
			<td>ชื่อวิชา</td>
			<td><input id="tranfer_subname" type="text" class="highlight" style="width: 250px; height: 30px"/></td>
		</tr>
		<tr>
			<td>หน่วยกิต</td>
			<td><input id="tranfer_degree" type="text" class="highlight" style="width: 250px; height: 30px" /></td>
		</tr>
		<tr>
		<tr>
			<td>หมวดหมู่</td>
			<td><select id="tranfer_category" style="width: 250px; padding: 5px;" class="highlight"></select></td>
		</tr>
	</table>
	<hr style="opacity:.50;-moz-opacity:.50; filfer:alpha(opacity=50);"/>
	<div style="bottom:-10px;float:right;margin-right:10px;">
		<a href="#" id="tran_close" class="btn">ปิด</a>
		<input type="submit" class="btn btn-primary" value="บันทึกข้อมูล" />
	</div>
	<i style="clear:right;"></i>
</form>
</div>
<!----------------------------------------------------------------->
<div class="dialog-add-category" style="display: none;">
<form id="form-cate" method="post" action="">
	<table cellspacing="5" id="main" style="border-collapse:collapse;vertical-align: middle;clear:right;">
		<tr>
			<td>หมวดหมู่ &nbsp;&nbsp;</td>
			<td><input id="_category" type="text" class="highlight" style="width: 250px; height: 30px;display:block;"/></td>
		</tr>
	</table>
	<hr style="opacity:.50;-moz-opacity:.50; filfer:alpha(opacity=50);"/>
	<div style="bottom:-10px;float:right;margin-right:10px;">
		<a id="category_close" href="#" class="btn">ปิด</a>
		<input type="submit" class="btn btn-primary" value="บันทึกข้อมูล" />
	</div>
	<i style="clear:right;"></i>
</form>
</div>
<!--//** --------------------------- **//-->
</body>
</html>
<?
	session_write_close();
	mysql_close($con);
?>