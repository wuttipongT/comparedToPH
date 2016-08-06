$(document).ready(function(){
	if($("html").attr("id") != ""){$("#customize").css("margin-left","100px");}
	 $("#btn").click(function(){
		 if($('#login').is(":hidden")){
			 $('#login').slideDown('slow');
		 }
	 });

	 $("#up").click(function(){
		 if(!$('#login').is(":hidden")){
			 $('#login').slideUp('slow');
		 }
	 });

	$('#login :submit').click(function(){
		
		var action = $('#login').attr('action');
		var type = $('#type').val();
		var form_data = {
			username: $('.username').val(),
			password: $('.password').val(),
			is_ajax: type 
		};
		if($('.username').val() == "" || $('.password').val() == ""){
			$('#login span').text('กรุณากรอก Username หรือ Password!');
		}else{
			if(type == '0'){//student
				$.ajax({
					type: "POST",
					url: action,
					data: form_data,
					success: function(response){
						if(response == '1'){
							document.location.href = 'index.php';
						}else{
							$('#login span').first().text('Username หรือ Password ไม่ถูกต้อง!');
						}
					}
				});
			}else if(type == '1'){//staff
				$.ajax({
					type: "POST",
					url: action,
					data: form_data,
					success: function(response){
						if(response == '1'){
							document.location.href = 'admin';
						}else{
							$('#login span').first().text('Username หรือ Password ไม่ถูกต้อง!');
						}
					}
				});
			}
		}
		return false;
	});
	$('input[id^="chb_degree"]').click(function(){
			if($(this).is(":checked")){
				$(this).parent().nextAll().removeAttr("disabled");
			}
			if($('input[id="chb_degree1"]').is(":checked")){
				$(this).parent().nextAll().addClass("bord-bott");
				$('input[id="chb_degree2"]').parent().nextAll().attr("disabled", "disabled");
				$('input[id="chb_degree3"]').parent().nextAll().attr("disabled", "disabled");
				$('input[id="chb_degree4"]').parent().nextAll().attr("disabled", "disabled");
		
			}else if($('input[id="chb_degree2"]').is(":checked")){
				$(this).parent().nextAll().addClass("bord-bott");
				$('input[id="chb_degree1"]').parent().nextAll().attr("disabled", "disabled");
				$('input[id="chb_degree3"]').parent().nextAll().attr("disabled", "disabled");
				$('input[id="chb_degree4"]').parent().nextAll().attr("disabled", "disabled");
			
			}else if($('input[id="chb_degree3"]').is(":checked")){
				$(this).parent().nextAll().addClass("bord-bott");
				$('input[id="chb_degree1"]').parent().nextAll().attr("disabled", "disabled");
				$('input[id="chb_degree2"]').parent().nextAll().attr("disabled", "disabled");
				$('input[id="chb_degree4"]').parent().nextAll().attr("disabled", "disabled");

			}else if($('input[id="chb_degree4"]').is(":checked")){
				$(this).parent().nextAll().addClass("bord-bott");
				$('input[id="chb_degree1"]').parent().nextAll().attr("disabled", "disabled");
				$('input[id="chb_degree2"]').parent().nextAll().attr("disabled", "disabled");
				$('input[id="chb_degree3"]').parent().nextAll().attr("disabled", "disabled");
			}
	});
	$('#prename').change(function(){
		if($('#prename option:last').is(":selected")){
			$('#pname').after("<td class=\"pname\">ระบุ</td><td class=\"pname\"><input id=\"prename_other\" name=\"prename_other\" type=\"text\" style=\"width:60px;\" /></td>");
			$("input[name=\"prename_other\"]").val($("#prename_other").val());
		}else{
			$('.pname').remove();
		}
	});

	var countExp = $("#experience tr").size();
	$("#exp-btn").click(function(){
		if(countExp > 10){
			alert("tag input overload");
			return false;
		}
		var tr = $(document.createElement('tr')).attr("id",'td-exp'+countExp);
		tr.after().html('<td>&nbsp;&nbsp;&nbsp;&nbsp;8.'+countExp+'</td><td><input id="exper'+countExp+'" name="exper['+countExp+']" type="text" style="width: 700px;"/></td>');
		tr.appendTo("#experience");
		countExp++;
	 });
	
	$("#exp-remove").click(function(){
		if(countExp < 6){
			alert("not remove");
			return false;
		}
		$("#td-exp"+countExp).remove();
		countExp--;

	});
	
	 var j = $('#skill tr').size();
	 $('#skill-btn').click(function(){
		 if(j>10){
			alert("tag input overload");
			return false;
		 }
		var tr = $(document.createElement('tr')).attr("id",'tr-skill'+j);
		tr.after().html('<td>&nbsp;&nbsp;&nbsp;&nbsp;9.'+j+'</td><td><input id="capability'+j+'" name="capability['+j+']" type="text" style="width: 700px;"/></td>');
		tr.appendTo('#skill');
		j++;
	 });
	 
	$("#skill-remove").click(function(){
		if(j < 6){
			alert("not remove");
			return false;
		}
		$("#tr-skill"+j).remove();
		j--;

	});

	 var k = $('#working tr').size();
	 $('#work-btn').click(function(){
		 if(k>10){
			alert("tag input overload");
			return false;
		 }
		var tr = $(document.createElement('tr')).attr("id",'tr-working'+k);
		tr.after().html('<td>&nbsp;&nbsp;&nbsp;&nbsp;10.'+k+'</td><td><input id="workmanship'+k+'" name="workmanship['+k+']" type="text" style="width: 700px;"/></td>');
		tr.appendTo('#working');
		k++;
	 });
	 
	$("#working-remove").click(function(){
		if(k < 6){
			alert("not remove");
			return false;
		}
		$("#tr-working"+k).remove();
		k--;

	});

	var counter = $('#slider ul li').size();
	var decount = 1;
	var wrapperwidth = $("#slider").width() * $("#slider ul > li").size();
	var width = $("#slider").width();

	$("#slider ul").css("width",wrapperwidth);
	$("#slider ul").css("height","auto");
	$("#slider ul li").css("width",width-10);

	$("#right").click(function(){
		
		if(decount != counter){
			$('#slider ul').animate({left:'-=' + $('#slider').width()}, 400, 'swing', function(){$('html, body').animate({scrollTop:0}, 'slow');});
			decount++;
			//window.location.hash = decount;
			if(decount == 3)$("#_save, #_edit").css("display","inline-block");
		}
	});

	$("#left").click(function(){
		if(decount != 1){
			$('#slider ul').animate({left: '+=' +$('#slider').width()}, 400, 'swing', function(){$('html, body').animate({scrollTop:0}, 'slow');});
			decount--;
			//window.location.hash = decount;
			if(decount != 3)$("#_save, #_edit").css("display","none");
		}
	});
	
	var currentYear = (new Date).getFullYear()+543;
	$("#hidden-acadyear").val(currentYear);
	$('#acadyear').text(currentYear);
	$('.aca-left-arrow').click(function(){
		currentYear = currentYear-1;
		$('#acadyear').text(currentYear);
		$("#hidden-acadyear").val(currentYear);
	});

	$('.aca-right-arrow').click(function(){
		currentYear = currentYear+1;
		$('#acadyear').text(currentYear);
		$("#hidden-acadyear").val(currentYear);
	});
	$('#print').click(function(){
		var sessionid = $('html').attr('id');
		var downloadUrl = "https://docs.google.com/viewer?url=http://comparedtoph.info/report/MyDoc/"+sessionid+".docx&chrome=true";
		window.location = downloadUrl;
		 //$("#loading-div-background").show();
		// $("#print_c").fadeIn(300);
		//$().gdocsViewer();
	});
	$("#download").click(function(){
		var sessionid = $('html').attr('id');
		var downloadUrl = "report/MyDoc/"+sessionid+".docx";
		$.ajax({
				 url: downloadUrl,
				 type:'HEAD',
				error: function(){
					//file not exists
					/*var jqxhr = $.post("report/report_new.php", function(source){
						var downloadUrl = "report/MyDoc/"+source+".docx";
						setTimeout("window.location.assign('" + downloadUrl + "');", 1000);
					});*/
					
					$.ajax( {
						url: 'report/report_new.php',
						type: "POST",
						beforeSend: function() {
							ShowProgressAnimation();
						},
						complete: function() {
							HideProgressAnimation(); 
						},
						success: function(source) {
							var downloadUrl = "report/MyDoc/"+source+".docx";
							setTimeout("window.location.assign('" + downloadUrl + "');", 1000);
						}
					});
				},success: function(){
				//file exists
					setTimeout("window.location.assign('" + downloadUrl + "');", 1000);
				}
		});
	});
	$("#_save, #_edit").click(function(){
		if(!$("input[name=\"provinceroom\"]:radio").is(":checked")){
			csscody.alert("กรุณาเลือกหัองเรียนจังหวัดด้วยค่ะ!");return false;
		}else if(!$("input[name=\"chb_degree\"]:radio").is(":checked")){
			csscody.alert("กรุณาเลือกวุฒิการศึกษาที่ใช้สมัครด้วยค่ะ!");return false;
		}else if($("#img-profile").val() == ''){
			csscody.alert("กรุณาเลือกรูปภาพด้วยครับค่ะ!");return false;
		}else {
			if(($('#sub-grade-category-en').val()=='1') || ($('#sub-grade-category-en').val()=='D') || ($('#sub-grade-category-en').val()=='F') || ($('#sub-grade-category-en').val()=='U') || ($('#sub-grade-category-en').val().length==0)){
				$('#sub-grade-category-en').parent().parent().remove();
			}
			if(($('#sub-grade-category-th').val()=='1') || ($('#sub-grade-category-th').val()=='D') || ($('#sub-grade-category-th').val()=='F') || ($('#sub-grade-category-th').val()=='U') || ($('#sub-grade-category-th').val()==' ')){
				$('#sub-grade-category-th').parent().parent().remove();
			}
			if(($('#sub-grade-category-hu').val()=='1') || ($('#sub-grade-category-hu').val()=='D') || ($('#sub-grade-category-hu').val()=='F') || ($('#sub-grade-category-hu').val()=='U') || ($('#sub-grade-category-hu').val()==' ')){
				$('#sub-grade-category-hu').parent().parent().remove();
			}
			if(($('#sub-grade-category-sc').val()=='1') || ($('#sub-grade-category-sc').val()=='D') || ($('#sub-grade-category-sc').val()=='F') || ($('#sub-grade-category-sc').val()=='U') || ($('#sub-grade-category-sc').val()==' ')){
				$('#sub-grade-category-sc').parent().parent().remove();
			}
			if(($('#sub-grade-category-hea').val()=='1') || ($('#sub-grade-category-hea').val()=='D') || ($('#sub-grade-category-hea').val()=='F') || ($('#sub-grade-category-hea').val()=='U') || ($('#sub-grade-category-hea').val()==' ')){
				$('#sub-grade-category-hea').parent().parent().remove();
			}
			if(($('#sub-grade-category-in').val()=='1') || ($('#sub-grade-category-in').val()=='D') || ($('#sub-grade-category-in').val()=='F') || ($('#sub-grade-category-in').val()=='U') || ($('#sub-grade-category-in').val()==' ')){
				$('#sub-grade-category-in').parent().parent().remove();
			}
			if(($('#sub-grade-category-pro').val()=='1') || ($('#sub-grade-category-pro').val()=='D') || ($('#sub-grade-category-pro').val()=='F') || ($('#sub-grade-category-pro').val()=='U') || ($('#sub-grade-category-pro').val()==' ')){
				$('#sub-grade-category-pro').parent().parent().remove();
			}
			if(($('#sub-grade-category-el-first').val()=='1') || ($('#sub-grade-category-el-first').val()=='D') || ($('#sub-grade-category-el-first').val()=='F') || ($('#sub-grade-category-el-first').val()=='U') || ($('#sub-grade-category-el-first').val()==' ')){
				$('#sub-grade-category-el-first').parent().parent().remove();
			}
			if(($('#sub-grade-category-el-second').val()=='1') || ($('#sub-grade-category-el-second').val()=='D') || ($('#sub-grade-category-el-second').val()=='F') || ($('#sub-grade-category-el-second').val()=='U') || ($('#sub-grade-category-el-second').val()==' ')){
				$('#sub-grade-category-el-second').parent().parent().remove();
			}
			if(($('#sub-grade-category-el-third').val()=='1') || ($('#sub-grade-category-el-third').val()=='D') || ($('#sub-grade-category-el-third').val()=='F') || ($('#sub-grade-category-el-third').val()=='U') || ($('#sub-grade-category-el-third').val()==' ')){
				$('#sub-grade-category-el-third').parent().parent().remove();
			}
			if(($('#sub-grade-category-el-four').val()=='1') || ($('#sub-grade-category-el-four').val()=='D') || ($('#sub-grade-category-el-four').val()=='F') || ($('#sub-grade-category-el-four').val()=='U') || ($('#sub-grade-category-el-four').val()==' ')){
				$('#sub-grade-category-el-four').parent().parent().remove();
			}
			if(($('#sub-grade-category-el-five').val()=='1') || ($('#sub-grade-category-el-five').val()=='D') || ($('#sub-grade-category-el-five').val()=='F') || ($('#sub-grade-category-el-five').val()=='U') || ($('#sub-grade-category-el-five').val()==' ')){
				$('#sub-grade-category-el-five').parent().parent().remove();
			}

			if(($('#sub-grade-category-vo-first').val()=='1') || ($('#sub-grade-category-vo-first').val()=='D') || ($('#sub-grade-category-vo-first').val()=='F') || ($('#sub-grade-category-vo-first').val()=='U') || ($('#sub-grade-category-vo-first').val()==' ')){
				$('#sub-grade-category-vo-first').parent().parent().remove();
			}
			if(($('#sub-grade-category-vo-second').val()=='1') || ($('#sub-grade-category-vo-second').val()=='D') || ($('#sub-grade-category-vo-second').val()=='F') || ($('#sub-grade-category-vo-second').val()=='U') || ($('#sub-grade-category-vo-second').val()==' ')){
				$('#sub-grade-category-vo-second').parent().parent().remove();
			}
			if(($('#sub-grade-category-vo-third').val()=='1') || ($('#sub-grade-category-vo-third').val()=='D') || ($('#sub-grade-category-vo-third').val()=='F') || ($('#sub-grade-category-vo-third').val()=='U') || ($('#sub-grade-category-vo-third').val()==' ')){
				$('#sub-grade-category-vo-third').parent().parent().remove();
			}
			if(($('#sub-grade-category-vo-four').val()=='1') || ($('#sub-grade-category-vo-four').val()=='D') || ($('#sub-grade-category-vo-four').val()=='F') || ($('#sub-grade-category-vo-four').val()=='U') || ($('#sub-grade-category-vo-four').val()==' ')){
				$('#sub-grade-category-vo-four').parent().parent().remove();
			}
			return true;
		}
	});
	$('#type').change(function(){
		if($(this).val()==0){
			$('.username').attr("placeholder","IDCard");
			$('.password').attr("placeholder","Birthday");}
		else if($(this).val()==1){
			$('.username').attr("placeholder","Username");
			$('.password').attr("placeholder","Password");}
	});
	$('#photo').change(function(){
		var imagePath = $('#frmMain').find('input[type=file]').val();
		$('#show-pic').html('<img id="ok" src="file:\\'+imagePath+'" />');
		//alert($("#ok").attr('src'));
	});
	

	function ShowProgressAnimation() { $("#loading-div-background").show();$("#loading-div").show(300);}
	function HideProgressAnimation() {$("#loading-div-background").hide();$("#loading-div").fadeOut(300);} 
});
function pictureUpload() {
        $(document).ready(function() {
            var imagepath = "file:///" + $('#frmMain').find('input[type=file]').val();
			$("#ok").attr("src", imagepath);
            alert(imagepath);
        });
  }
