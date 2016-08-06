/**
 * @author bed wuttipong
 */
 $(document).ready(function() {     
  $.ajax({
			url: "../../modules/getCategory.php",
			contentType: "application/json; charset=utf-8",
			dataType: "json",
			success: function(response){
				$.each(response, function(index, value){
					$("#select-category").append($('<option>', {
						value: index+1,
						text : value 
					}));
				});
			}
		});
	$.ajax({
		url: "../../modules/getSubTranfer.php",
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function(response){
			var sub;
			$.each(response, function(index, value){
				sub = value.split("/");
				$("#select-tranfer").append($('<option>', {
					value: sub[0],
					text : sub[1] 
				}));
			});
		}
	});
	$.ajax({
		url: "../../modules/getCategory.php",
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function(response){
			$.each(response, function(index, value){
				$("#tranfer_category").append($('<option>', {
					value: index+1,
					text : value 
				}));
			});
		}
	});

	$("#btn-add-sub").click(function(e) {
		$( ".dialog-op" ).dialog("open");
	});
	
	$('#btn-add-tran-sub').click(function(){
		$(".dialog-add-tranfer").dialog("open");
	});
	
	$('#btn-add-category').click(function(){
		$(".dialog-add-category").dialog("open");
	});
	$(".dialog-op").dialog({
		show: "slow",
		title: "เพิ่มข้อมูลรายวิชา",
		bgiframe: true,
		autoOpen: false, 
		height: "auto",
		width: "auto",
		resizable: true, 
		modal: true
	});

	$(".dialog-add-tranfer").dialog({
		show: "slow",
		title: "เพิ่มข้อมูลรายวิชาที่เทียบโอน",
		bgiframe: true,
		autoOpen: false, 
		height: "auto",
		width: "450",
		resizable: true, 
		modal: true
	});

	$(".dialog-add-category").dialog({
		show: "slow",
		title: "เพิ่มหมวดหมู่รายวิชา",
		bgiframe: true,
		autoOpen: false, 
		height: "auto",
		width: "450",
		resizable: true, 
		modal: true
	});

	var countSubid = $('input[id^=subid]').size();
	$("#add-subid-dialog").click(function(){
		countSubid++;
		var tr = $(document.createElement('tr')).attr("id","tr-subid"+countSubid);
		tr.after().html('<td colspan="2" align="right"><input id="subid'+countSubid+'" type="text" class="highlight" style="width: 250px; height: 30px;display:block;" /></td>');
		tr.appendTo('#table-subid');

		var tr2 = $(document.createElement('tr')).attr("id","tr-degree"+countSubid);
		tr2.after().html('<td colspan="2" align="right"><input id="degree'+countSubid+'" type="text" class="highlight" style="width: 250px; height: 30px;display:block;" /></td>');
		tr2.appendTo('#table-degree');
	});


	$("#remove-subid-dialog").click(function(){
		$('#tr-subid'+countSubid).remove();
		$('#tr-degree'+countSubid).remove();
		countSubid--;
	});

	var countSubname = $('input[id^=subname]').size();
	$("#add-subname-dialog").click(function(){
		countSubname++;
		var tr1 = $(document.createElement('tr')).attr("id","tr-subname"+countSubname);
		tr1.after().html('<td colspan="2" align="right"><input id="subname'+countSubname+'" type="text" class="highlight" style="width: 250px; height: 30px;display:block;" /></td>');
		tr1.appendTo('#table-subname');
	});

	$("#remove-subname-dialog").click(function(){
		$('#tr-subname'+countSubname).remove();
		countSubname--;
	});

	$('#close-addsub').click(function(){$('.dialog-op').dialog( "close" );});
	$('#tran_close').click(function(){$('.dialog-add-tranfer').dialog( "close" );});
	$('#category_close').click(function(){$('.dialog-add-category').dialog( "close" );});

	$( "#tabs" ).tabs();
		/*
	$.ajax( {
			url: 'student.php',
			type: "POST",
			beforeSend: function() {
				$("#tabs-1").html('<img src="../images/GsNJNwuI-UM.gif" style="display:block;text-align:center;vertical-align:middle;"/>');
			},
			success: function(source) {
				$("#tabs-1").html(source);
			}
		});
$('#subjects').click(function(){
		$.get("subject.php", 
				function(data){
					$("#tabs-2").html(data);
				}
		);
	});
	
	$("#tranfer-data").click(function(){
		$.post("tranfer.php", function(source){
			$("#tabs-3").html(source);
		});
	});
	*/
	$("#category").click(function(){
		$.ajax( {
				url: 'category.php',
				type: "POST",
				beforeSend: function() {
					$("#tabs-4").html('<img src="../images/GsNJNwuI-UM.gif" style="display:block;text-align:center;vertical-align:middle;"/>');
				},
				success: function(source) {
					$("#tabs-4").html(source);
				}
			});
	});
	$("form[name='form-sub-add'] :submit").click(function(){
		var subid = new Array();
		var degree = new Array();
		for(i=1;i<=countSubid;i++){
			subid.push($('#subid'+i).val());
			degree.push($('#degree'+i).val());
		}
		var subname = new Array();
		
		for(j=1;j<=countSubname;j++){
			subname.push($('#subname'+j).val());
			
		}
		var deta = {
			subID: subid,
			subName: subname,
			subDegree: degree,
			subCategory: $('#select-category').val(),
			tranID: $('#select-tranfer').val(),
			is_ajax: 1

		};
		$.ajax({
				url: 'addsubject.php',
				type: 'POST',
				//contentType: 'application/json;charset=utf-8',
				data: deta,
				success: function(source, status){
					if(status){$(".dialog-op").dialog("close");}
				}
			//, processData: false //Doesn't help
		});
		return false;
	});
	$( ".dialog-op").dialog({
		close: function(event, ui) {
			for(i=1;i<=countSubid;i++){
				$('#subid'+i).val('');
			}
			for(j=1;j<=countSubname;j++){
				$('#subname'+j).val('');
				$('#degree'+j).val('');
			}
		}
	});
	$("form[id=\"form_tranfer\"] :submit").click(function(){
		var _data = {
			tran_subid: $("#tranfer_subid").val(),
			tran_subname: $("#tranfer_subname").val(),
			tran_degree: $("#tranfer_degree").val(),
			tran_category: $("#tranfer_category").val(),
			is_ajax: 1
		};
			alert($("#tranfer_subid").val()+$("#tranfer_subname").val()+$("#tranfer_degree").val()+$("#tranfer_category").val());
		$.ajax({
			url: 'add_tranfer.php',
			type: 'POST',
			//contentType: 'application/json;charset=utf-8',
			data: _data,
			success: function(source, status){
				if(status){$(".dialog-add-tranfer").dialog("close");}
			}
		//, processData: false //Doesn't help
		});
		return false;
	});
	$( ".dialog-add-tranfer").dialog({
		close: function(event, ui) {$("#tranfer_subid").val('');$("#tranfer_subname").val('');$("#tranfer_degree").val('')}
	});
	$("#form-cate :submit").click(function(){
		$.post("add_category.php",{is_ajax: 1, category: $('#_category').val()}, function(source, status){
			if(status){$(".dialog-add-category").dialog("close");}
		});
		return false;
	});	
	$( ".dialog-add-category").dialog({
		close: function(event, ui) {$('#_category').val('');}
	});
	function numrows(handleData){
		$.post("numrows.php", {is_ajax: 0}, function(response){handleData(response);});
	}
	numrows(function(total){
		var limit = 10;
		$("#paging").pagination({
			items: total,
			itemsOnPage: limit,
			cssStyle: 'light-theme',
			currentPage: 1,
			onPageClick: function(p, e){
				$.ajax({
					type: 'POST',
					url: 'subject.php?start='+limit*(p-1)+'&limit='+limit,
					success: function(response){
						$("#content").html(response);
					}
				});	
			},
			onInit: function(){
				var p = $('#paging').pagination('getCurrentPage');
				$.ajax({
					type: 'POST',
					url: 'subject.php?start='+limit*(p-1)+'&limit='+limit,
					success: function(response){
						$("#content").html(response);
					}
				});
			}
		});
	});
	function subnum(handleData){
		$.post("numrows.php", {is_ajax: 2}, function(response){handleData(response);});
	}
	subnum(function(total){
		var limit = 10;
		$("#tran_paging").pagination({
			items: total,
			itemsOnPage: limit,
			cssStyle: 'light-theme',
			currentPage: 1,
			onPageClick: function(p, e){
				$.ajax({
					type: 'POST',
					url: 'tranfer.php?start='+limit*(p-1)+'&limit='+limit,
					success: function(response){
						$("#tran_content").html(response);
					}
				});	
			},
			onInit: function(){
				var p = $('#tran_paging').pagination('getCurrentPage');
				$.ajax({
					type: 'POST',
					url: 'tranfer.php?start='+limit*(p-1)+'&limit='+limit,
					success: function(response){
						$("#tran_content").html(response);
					}
				});
			}
		});
	});
	var currentYear = (new Date).getFullYear()+543;
	stdOnload(currentYear);
	$('#acadyear').text(currentYear);
	$('.arrow-left').click(function(){
		currentYear = currentYear-1;
		stdOnload(currentYear);
		$('#acadyear').text(currentYear);
	});

	$('.arrow-right').click(function(){
		currentYear = currentYear+1;
		stdOnload(currentYear);
		$('#acadyear').text(currentYear);
	});
});

function stdOnload(str){
	
		numStd(function(numrows){
			var limit = 10;
			$("#std_paging").pagination({
				items: numrows,
				itemsOnPage: limit,
				cssStyle: 'light-theme',
				currentPage: 1,
				onPageClick: function(p, e){
					$.ajax({
						type: 'POST',
						url: 'student.php?start='+limit*(p-1)+'&limit='+limit+'&acadyear='+str,
						success: function(response){
							$("#std_content").html(response);
						}
					});	
				},
				onInit: function(){
					var p = $('#std_paging').pagination('getCurrentPage');
					$.ajax({
						type: 'POST',
						url: 'student.php?start='+limit*(p-1)+'&limit='+limit+'&acadyear='+str,
						success: function(response){
							$("#std_content").html(response);
						}
					});	
				}
			});
		},str);
}
function numStd(handleData,data){
		$.post("numrows.php", {is_ajax: 1, acadyear:data}, function(response){handleData(response);});
}