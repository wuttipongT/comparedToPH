<script type="text/javascript" language = "JavaScript">

		//**** List Amphur (Start) ***//
		function ListAmphur(SelectValue)
		{
			// document.getElementsByClassName("district").length = 0
			// document.getElementsByClassName("amphur").length = 0			// document.forms['frmMain']['ddlDistrict'].length = 0
			// document.forms['frmMain']['ddlAmphur'].length = 0
			frmMain.district_4.length = 0
			frmMain.amphur_4.length = 0
			//*** Insert null Default Value ***//
			var myOption = new Option('','')  
			frmMain.amphur_4.options[frmMain.amphur_4.length]= myOption			// document.getElementsByClassName("amphur").options[document.getElementsByClassName("amphur").length]= myOption
			// document.forms['frmMain']['ddlAmphur'].options[document.forms['frmMain']['ddlAmphur'].length]= myOption
			<?
			$intRows = 0;
			$strSQL = "SELECT * FROM amphur ORDER BY AMPHUR_ID ASC ";
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
			$intRows = 0;
			while($objResult = mysql_fetch_array($objQuery))
			{
			$intRows++;
			?>
				x = <?=$intRows;?>;
				mySubList = new Array();

				strGroup = <?=$objResult["PROVINCE_ID"];?>;
				strValue = "<?=$objResult["AMPHUR_ID"];?>";
				strItem = "<?=$objResult["AMPHUR_NAME"];?>";
				mySubList[x,0] = strItem;
				mySubList[x,1] = strGroup;
				mySubList[x,2] = strValue;

				if (mySubList[x,1] == SelectValue){
					var myOption = new Option(mySubList[x,0], mySubList[x,2])  
					frmMain.amphur_4.options[frmMain.amphur_4.length]= myOption
					// document.getElementsByClassName("amphur").options[document.getElementsByClassName("amphur").length]= myOption										// document.forms['frmMain']['ddlAmphur'].options[document.forms['frmMain']['ddlAmphur'].length]= myOption
				}
			<?
			}
			?>																	
		}
		//**** List Amphur (End) ***//
		
//**** List District (Start) ***//
		function Listdistrict(SelectValue)
		{
			
			frmMain.district_4.length = 0
			//*** Insert null Default Value ***//
			var myOption = new Option('','')  
			frmMain.district_4.options[frmMain.district_4.length]= myOption
			<?
			$intRows = 0;
			$strSQL = "SELECT * FROM district ORDER BY PROVINCE_ID ASC ";
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
			$intRows = 0;
			while($objResult = mysql_fetch_array($objQuery))
			{
			$intRows++;
			?>			
				x = <?=$intRows;?>;
				mySubList = new Array();

				strGroup = <?=$objResult["AMPHUR_ID"];?>;
				strValue = "<?=$objResult["DISTRICT_ID"];?>";
				strItem = "<?=$objResult["DISTRICT_NAME"];?>";
				mySubList[x,0] = strItem;
				mySubList[x,1] = strGroup;
				mySubList[x,2] = strValue;
				if (mySubList[x,1] == SelectValue){
					var myOption = new Option(mySubList[x,0], mySubList[x,2])  
					frmMain.district_4.options[frmMain.district_4.length]= myOption
				}
			<?
			}
			?>																	
		}
		//**** List District (End) ***//
		//-----------------------------------------------------------------------------------------
		//**** List Amphur (Start) ***//
		function ListAmphur_5(SelectValue)
		{
			// document.getElementsByClassName("district").length = 0
			// document.getElementsByClassName("amphur").length = 0
			// document.forms['frmMain']['ddlDistrict'].length = 0
			// document.forms['frmMain']['ddlAmphur'].length = 0
			frmMain.district_5.length = 0
			frmMain.amphur_5.length = 0

			//*** Insert null Default Value ***//
			var myOption = new Option('','')  
			frmMain.amphur_5.options[frmMain.amphur_5.length]= myOption

			// document.getElementsByClassName("amphur").options[document.getElementsByClassName("amphur").length]= myOption

			// document.forms['frmMain']['ddlAmphur'].options[document.forms['frmMain']['ddlAmphur'].length]= myOption

			<?
			$intRows = 0;
			$strSQL = "SELECT * FROM amphur ORDER BY AMPHUR_ID ASC ";
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
			$intRows = 0;
			while($objResult = mysql_fetch_array($objQuery))
			{
			$intRows++;
			?>
				x = <?=$intRows;?>;
				mySubList = new Array();

				strGroup = <?=$objResult["PROVINCE_ID"];?>;
				strValue = "<?=$objResult["AMPHUR_ID"];?>";
				strItem = "<?=$objResult["AMPHUR_NAME"];?>";
				mySubList[x,0] = strItem;
				mySubList[x,1] = strGroup;
				mySubList[x,2] = strValue;

				if (mySubList[x,1] == SelectValue){
					var myOption = new Option(mySubList[x,0], mySubList[x,2])  
					frmMain.amphur_5.options[frmMain.amphur_5.length]= myOption

					// document.getElementsByClassName("amphur").options[document.getElementsByClassName("amphur").length]= myOption					

					// document.forms['frmMain']['ddlAmphur'].options[document.forms['frmMain']['ddlAmphur'].length]= myOption

				}
			<?
			}
			?>																	
		}
		//**** List Amphur (End) ***//