function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function(e) {
			$('#show-pic').html("<img id=\"blah\" src=\"#\" width />");
			$('#blah').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}
function loadData(){
		$.ajax({
				type: 'POST',
				url: 'modules/getdata.php',
				contentType: 'application/json; charset=utf-8',
				dataType: 'json',
				success: function(response){
					var len = $.map(response.eduback , function(n, i) { return i; }).length;
					if(len == 1){
						$.each(response.eduback, function(i, val){
							$('#chb_degree'+val["radio_val"]).prop('checked', true);
							$('.chb_degree[name*="'+val["radio_val"]+'"]').val(val["radio_text"]);
						});
					}else {	
						$('#chb_degree2').prop('checked', true);
						$.each(response.eduback, function(i, val){
							if(i==0)
								$('#diploma1').val(val["radio_text"]);
							if(i==1)
								$('#diploma2').val(val["radio_text"]);
						});
					}
					
					$.each(response.profile, function(i, val){
						$('#provinceroom'+val.prov_room).prop('checked', true);
						$("#prename").find("option:contains('"+val.prename+"')").each(function(){
							 if( $(this).text() == 'นาย' ) {
								$(this).attr("selected","selected");
							 }else if($(this).text() == 'นางสาว'){
								$(this).attr("selected","selected");
							 }else if($(this).text() == 'นาง'){
								$(this).attr("selected","selected");
							 }else if($(this).text() == 'อื่นๆ'){
								$(this).attr("selected","selected");
								$('#pname').after('<td class=\"pname\">ระบุ</td><td class=\"pname\"><input id=\"prename_other\" name=\"prename_other\" type=\"text\" value="'+val.prename+'" style=\"width:60px;\" /></td>');
							 }
						 });
						$('#_name').val(val.name);
						$('#lastname').val(val.lastname);
						var x =[];
						x=val.birthday.split("/");
						$("#birthday").find("option:contains('"+x[0]+"')").each(function(){
							 if( $(this).text() == x[0] ) {
								$(this).attr("selected","selected");
							 }
						 });
						 $("#mount").find("option:contains('"+x[1]+"')").each(function(){
							 if( $(this).text() == x[1] ) {
								$(this).attr("selected","selected");
							 }
						 });
						  $("#year").find("option:contains('"+x[2]+"')").each(function(){
							 if( $(this).text() == x[2] ) {
								$(this).attr("selected","selected");
							 }
						 });
						 $('#age').val(val.age);
						 $('#idcard').val(val.idcard);
						 $('#race').val(val.race);
						 $('#nationality').val(val.nationality);
						 $('#religion').val(val.religion);
						 $('#status').val(val.status);
						 $('#number').val(val.addr);
						 $('#moo').val(val.moo);
						 $('#lane').val(val.lane);
						 $('#road').val(val.road);
						 $('#postcode').val(val.postcode);
						 $('#tel').val(val.tel);
						 $('#phone').val(val.phone);
						 $('#workplace').val(val.workplace);
						 $('#currroad').val(val.wp_road);
						 $('#currpost').val(val.wp_postcode);
						 $('#currtel').val(val.wp_tel);
						 $('#to').val(val.wp_to);
						 $('#currphone').val(val.wp_phone);
						 $('#email').val(val.email);
						 
						 $('#level-pri').val(val.primary);
						 $('#graduate-pri').val(val.pri_graduate);
						
						 $('#gpa-pri').val(val.pri_gpa);
						 $('#level-second').val(val.secondary);
						 $('#graduate-second').val(val.secon_graduate);
						 $('#gpa-second').val(val.secon_gpa);
						 $('#diploma').val(val.diploma);
						 $('#branch').val(val.dip_branch);
						 $('#uni').val(val.dip_ins);

						 $('#graduate-dipl').val(val.dip_graduate);
						 $('#gpa-dipl').val(val.dip_gpa);
						 $('#bachelor').val(val.bachelor);
						 $('#disciplines').val(val.bach_branch);
						 $('#university').val(val.bach_ins);

						 $('#graduate-bache').val(val.bach_graduate);
						 $('#gpa-bache').val(val.bach_gpa);
						 $('#jop').val(val.job);
						 $('#job-lev').val(val.level);
						 $('#depart').val(val.depart);
						 $('#organi').val(val.organi);
 
						 $('#salary').val(val.salary);
						 $('#salary-other').val(val.sal_other);
						 $('#approx').val(val.approx);
						 $('#sum').val(val.sum);
						 $('#pay').val(val.pay);

						 $('#intimate').val(val.intimate);
						 $('#inti-addr').val(val.in_addr);
						 $('#inti-pastcode').val(val.in_postcode);
						 $('#inti-tel').val(val.in_tel);
						 $('#inti-to').val(val.in_to);
						  $('#inti-phone').val(val.in_phone);
						 $('#relation').val(val.relation);
						 
					});	
					$.each(response.expers, function(i, val){
						 $('#exper'+(i+1)).val(val);
					});
					$.each(response.skill, function(i, val){
						 $('#capability'+(i+1)).val(val);
					});
					$.each(response.workings, function(i, val){
						 $('#workmanship'+(i+1)).val(val);
					});
					$.each(response.tranfer, function(i, val){
						if(i==0){
							var x = [];
							$('#change_sub-en').html('<input id="subname-category-en" type="text" style="width: 160px;" class="not" disabled/>');
							x = val["subject_request"].split(" ");
							var data = "";
							for(k=0;k<x.length;k++){
								if(k==0) {
									$('#subid-category-en').val(x[k]);
									$('#subname-hidden-en').val(x[k]);//subjectid
								}
								if(k>0){
									data += x[k]+" ";
									$('#subname-category-en').val(data);
									//$('#subid-hidden-en').val(data);
								}
							}
							$('.subdegree_en'+i).val(val["degree_request"]);
							 $('.subgrade_en'+i).val(val["grade"]);
							 $('.subtran_en'+i).val(val["subject_tranfer"]);
							 $('.subdetran_en'+i).val(val["degree_tranfer"]);
							 $('.subgtran_en'+i).val(val["grade_tranfer"]);
						}
						if(i==1){
							var x = [];
							$('#change_sub-th').html('<input id="subname-category-th" type="text" style="width: 160px;" class="not\" disabled>');
							x = val["subject_request"].split(" ");
							var data = "";
							for(k=0;k<x.length;k++){
								if(k==0) {
									$('#subid-category-th').val(x[k]);
									$('#subname-hidden-th').val(x[k]);
								}
								if(k>0){
									data += x[k]+" ";
									$('#subname-category-th').val(data);
								//	$('#subid-hidden-th').val(data);
								}
							}
							$('#sub-degree-category-th').val(val["degree_request"]);
							 $('#sub-grade-category-th').val(val["grade"]);
							 $('#sub-tranfer-category-th').val(val["subject_tranfer"]);
							 $('#sub-degree-tranfer-category-th').val(val["degree_tranfer"]);
							 $('#sub-grade-tranfer-category-th').val(val["grade_tranfer"]);
							 $('#sub-tranfer-category-th').attr("title", val["subject_tranfer"]);
						}
						if(i==2){
							var x = [];
							$('#change_sub-hu').html('<input id="subname-category-hu" type="text" style="width: 160px;" class="not\" disabled>');
							x = val["subject_request"].split(" ");
							var data = "";
							for(k=0;k<x.length;k++){
								if(k==0) {
									$('#subid-category-hu').val(x[k]);
									$('#subname-hidden-hu').val(x[k]);
								}
								if(k>0){
									data += x[k]+" ";
									$('#subname-category-hu').val(data);
									//$('#subid-hidden-hu').val(data);
								}
							}
							$('#sub-degree-category-hu').val(val["degree_request"]);
							 $('#sub-grade-category-hu').val(val["grade"]);
							 $('#sub-tranfer-category-hu').val(val["subject_tranfer"]);
							 $('#sub-degree-tranfer-category-hu').val(val["degree_tranfer"]);
							 $('#sub-grade-tranfer-category-hu').val(val["grade_tranfer"]);
							 $('#sub-tranfer-category-hu').attr("title", val["subject_tranfer"]);
						}
						if(i==3){
							var x = [];
							$('#change_sub-sc').html('<input id="subname-category-sc" type="text" style="width: 160px;" class="not\" disabled>');
							x = val["subject_request"].split(" ");
							var data = "";
							for(k=0;k<x.length;k++){
								if(k==0) {
									$('#subid-category-sc').val(x[k]);
									$('#subname-hidden-sc').val(x[k]);
								}
								if(k>0){
									data += x[k]+" ";
									$('#subname-category-sc').val(data);
									//$('#subid-hidden-sc').val(data);
								}
							}
							$('#sub-degree-category-sc').val(val["degree_request"]);
							 $('#sub-grade-category-sc').val(val["grade"]);
							 $('#sub-tranfer-category-sc').val(val["subject_tranfer"]);
							 $('#sub-degree-tranfer-category-sc').val(val["degree_tranfer"]);
							 $('#sub-grade-tranfer-category-sc').val(val["grade_tranfer"]);
							 $('#sub-tranfer-category-sc').attr("title", val["subject_tranfer"]);
						}
							 if(i==4){
							var x = [];
							$('#change_sub-hea').html('<input id="subname-category-hea" type="text" style="width: 160px;" class="not\" disabled>');
							x = val["subject_request"].split(" ");
							var data = "";
							for(k=0;k<x.length;k++){
								if(k==0) {
									$('#subid-category-hea').val(x[k]);
									$('#subname-hidden-hea').val(x[k]);
								}
								if(k>0){
									data += x[k]+" ";
									$('#subname-category-hea').val(data);
									//$('#subid-hidden-hea').val(data);
								}
							}
							$('#sub-degree-category-hea').val(val["degree_request"]);
							 $('#sub-grade-category-hea').val(val["grade"]);
							 $('#sub-tranfer-category-hea').val(val["subject_tranfer"]);
							 $('#sub-degree-tranfer-category-hea').val(val["degree_tranfer"]);
							 $('#sub-grade-tranfer-category-hea').val(val["grade_tranfer"]);
							 $('#sub-tranfer-category-hea').attr("title", val["subject_tranfer"]);
						}
							 if(i==5){
							var x = [];
							$('#change_sub-in').html('<input id="subname-category-in" type="text" style="width: 160px;" class="not\" disabled>');
							x = val["subject_request"].split(" ");
							var data = "";
							for(k=0;k<x.length;k++){
								if(k==0) {
									$('#subid-category-in').val(x[k]);
									$('#subname-hidden-in').val(x[k]);
								}
								if(k>0){
									data += x[k]+" ";
									$('#subname-category-in').val(data);
								//	$('#subid-hidden-in').val(data);
								}
							}
							$('#sub-degree-category-in').val(val["degree_request"]);
							 $('#sub-grade-category-in').val(val["grade"]);
							 $('#sub-tranfer-category-in').val(val["subject_tranfer"]);
							 $('#sub-degree-tranfer-category-in').val(val["degree_tranfer"]);
							 $('#sub-grade-tranfer-category-in').val(val["grade_tranfer"]);
							 $('#sub-tranfer-category-in').attr("title", val["subject_tranfer"]);
						}
							  if(i==6){
							var x = [];
							$('#change_sub-pro').html('<input id="subname-category-pro" type="text" style="width: 160px;" class="not\" disabled>');
							x = val["subject_request"].split(" ");
							var data = "";
							for(k=0;k<x.length;k++){
								if(k==0) {
									$('#subid-category-pro').val(x[k]);
									$('#subname-hidden-pro').val(x[k]);
								}
								if(k>0){
									data += x[k]+" ";
									$('#subname-category-pro').val(data);
									//$('#subid-hidden-pro').val(data);
								}
							}
							$('#sub-degree-category-pro').val(val["degree_request"]);
							 $('#sub-grade-category-pro').val(val["grade"]);
							 $('#sub-tranfer-category-pro').val(val["subject_tranfer"]);
							 $('#sub-degree-tranfer-category-pro').val(val["degree_tranfer"]);
							 $('#sub-grade-tranfer-category-pro').val(val["grade_tranfer"]);
							 $('#sub-tranfer-category-pro').attr("title", val["subject_tranfer"]);
						}
						if(i==7){
							var x = [];
							$('#change_sub-el-first').html('<input id="subname-category-el-first" type="text" style="width: 160px;" class="not\" disabled>');
							x = val["subject_request"].split(" ");
							var data = "";
							for(k=0;k<x.length;k++){
								if(k==0) {
									$('#subid-category-el-first').val(x[k]);
									$('#subname-hidden-el-first').val(x[k]);
								}
								if(k>0){
									data += x[k]+" ";
									$('#subname-category-el-first').val(data);
								//	$('#subid-hidden-el-first').val(data);
								}
							}
							$('#sub-degree-category-el-first').val(val["degree_request"]);
							 $('#sub-grade-category-el-first').val(val["grade"]);
							 $('#sub-tranfer-category-el-first').val(val["subject_tranfer"]);
							 $('#sub-degree-tranfer-category-el-first').val(val["degree_tranfer"]);
							 $('#sub-grade-tranfer-category-el-first').val(val["grade_tranfer"]);
							 $('#sub-tranfer-category-el-first').attr("title", val["subject_tranfer"]);
						}
						if(i==8){
							var x = [];
							$('#change_sub-el-second').html('<input id="subname-category-el-second" type="text" style="width: 160px;" class="not\" disabled>');
							x = val["subject_request"].split(" ");
							var data = "";
							for(k=0;k<x.length;k++){
								if(k==0) {
									$('#subid-category-el-second').val(x[k]);
									$('#subname-hidden-el-second').val(x[k]);
								}
								if(k>0){
									data += x[k]+" ";
									$('#subname-category-el-second').val(data);
									//$('#subid-hidden-el-second').val(data);
								}
							}
							$('#sub-degree-category-el-second').val(val["degree_request"]);
							 $('#sub-grade-category-el-second').val(val["grade"]);
							 $('#sub-tranfer-category-el-second').val(val["subject_tranfer"]);
							 $('#sub-degree-tranfer-category-el-second').val(val["degree_tranfer"]);
							 $('#sub-grade-tranfer-category-el-second').val(val["grade_tranfer"]);
							 $('#sub-tranfer-category-el-second').attr("title", val["subject_tranfer"]);
						}
						if(i==9){
							var x = [];
							$('#change_sub-el-third').html('<input id="subname-category-el-third" type="text" style="width: 160px;" class="not\" disabled>');
							x = val["subject_request"].split(" ");
							var data = "";
							for(k=0;k<x.length;k++){
								if(k==0) {
									$('#subid-category-el-third').val(x[k]);
									$('#subname-hidden-el-thrid').val(x[k]);
								}
								if(k>0){
									data += x[k]+" ";
									$('#subname-category-el-third').val(data);
									//$('#subid-hidden-el-third').val(data);
								}
							}
							$('#sub-degree-category-el-third').val(val["degree_request"]);
							 $('#sub-grade-category-el-third').val(val["grade"]);
							 $('#sub-tranfer-category-el-third').val(val["subject_tranfer"]);
							 $('#sub-degree-tranfer-category-el-third').val(val["degree_tranfer"]);
							 $('#sub-grade-tranfer-category-el-third').val(val["grade_tranfer"]);
							 $('#sub-tranfer-category-el-third').attr("title", val["subject_tranfer"]);
						}
						if(i==10){
							var x = [];
							$('#change_sub-el-four').html('<input id="subname-category-el-four" type="text" style="width: 160px;" class="not\" disabled>');
							x = val["subject_request"].split(" ");
							var data = "";
							for(k=0;k<x.length;k++){
								if(k==0) {
									$('#subid-category-el-four').val(x[k]);
									$('#subname-hidden-el-four').val(x[k]);
								}
								if(k>0){
									data += x[k]+" ";
									$('#subname-category-el-four').val(data);
									//$('#subid-hidden-el-four').val(data);
								}
							}
							$('#sub-degree-category-el-four').val(val["degree_request"]);
							 $('#sub-grade-category-el-four').val(val["grade"]);
							 $('#sub-tranfer-category-el-four').val(val["subject_tranfer"]);
							 $('#sub-degree-tranfer-category-el-four').val(val["degree_tranfer"]);
							 $('#sub-grade-tranfer-category-el-four').val(val["grade_tranfer"]);
							 $('#sub-tranfer-category-el-four').attr("title", val["subject_tranfer"]);
						}
						if(i==11){
							var x = [];
							$('#change_sub-el-five').html('<input id="subname-category-el-five" type="text" style="width: 160px;" class="not\" disabled>');
							x = val["subject_request"].split(" ");
							var data = "";
							for(k=0;k<x.length;k++){
								if(k==0) {
									$('#subid-category-el-five').val(x[k]);
									$('#subname-hidden-el-five').val(x[k]);
								}
								if(k>0){
									data += x[k]+" ";
									$('#subname-category-el-five').val(data);
									//$('#subid-hidden-el-five').val(data);
								}
							}
							$('#sub-degree-category-el-five').val(val["degree_request"]);
							 $('#sub-grade-category-el-five').val(val["grade"]);
							 $('#sub-tranfer-category-el-five').val(val["subject_tranfer"]);
							 $('#sub-degree-tranfer-category-el-five').val(val["degree_tranfer"]);
							 $('#sub-grade-tranfer-category-el-five').val(val["grade_tranfer"]);
							 $('#sub-tranfer-category-el-five').attr("title", val["subject_tranfer"]);
						}
						if(i==12){
							var x = [];
							$('#change_sub-vo-first').html('<input id="subname-category-vo-first" type="text" style="width: 160px;" class="not\" disabled>');
							x = val["subject_request"].split(" ");
							var data = "";
							for(k=0;k<x.length;k++){
								if(k==0) {
									$('#subid-category-vo-first').val(x[k]);
									$('#subname-hidden-vo-first').val(x[k]);
								}
								if(k>0){
									data += x[k]+" ";
									$('#subname-category-vo-first').val(data);
								//	$('#subid-hidden-vo-first').val(data);
								}
							}
							$('#sub-degree-category-vo-first').val(val["degree_request"]);
							 $('#sub-grade-category-vo-first').val(val["grade"]);
							 $('#sub-tranfer-category-vo-first').val(val["subject_tranfer"]);
							 $('#sub-degree-tranfer-category-vo-first').val(val["degree_tranfer"]);
							 $('#sub-grade-tranfer-category-vo-first').val(val["grade_tranfer"]);
							 $('#sub-tranfer-category-vo-first').attr("title", val["subject_tranfer"]);
						}
						if(i==13){
							var x = [];
							$('#change_sub-vo-second').html('<input id="subname-category-vo-second" type="text" style="width: 160px;" class="not\" disabled>');
							x = val["subject_request"].split(" ");
							var data = "";
							for(k=0;k<x.length;k++){
								if(k==0) {
									$('#subid-category-vo-second').val(x[k]);
									$('#subname-hidden-vo-second').val(x[k]);
								}
								if(k>0){
									data += x[k]+" ";
									$('#subname-category-vo-second').val(data);
								//	$('#subid-hidden-vo-second').val(data);
								}
							}
							$('#sub-degree-category-vo-second').val(val["degree_request"]);
							 $('#sub-grade-category-vo-second').val(val["grade"]);
							 $('#sub-tranfer-category-vo-second').val(val["subject_tranfer"]);
							 $('#sub-degree-tranfer-category-vo-second').val(val["degree_tranfer"]);
							 $('#sub-grade-tranfer-category-vo-second').val(val["grade_tranfer"]);
							 $('#sub-tranfer-category-vo-second').attr("title", val["subject_tranfer"]);
						}
						if(i==14){
							var x = [];
							$('#change_sub-vo-third').html('<input id="subname-category-vo-third" type="text" style="width: 160px;" class="not\" disabled>');
							x = val["subject_request"].split(" ");
							var data = "";
							for(k=0;k<x.length;k++){
								if(k==0) {
									$('#subid-category-vo-third').val(x[k]);
									$('#subname-hidden-vo-third').val(x[k]);
								}
								if(k>0){
									data += x[k]+" ";
									$('#subname-category-vo-third').val(data);
									//$('#subid-hidden-vo-third').val(data);
								}
							}
							$('#sub-degree-category-vo-third').val(val["degree_request"]);
							 $('#sub-grade-category-vo-third').val(val["grade"]);
							 $('#sub-tranfer-category-vo-third').val(val["subject_tranfer"]);
							 $('#sub-degree-tranfer-category-vo-third').val(val["degree_tranfer"]);
							 $('#sub-grade-tranfer-category-vo-third').val(val["grade_tranfer"]);
							 $('#sub-tranfer-category-vo-third').attr("title", val["subject_tranfer"]);
						}
						if(i==15){
							var x = [];
							$('#change_sub-vo-four').html('<input id="subname-category-vo-four" type="text" style="width: 160px;" class="not\" disabled>');
							x = val["subject_request"].split(" ");
							var data = "";
							for(k=0;k<x.length;k++){
								if(k==0) {
									$('#subid-category-vo-four').val(x[k]);
									$('#subname-hidden-vo-four').val(x[k]);
								}
								if(k>0){
									data += x[k]+" ";
									$('#subname-category-vo-four').val(data);
									//$('#subid-hidden-vo-four').val(data);
								}
							}
							$('#sub-degree-category-vo-four').val(val["degree_request"]);
							 $('#sub-grade-category-vo-four').val(val["grade"]);
							 $('#sub-tranfer-category-vo-four').val(val["subject_tranfer"]);
							 $('#sub-degree-tranfer-category-vo-four').val(val["degree_tranfer"]);
							 $('#sub-grade-tranfer-category-vo-four').val(val["grade_tranfer"]);
							 $('#sub-tranfer-category-vo-four').attr("title", val["subject_tranfer"]);
						}
					});
				}
			});
}