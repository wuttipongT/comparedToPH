<div class="topic">
	<u><h2 style="display: inline;">สำหรับผู้สมัคร&nbsp;:</h2></u>
	<span>&nbsp;เติมข้อความในช่องว่างและเติมเครื่องหมาย (<i class="icon-ok"></i>) หน้าข้อความตามความเป็นจริง</span>
</div>
<table id="first" style="width:800px; margin: auto;text-align: left;">
	<tr><th>1.หัองเรียนจังหวัด</th><th>2.วุฒิการศึกษาที่ใช้สมัคร</th></tr>
	<tr>
		<td style="width: 200px;">
			<table>
				<tr>
					<td>
						<div class="radio">
							<input id="provinceroom0" name="provinceroom" type="radio" value="0">
							<label for="provinceroom0">มหาสารคาม</label>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="radio">
							<input id="provinceroom1" name="provinceroom" type="radio" value="1">
							<label for="provinceroom1">นครราชสีมา</label>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="radio">
							<input id="provinceroom2" name="provinceroom" type="radio" value="2">
							<label for="provinceroom2">อุดรราชธานี</label>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="radio">
							<input id="provinceroom3" name="provinceroom" type="radio" value="3">
							<label for="provinceroom3">อุบลราชธานี</label>
						</div>
					</td>
				</tr>
			</table>
		</td>
		<td>
			<table>
				<tr>
					<td>
						<div class="radio">
							<input id="chb_degree1" name="chb_degree" type="radio" value="1">
							<label for="chb_degree1">ประกาศนียบัตรวิชาชีพชั้นสูง สาขา</label>
						</div>&nbsp;
						<input type="text" style="width:250px;" disabled name="chb_degree1" class="chb_degree" />
					</td>
				</tr>
				<tr>
					<td>
						<div class="radio">
							<input id="chb_degree2" name="chb_degree" type="radio" value="2">
							<label for="chb_degree2">อนุปริญญา</label>
						</div>&nbsp;
						<input id="diploma1" type="text" style="width:150px;" disabled name="chb_degree2_1"/>&nbsp;สาขา&nbsp;
						<input id="diploma2" type="text" style="width:150px;" disabled name="chb_degree2_2" />
					</td>
				</tr>
				<tr>
					<td>
						<div class="radio">
							<input id="chb_degree3" name="chb_degree" type="radio" value="3">
							<label for="chb_degree3">ประกาศนียบัตร</label>
						</div>&nbsp;
						<input type="text" style="width: 300px;" disabled name="chb_degree3" class="chb_degree"/>
					</td>
				</tr>
				<tr>
					<td>
						<div class="radio">
							<input id="chb_degree4" name="chb_degree" type="radio" value="4">
							<label for="chb_degree4">หลักสูตรอื่นๆ (ระบุ)</label>
						</div>&nbsp;
						<input type="text" style="width: 350px;" disabled id="chb_degree4_1" name="chb_degree4" class="chb_degree"/>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<hr class="hr"/>
<table cellpadding="5">
	<tr>
		<td>3. ชื่อผู้สมัคร</td>
		<td id="pname">
		<select id="prename" name="prename" >
			<option value="นาย">นาย</option>
			<option value="นางสาว">นางสาว</option>
			<option value="นาง">นาง</option>
			<option value="other">อื่นๆ</option>
		</select>
		<input type="hidden" name="prename_other" />
		</td>
		<td><input id="_name" name="_name" type="text" style="width: 230px;" /></td>
		<td>นามสกุล</td><td><input id="lastname" name="lastname" type="text" style="width: 280px;" /></td>
	</tr>
</table>
<table cellpadding="5">
	<tr>
		<td>4. เกิดวันที่</td>
		<td>
			<select id="birthday" name="birthday">
				<option value="-">&nbsp</option>
				<?
					for($i=1;$i<=31;$i++){
						$j = sprintf("%02d",$i);
						?><option><?=$j;?></option><?
					}
				?>
			</select>
		</td>
		<td>เดือน</td>
		<td>
			<select id="mount" name="mount">
				<option value="-">&nbsp</option>
				<?foreach($month as $m){?>
				<option value="<?=$m;?>"><?=$m;?></option>
				<?}?>
			</select>
		</td>
		<td>พ.ศ.</td>
		<td>
			<select id="year" name="year">
				<option value="-">&nbsp</option>
				<option value="<?=$xYear?>"><?=$xYear?></option>
				<?
						for($i=1;$i<=20;$i++){
				?>
				<option value="<?=($xYear-$i)?>"><?=($xYear-$i);?></option><?}?>
			</select>
		</td>
		<td>อายุ</td><td><input id="age" name="age" type="text" style="width: 30px;"/></td><td>ปี</td>
		<td>เลขบัตรประจำตัวประชาชน</td><td><input type="text" name="idcard" id="idcard" style="width: 200px;" value='<?=$objResult["idcard"];?>'/></td>
	</tr>