//**** List District (Start) ***//
		function Listdistrict_5(SelectValue)
		{
			
			frmMain.district_5.length = 0

			//*** Insert null Default Value ***//
			var myOption = new Option('','')  
			frmMain.district_5.options[frmMain.district_5.length]= myOption

			<?
			$intRows = 0;
			$strSQL = "SELECT * FROM district ORDER BY PROVINCE_ID ASC ";
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
			$intRows = 0;
			while($objResult = mysql_fetch_array($objQuery))
			{
			$intRows++;
			?>			
				x = <?=$intRows;?>;
				mySubList = new Array();

				strGroup = <?=$objResult["AMPHUR_ID"];?>;
				strValue = "<?=$objResult["DISTRICT_ID"];?>";
				strItem = "<?=$objResult["DISTRICT_NAME"];?>";
				mySubList[x,0] = strItem;
				mySubList[x,1] = strGroup;
				mySubList[x,2] = strValue;
				if (mySubList[x,1] == SelectValue){
					var myOption = new Option(mySubList[x,0], mySubList[x,2])  
					frmMain.district_5.options[frmMain.district_5.length]= myOption
				}
			<?
			}
			?>																	
		}
		//**** List District (End) ***//
		//---------------------------------------------------------------------------
		//**** List Amphur (Start) ***//
		function ListAmphur_7(SelectValue)
		{
			// document.getElementsByClassName("district").length = 0
			// document.getElementsByClassName("amphur").length = 0
			// document.forms['frmMain']['ddlDistrict'].length = 0
			// document.forms['frmMain']['ddlAmphur'].length = 0
			frmMain.district_7.length = 0
			frmMain.amphur_7.length = 0

			//*** Insert null Default Value ***//
			var myOption = new Option('','')  
			frmMain.amphur_7.options[frmMain.amphur_7.length]= myOption

			// document.getElementsByClassName("amphur").options[document.getElementsByClassName("amphur").length]= myOption

			// document.forms['frmMain']['ddlAmphur'].options[document.forms['frmMain']['ddlAmphur'].length]= myOption

			<?
			$intRows = 0;
			$strSQL = "SELECT * FROM amphur ORDER BY AMPHUR_ID ASC ";
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
			$intRows = 0;
			while($objResult = mysql_fetch_array($objQuery))
			{
			$intRows++;
			?>
				x = <?=$intRows;?>;
				mySubList = new Array();

				strGroup = <?=$objResult["PROVINCE_ID"];?>;
				strValue = "<?=$objResult["AMPHUR_ID"];?>";
				strItem = "<?=$objResult["AMPHUR_NAME"];?>";
				mySubList[x,0] = strItem;
				mySubList[x,1] = strGroup;
				mySubList[x,2] = strValue;

				if (mySubList[x,1] == SelectValue){
					var myOption = new Option(mySubList[x,0], mySubList[x,2])  
					frmMain.amphur_7.options[frmMain.amphur_7.length]= myOption

					// document.getElementsByClassName("amphur").options[document.getElementsByClassName("amphur").length]= myOption					

					// document.forms['frmMain']['ddlAmphur'].options[document.forms['frmMain']['ddlAmphur'].length]= myOption

				}
			<?
			}
			?>																	
		}
		//**** List Amphur (End) ***//
		
