<blockquote><blockquote><blockquote></blockquote></blockquote></blockquote><style type="text/css">
	.icon-plus,.icon-minus{
		opacity: .40;
		filter: alpha(opacity=40);
		cursor: pointer;
	}
	.icon-plus:focus,
	.icon-plus:hover,
	.icon-minus:focus,
	.icon-minus:hover{
		opacity: 1;
		filter: alpha(opacity=100);
	}
</style>
<table id="experience" cellpadding="5">
	<tr><td colspan="2">8. ประสบการณ์ทำงาน (โปรดแนบหลักฐานประกอบ)</td></tr>
	<tr><td class="8">&nbsp;&nbsp;&nbsp;&nbsp;8.1</td><td><input id="exper1" name="exper[]" type="text" style="width: 700px"/></td></tr>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;8.2</td><td><input id="exper2" name="exper[]" type="text" style="width: 700px;" /></td></tr>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;8.3</td><td><input id="exper3" name="exper[]" type="text" style="width: 700px;" /></td></tr>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;8.4</td><td><input id="exper4" name="exper[]" type="text" style="width: 700px;" /></td></tr>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;8.5</td><td><input id="exper5" name="exper[]" type="text" style="width: 700px;" /></td></tr>
</table>
<div style="margin-right: 90px;position: relative; float: right;"><i id="exp-btn" class="icon-plus"></i><i id="exp-remove" class="icon-minus"></i></div><b style="clear: right;line-height: 0;">&nbsp;</b>
<table id="skill" cellpadding="5">
	<tr><td colspan="2">9. ความสามารถและทักษะพิเศษ</td></tr>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;9.1</td><td><input id="capability1" name="capability[]" type="text" style="width: 700px;" /></td></tr>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;9.2</td><td><input id="capability2" name="capability[]" type="text" style="width: 700px;" /></td></tr>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;9.3</td><td><input id="capability3" name="capability[]" type="text" style="width: 700px;" /></td></tr>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;9.4</td><td><input id="capability4" name="capability[]" type="text" style="width: 700px;" /></td></tr>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;9.5</td><td><input id="capability5" name="capability[]" type="text" style="width: 700px;" /></td></tr>
</table>
<div style="margin-right: 90px;position: relative; float: right;"><i id="skill-btn" class="icon-plus"></i><i id="skill-remove" class="icon-minus"></i></div><b style="clear: right;line-height: 0;">&nbsp;</b>
<table id="working" cellpadding="5">
	<tr><td colspan="2">10. ผลงานดีเด่น (ที่เคยได้รับรางวัลหรือเชิดชูเกียรติ ) (<u>โปรแนบหลักฐานประกอบ</u> (ถ้ามี))</td></tr>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;10.1</td><td><input id="workmanship1" name="workmanship[]" type="text" style="width: 700px;" /></td></tr>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;10.2</td><td><input id="workmanship2" name="workmanship[]" type="text" style="width: 700px;" /></td></tr>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;10.3</td><td><input id="workmanship3" name="workmanship[]" type="text" style="width: 700px;" /></td></tr>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;10.4</td><td><input id="workmanship4" name="workmanship[]" type="text" style="width: 700px;" /></td></tr>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;10.5</td><td><input id="workmanship5" name="workmanship[]" type="text" style="width: 700px;" /></td></tr>
</table>
<div style="margin-right: 90px;position: relative; float: right;"><i id="work-btn" class="icon-plus"></i><i id="working-remove" class="icon-minus"></i></div><b style="clear: right;line-height: 0;">&nbsp;</b>
<table cellpadding="5">
	<tr>
		<td>11. บุคคลใกล้ชิดที่สามารถติดต่อได้ ชื่อ-สกุล</td>
		<td><input id="intimate" name="intimate" type="text" /></td>
		<td>ที่อยู่</td><td><input id="inti-addr" name="inti-addr" type="text" /></td>
	</tr>
</table>
<table cellpadding="5">
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;จังหวัด</td>
		<td>
			<select id="province_11" name="province_11" onChange = "ListAmphur_11(this.value)">
				<option selected value=""></option>
				<?$strSQL = "SELECT * FROM province ORDER BY GEO_ID ASC ";
				$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
				while($objResult = mysql_fetch_array($objQuery)){?>
				<option value="<?=$objResult["PROVINCE_ID"];?>"><?=$objResult["PROVINCE_NAME"];?></option><?}?>
			</select>
		</td>
		<td>อำเภอ</td><td><select id="amphur_11" name="amphur_11" style="width:150px" onChange = "Listdistrict_11(this.value)"></select></td>
		<td>ตำบล</td><td><select id="district_11" name="district_11" style="width:120px"></select></td>
	</tr>
</table>
<table cellpadding="5">
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;รหัสไปรษณีย์</td><td><input id="inti-pastcode" name="inti-pastcode" type="text" /></td>
		<td>โทรศัพท์บ้าน / สำนักงาน</td><td><input id="inti-tel" name="inti-tel" type="text" /></td>
		<td>ต่อ</td><td><input id="inti-to" name="inti-to" type="text" style="width: 60px;" /></td>
	</tr>
</table>
<table cellpadding="5">
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;โทรศัพท์เคลื่อนที่</td><td><input id="inti-phone" name="inti-phone" type="text" /></td>
		<td>มีความสัมพันธ์เป็น</td><td><input id="relation" name="relation" type="text" /></td>
	</tr>
</table>