</table>
<table style="margin-left: 10px;" cellpadding="5">
	<tr>
		<td>เชื้อชาติ</td><td><input id="race" name="race" type="text" style="width: 120px;" /></td>
		<td>สัญชาติ</td><td><input id="nationality" name="nationality" type="text" style="width: 120px;" /></td>
		<td>ศาสนา</td><td><input id="religion" name="religion" type="text" /></td>
		<td>สถานะภาพ</td><td><input id="status" name="status" type="text" /></td>
	</tr>
</table>
<table style="margin-left: 10px;" cellpadding="5">
	<tr>
		<td>ที่อยู่ที่สามารถติดต่อได้เร็วที่สุดคือ บ้านเลขที่</td><td><input id="number" name="number" type="text" style="width: 60px;" /></td>
		<td>หมู่ที่</td><td><input id="moo" name="moo" type="text" style="width: 50px;" /></td>
		<td>ซอย</td><td><input id="lane" name="lane" type="text" style="width: 150px;" /></td>
		<td>ถนน</td><td><input id="road" name="road" type="text" style="width: 180px;"/></td>
	</tr>
</table>
<table style="margin-left: 10px;" cellpadding="5">
	<tr>
		<td>จังหัวด</td>
		<td>
			<select id="province_4" name="province_4" onChange = "ListAmphur(this.value)">
				<option selected value="-"></option>
				<?$strSQL = "SELECT * FROM province ORDER BY GEO_ID ASC ";
				$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
				while($objResult = mysql_fetch_array($objQuery)){?>
				<option value="<?=$objResult["PROVINCE_ID"];?>"><?=$objResult["PROVINCE_NAME"];?></option><?}?>
			</select>
		</td>
		<td>อำเภอ</td>
		<td>
			<select id="amphur_4" name="amphur_4" style="width:150px" onChange = "Listdistrict(this.value)"></select>
		</td>
		<td>ตำบล</td>
		<td>
			<select id="district_4" name="district_4" style="width:120px"></select>
		</td>
		<td>รหัสไปรษณีย์</td><td><input id="postcode" name="postcode" type="text" /></td>
	</tr>
</table>
<table style="margin-left: 10px;" cellpadding="5">
	<tr>
		<td>โทรศัพท์บ้าน หรือ สำนักงาน</td><td><input id="tel" name="tel" type="text" style="width: 200px;" /></td>
		<td>โทรศัพท์เคลื่อนที่</td><td><input id="phone" name="phone" type="text" style="width: 300px;"  /></td>
	</tr>
</table>
<table cellpadding="5">
	<tr>
		<td>5. ที่ทำงานปัจจุบัน</td><td><input id="workplace" name="workplace" type="text" style="width: 90px;" /></td>
		<td>ถนน</td><td><input id="currroad" name="currroad" type="text" /></td>
		<td>จังหวัด</td>
		<td>
			<select id="province_5" name="province_5" onChange = "ListAmphur_5(this.value)">
				<option selected value="-"></option>
				<?$strSQL = "SELECT * FROM province ORDER BY GEO_ID ASC ";
				$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
				while($objResult = mysql_fetch_array($objQuery)){?>
				<option value="<?=$objResult["PROVINCE_ID"];?>"><?=$objResult["PROVINCE_NAME"];?></option><?}?>
			</select>
		</td>
		<td>อำเภอ</td>
		<td>
			<select id="amphur_5" name="amphur_5" style="width:150px" onChange = "Listdistrict_5(this.value)"></select>
		</td>
	</tr>
</table>
<table style="margin-left: 10px;" cellpadding="5">
	<tr>
		<td>ตำบล</td>
		<td>
			<select id="district_5" name="district_5" style="width:120px"></select>
		</td>
		<td>รหัสไปรษณี</td><td><input id="currpost" name="currpost" type="text" style="width: 40px;"/></td>
		<td>โทรศัพท์สำนักงาน</td><td><input id="currtel" name="currtel" type="text" style="width: 80px;" /></td>
		<td>ต่อ</td><td><input id="to" name="to" type="text" style="width: 40px;" /></td>
		<td>โทรศัพท์เคลื่อนที่</td><td><input id="currphone" name="currphone" type="text" /></td>
	</tr>