//**** List District (Start) ***//
		function Listdistrict_7(SelectValue)
		{
			
			frmMain.district_7.length = 0

			//*** Insert null Default Value ***//
			var myOption = new Option('','')  
			frmMain.district_7.options[frmMain.district_7.length]= myOption

			<?
			$intRows = 0;
			$strSQL = "SELECT * FROM district ORDER BY PROVINCE_ID ASC ";
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
			$intRows = 0;
			while($objResult = mysql_fetch_array($objQuery))
			{
			$intRows++;
			?>			
				x = <?=$intRows;?>;
				mySubList = new Array();

				strGroup = <?=$objResult["AMPHUR_ID"];?>;
				strValue = "<?=$objResult["DISTRICT_ID"];?>";
				strItem = "<?=$objResult["DISTRICT_NAME"];?>";
				mySubList[x,0] = strItem;
				mySubList[x,1] = strGroup;
				mySubList[x,2] = strValue;
				if (mySubList[x,1] == SelectValue){
					var myOption = new Option(mySubList[x,0], mySubList[x,2])  
					frmMain.district_7.options[frmMain.district_7.length]= myOption
				}
			<?
			}
			?>																	
		}
		//**** List District (End) ***//

		//**** List Amphur (Start) ***//
		function ListAmphur_11(SelectValue)
		{
			// document.getElementsByClassName("district").length = 0
			// document.getElementsByClassName("amphur").length = 0
			// document.forms['frmMain']['ddlDistrict'].length = 0
			// document.forms['frmMain']['ddlAmphur'].length = 0
			frmMain.district_11.length = 0
			frmMain.amphur_11.length = 0

			//*** Insert null Default Value ***//
			var myOption = new Option('','')  
			frmMain.amphur_11.options[frmMain.amphur_11.length]= myOption

			// document.getElementsByClassName("amphur").options[document.getElementsByClassName("amphur").length]= myOption

			// document.forms['frmMain']['ddlAmphur'].options[document.forms['frmMain']['ddlAmphur'].length]= myOption

			<?
			$intRows = 0;
			$strSQL = "SELECT * FROM amphur ORDER BY AMPHUR_ID ASC ";
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
			$intRows = 0;
			while($objResult = mysql_fetch_array($objQuery))
			{
			$intRows++;
			?>
				x = <?=$intRows;?>;
				mySubList = new Array();

				strGroup = <?=$objResult["PROVINCE_ID"];?>;
				strValue = "<?=$objResult["AMPHUR_ID"];?>";
				strItem = "<?=$objResult["AMPHUR_NAME"];?>";
				mySubList[x,0] = strItem;
				mySubList[x,1] = strGroup;
				mySubList[x,2] = strValue;

				if (mySubList[x,1] == SelectValue){
					var myOption = new Option(mySubList[x,0], mySubList[x,2])  
					frmMain.amphur_11.options[frmMain.amphur_11.length]= myOption

					// document.getElementsByClassName("amphur").options[document.getElementsByClassName("amphur").length]= myOption					

					// document.forms['frmMain']['ddlAmphur'].options[document.forms['frmMain']['ddlAmphur'].length]= myOption

				}
			<?
			}
			?>																	
		}
		//**** List Amphur (End) ***//
		
//**** List District (Start) ***//
		function Listdistrict_11(SelectValue)
		{
			
			frmMain.district_11.length = 0

			//*** Insert null Default Value ***//
			var myOption = new Option('','')  
			frmMain.district_11.options[frmMain.district_11.length]= myOption

			<?
			$intRows = 0;
			$strSQL = "SELECT * FROM district ORDER BY PROVINCE_ID ASC ";
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
			$intRows = 0;
			while($objResult = mysql_fetch_array($objQuery))
			{
			$intRows++;
			?>			
				x = <?=$intRows;?>;
				mySubList = new Array();

				strGroup = <?=$objResult["AMPHUR_ID"];?>;
				strValue = "<?=$objResult["DISTRICT_ID"];?>";
				strItem = "<?=$objResult["DISTRICT_NAME"];?>";
				mySubList[x,0] = strItem;
				mySubList[x,1] = strGroup;
				mySubList[x,2] = strValue;
				if (mySubList[x,1] == SelectValue){
					var myOption = new Option(mySubList[x,0], mySubList[x,2])  
					frmMain.district_11.options[frmMain.district_11.length]= myOption
				}
			<?
			}
			?>																	
		}
		//**** List District (End) ***//
</script>