</table>
<table style="margin-left: 10px;" cellpadding="5">
	<tr>
		<td>อีเมลล์ที่สามรถติดต่อได้</td><td><input id="email" name="email" type="email" style="width: 500px;" class="bord-bott" /></td>
	</tr>
</table>
<table cellpadding="5">
	<tr><td colspan="2">6. ประวัติการศึกษา</td></tr>
	<tr>
		<td style="text-indent: 10px;">6.1 ระดับประถมศึกษาจาก</td><td><input id="level-pri" name="level-pri" type="text" style="width: 300px;"/></td>
		<td>จังหวัด</td>
		<td>
			<select id="level-pri-prov" name="ddlProvince"><!--<^_^>-->
				<option selected value="-"></option>
				<?$strSQL = "SELECT * FROM province ORDER BY GEO_ID ASC ";
				$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
				while($objResult = mysql_fetch_array($objQuery)){?>
				<option value="<?=$objResult["PROVINCE_ID"];?>"><?=$objResult["PROVINCE_NAME"];?></option><?}?>
			</select>
		</td>
	</tr>
</table>
<table style="margin-left: 35px;" cellpadding="5">
	<tr>
		<td>ปีที่สำเร็จการศึกษา</td><td><input id="graduate-pri" name="graduate-pri" type="text" /></td>
		<td>เกรดเฉลี่ย(GPA)</td><td><input id="gpa-pri" name="gpa-pri" type="text" /></td>
	</tr>
</table>
<table cellpadding="5">
	<tr>
		<td style="text-indent: 10px;">6.2 ระดับมัธยมศึกษาจาก</td><td><input id="level-second" name="level-second" type="text" style="width: 300px;"/></td>
		<td>จังหวัด</td>
		<td>
			<select id="level-secon-prov" name="level-secon-prov">
				<option selected value="-"></option>
				<?$strSQL = "SELECT * FROM province ORDER BY GEO_ID ASC ";
				$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
				while($objResult = mysql_fetch_array($objQuery)){?>
				<option value="<?=$objResult["PROVINCE_ID"];?>"><?=$objResult["PROVINCE_NAME"];?></option><?}?>
			</select>
		</td>
	</tr>
</table>
<table style="margin-left: 35px;" cellpadding="5">
	<tr>
		<td>ปีที่สำเร็จการศึกษา</td><td><input id="graduate-second" name="graduate-second" type="text" /></td>
		<td>เกรดเฉลี่ย(GPA)</td><td><input id="gpa-second" name="gpa-second" type="text" /></td>
	</tr>
</table>
<table cellpadding="5">
	<tr>
		<td style="text-indent: 10px;">6.3 ระดับประกาศนียบัตรวิชาชีพชั้นสูง / ประกาศนียบัตร / อนุปริญญา</td><td><input id="diploma" name="diploma" type="text" style="width: 300px;"/></td>
	</tr>
</table>
<table style="margin-left: 35px;" cellpadding="5">
	<tr>
		<td>สาขา</td><td><input type="text" id="branch" name="branch" /></td>
		<td>สถาบันการศึกษาที่สำเร็จการศึกษา</td><td><input id="uni" name="uni" type="text" /></td>
		<td>จังหวัด</td>
		<td>
			<select id="dipl-province" name="dipl-province">
				<option selected value="-"></option>
				<?$strSQL = "SELECT * FROM province ORDER BY GEO_ID ASC ";
				$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
				while($objResult = mysql_fetch_array($objQuery)){?>
				<option value="<?=$objResult["PROVINCE_ID"];?>"><?=$objResult["PROVINCE_NAME"];?></option><?}?>
			</select>
		</td>
	</tr>
</table>
<table style="margin-left: 35px;" cellpadding="5">
	<tr>
		<td>ปีที่สำเร็จการศึกษา</td><td><input id="graduate-dipl" name="graduate-dipl" type="text" /></td>
		<td>เกรดเฉลี่ย(GPA)</td><td><input id="gpa-dipl" name="gpa-dipl" type="text" /></td>
	</tr>
</table>
<table cellpadding="5">
	<tr>
		<td style="text-indent: 10px;">6.4 ระดับปริญญาตรี (ถ้ามี)วุฒิการศึกษา</td><td><input id="bachelor" name="bachelor" type="text" style="width: 200px;"/></td>
		<td>สาขาวิชา</td><td><input id="disciplines" name="disciplines" type="text" style="width: 100px;"/></td>
	</tr>
</table>
<table style="margin-left: 35px;" cellpadding="5">
	<tr>
		<td>สถาบันการศึกษาที่สำเร็จการศึกษา</td><td><input id="university" name="university" type="text" style="width: 200px;" /></td>
		<td>จังหวัด</td>
		<td>
			<select id="bachelor-province" name="bachelor-province">
				<option selected value="-"></option>
				<?$strSQL = "SELECT * FROM province ORDER BY GEO_ID ASC ";
				$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
				while($objResult = mysql_fetch_array($objQuery)){?>
				<option value="<?=$objResult["PROVINCE_ID"];?>"><?=$objResult["PROVINCE_NAME"];?></option><?}?>
			</select>
		</td>
	</tr>
</table>
<table style="margin-left: 35px;" cellpadding="5">
	<tr>
		<td>ปีที่สำเร็จการศึกษา</td><td><input id="graduate-bache" name="graduate-bache" type="text" /></td>
		<td>เกรดเฉลี่ย(GPA)</td><td><input id="gpa-bache" name="gpa-bache" type="text" /></td>
	</tr>
</table>
<table cellpadding="5">
	<tr>
		<td>7. ตำแหน่งทีทำงานในปัจจุบัน</td><td><input id="jop" name="jop" type="text" /></td>
		<td>ระดับ</td><td><input id="job-lev" type="text" name="job-lev" /></td>
		<td>สังกัดฝ่าย</td><td><input id="depart" name="depart" type="text" /></td>
	</tr>
</table>
<table style="margin-left: 10px;" cellpadding="5">
	<tr>
		<td>ชื่อหน่วยงาน</td><td><input id="organi" name="organi" type="text" style="width: 100px;" /></td>
		<td>จังหวัด</td>
		<td>
			<select id="province_7" name="province_7" onChange = "ListAmphur_7(this.value)">
				<option selected value="-"></option>
				<?$strSQL = "SELECT * FROM province ORDER BY GEO_ID ASC ";
				$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
				while($objResult = mysql_fetch_array($objQuery)){?>
				<option value="<?=$objResult["PROVINCE_ID"];?>"><?=$objResult["PROVINCE_NAME"];?></option><?}?>
			</select>
		</td>
		<td>อำเภอ</td><td><select id="amphur_7" name="amphur_7" style="width:200px" onChange = "Listdistrict_7(this.value)"></select></td>
		<td>ตำบล</td><td><select id="district_7" name="district_7" style="width:120px"></select></td>
	</tr>
</table>
<table style="margin-left: 10px;" cellpadding="5">
	<tr>
		<td>เงินเดื่อนปัจจุบัน</td><td><input id="salary" name="salary" type="text" style="width: 80px;" /></td><td>บาท</td>
		<td>รายได้อื่น (ระบุ</td><td><input id="salary-other" name="salary-other" type="text" /></td><td>)</td>
		<td>ต่อเดือนประมาณ</td><td><input id="approx" name="approx" type="text" /></td><td>บาท</td>
	</tr>
</table>
<table style="margin-left: 10px;" cellpadding="5">
	<tr>
		<td>รวมรายได้ต่อเดื่อนทั้งหมด</td><td><input id="sum" name="sum" type="text" style="width: 150px;" /></td><td>บาท</td>
		<td>รายจ่ายต่อเดือน</td><td><input id="pay" name="pay" type="text" style="width: 150px;" /></td><td>บาท</td>
	</tr>
</table>
<style type="text/css">
	table[id=first] th{
		background-image: linear-gradient(left , rgb(230,233,237) 6%, rgb(255,255,255) 93%);
background-image: -o-linear-gradient(left , rgb(230,233,237) 6%, rgb(255,255,255) 93%);
background-image: -moz-linear-gradient(left , rgb(230,233,237) 6%, rgb(255,255,255) 93%);
background-image: -webkit-linear-gradient(left , rgb(230,233,237) 6%, rgb(255,255,255) 93%);
background-image: -ms-linear-gradient(left , rgb(230,233,237) 6%, rgb(255,255,255) 93%);

background-image: -webkit-gradient(
	linear,
	left bottom,
	right bottom,
	color-stop(0.06, rgb(230,233,237)),
	color-stop(0.93, rgb(255,255,255))
);
	}
</style>