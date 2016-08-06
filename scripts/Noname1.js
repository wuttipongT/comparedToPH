	
 
 
	
	/*9*/	$('#subid-category-el-second').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					$.post("modules/numrows.php", {subID: $('#subid-category-el-second').val(), is_ajax: 1}, function(rs){
						var _send = {subID: $('#subid-category-el-second').val() };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-el-second').html("<input id=\"subname-category-el-second\" name=\"category-el-second[]\" type=\"text\" style=\"width: 160px; vertical-align:middle;\" class=\"not\"/>");
									//add value
									$('#subname-category-el-second').val(response['subName']);
									$('#sub-degree-category-el-second').val(response['degree_first']);
									$("#sub-tranfer-category-el-second").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-el-second").val(response['subDegree_tranfer']);
									$("#subname-hidden-en").val(response['subName']);
									//hint
									$("#subname-category-el-el-second").attr("title", response['subName']);
									$("#sub-tranfer-category-el-second").attr("title", response['subID_tranfer']+" "+response['subName_tranfer']);
								}
							});
						}else {
							$.ajax({
								data: _send, 
								url: 'modules/_tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-el-second').html("<select id=\"subname-category-el-second\" name=\"category-el-second[]\" style=\"width:160px;padding:4px;border:none;\"></select>");
									//add value
									var x;
									var y = [];
									$.each(response.Subname, function(index, value){
										x = value.split("/");
										y.push(x[1])
										$("#subname-category-el-second").append($('<option>', {
											value: index,
											text : x[0] 
										}));
									});
									$("#subname-category-el-second").change(function(){
										$('#sub-degree-category-el-second').val(y[$(this).find("option:selected").val()]);
										$("#subname-hidden-el-second").val($(this).find("option:selected").text());
									});
									$('#sub-degree-category-el-second').val(y[0]);
									$("#sub-tranfer-category-el-second").val(response.Tranfer['0']+" "+response.Tranfer['1']);
									$("#sub-degree-tranfer-category-el-second").val(response.Tranfer['2']);

									$("#sub-tranfer-category-el-second").attr("title", response.Tranfer['0']+" "+response.Tranfer['1']);
								}
							});
						}
					});
				}
			});
	
	
  
  /*14*/	$('#subid-category-vo-second').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					$.post("modules/numrows.php", {subID: $('#subid-category-vo-second').val(), is_ajax: 1}, function(rs){
						var _send = {subID: $('#subid-category-vo-second').val() };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-vo-second').html("<input id=\"subname-category-vo-second\" name=\"category-vo-second[]\" type=\"text\" class=\"not\" style=\"width: 160px; vertical-align:middle;\"/>");
									//add value
									$('#subname-category-vo-second').val(response['subName']);
									$('#sub-degree-category-vo-second').val(response['degree_first']);
									$("#sub-tranfer-category-vo-second").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-vo-second").val(response['subDegree_tranfer']);
									$("#subname-hidden-vo-second").val(response['subName']);
									//hint
									$("#subname-category-vo-second").attr("title", response['subName']);
									$("#sub-tranfer-category-vo-second").attr("title", response['subID_tranfer']+" "+response['subName_tranfer']);
								}
							});
						}else {
							$.ajax({
								data: _send, 
								url: 'modules/_tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-vo-second').html("<select id=\"subname-category-vo-second\" name=\"category-vo-second[]\" style=\"width:160px;padding:4px;border:none;\"></select>");
									//add value
									var x;
									var y = [];
									$.each(response.Subname, function(index, value){
										x = value.split("/");
										y.push(x[1])
										$("#subname-category-vo-second").append($('<option>', {
											value: index,
											text : x[0] 
										}));
									});
									$("#subname-category-vo-second").change(function(){
										$('#sub-degree-category-vo-second').val(y[$(this).find("option:selected").val()]);
										$("#subname-hidden-vo-second").val($(this).find("option:selected").text());
									});
									$('#sub-degree-category-vo-second').val(y[0]);
									$("#sub-tranfer-category-vo-second").val(response.Tranfer['0']+" "+response.Tranfer['1']);
									$("#sub-degree-tranfer-category-vo-second").val(response.Tranfer['2']);

									$("#sub-tranfer-category-vo-second").attr("title", response.Tranfer['0']+" "+response.Tranfer['1']);
								}
							});
						}
					});
				}
			});
	/*15*/	$('#subid-category-vo-third').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					$.post("modules/numrows.php", {subID: $('#subid-category-vo-third').val(), is_ajax: 1}, function(rs){
						var _send = {subID: $('#subid-category-vo-third').val() };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-vo-third').html("<input id=\"subname-category-vo-third\" name=\"category-vo-third[]\" type=\"text\" class=\"not\" style=\"width: 160px; vertical-align:middle;\"/>");
									//add value
									$('#subname-category-vo-third').val(response['subName']);
									$('#sub-degree-category-vo-third').val(response['degree_first']);
									$("#sub-tranfer-category-vo-third").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-vo-third").val(response['subDegree_tranfer']);
									$("#subname-hidden-vo-third"").val(response['subName']);
									//hint
									$("#subname-category-vo-third").attr("title", response['subName']);
									$("#sub-tranfer-category-vo-third").attr("title", response['subID_tranfer']+" "+response['subName_tranfer']);
								}
							});
						}else {
							$.ajax({
								data: _send, 
								url: 'modules/_tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-vo-third').html("<select id=\"subname-category-vo-third\" name=\"category-vo-third[]\" style=\"width:160px;padding:4px;border:none;\"></select>");
									//add value
									var x;
									var y = [];
									$.each(response.Subname, function(index, value){
										x = value.split("/");
										y.push(x[1])
										$("#subname-category-vo-third").append($('<option>', {
											value: index,
											text : x[0] 
										}));
									});
									$("#subname-category-vo-third").change(function(){
										$('#sub-degree-category-vo-third').val(y[$(this).find("option:selected").val()]);
										$("#subname-hidden-vo-third'").val($(this).find("option:selected").text());
									});
									$('#sub-degree-category-vo-third').val(y[0]);
									$("#sub-tranfer-category-vo-third").val(response.Tranfer['0']+" "+response.Tranfer['1']);
									$("#sub-degree-tranfer-category-vo-third").val(response.Tranfer['2']);

									$("#sub-tranfer-category-vo-third").attr("title", response.Tranfer['0']+" "+response.Tranfer['1']);
								}
							});
						}
					});
				}
			});
  /*16*/	$('#subid-category-vo-four').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					$.post("modules/numrows.php", {subID: $('#subid-category-vo-four').val(), is_ajax: 1}, function(rs){
						var _send = {subID: $('#subid-category-vo-four').val() };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-vo-four').html("<input id=\"subname-category-vo-four\" name=\"category-vo-four[]\" type=\"text\" class=\"not\" style=\"width: 160px; vertical-align:middle;\"/>");
									//add value
									$('#subname-category-vo-four').val(response['subName']);
									$('#sub-degree-category-vo-four').val(response['degree_first']);
									$("#sub-tranfer-category-vo-four").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-vo-four").val(response['subDegree_tranfer']);
									$("#subname-hidden-vo-four").val(response['subName']);
									//hint
									$("#subname-category-vo-four").attr("title", response['subName']);
									$("#sub-tranfer-category-vo-four").attr("title", response['subID_tranfer']+" "+response['subName_tranfer']);
								}
							});
						}else {
							$.ajax({
								data: _send, 
								url: 'modules/_tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-vo-four').html("<select id=\"subname-category-vo-four\" name=\"category-vo-four[]\" style=\"width:160px;padding:4px;border:none;\"></select>");
									//add value
									var x;
									var y = [];
									$.each(response.Subname, function(index, value){
										x = value.split("/");
										y.push(x[1])
										$("#subname-category-vo-four").append($('<option>', {
											value: index,
											text : x[0] 
										}));
									});
									$("#subname-category-vo-four").change(function(){
										$('#sub-degree-category-vo-four').val(y[$(this).find("option:selected").val()]);
										$("#subname-hidden-vo-four").val($(this).find("option:selected").text());
									});
									$('#sub-degree-category-vo-four').val(y[0]);
									$("#sub-tranfer-category-vo-four").val(response.Tranfer['0']+" "+response.Tranfer['1']);
									$("#sub-degree-tranfer-category-vo-four").val(response.Tranfer['2']);

									$("#sub-tranfer-category-vo-four").attr("title", response.Tranfer['0']+" "+response.Tranfer['1']);
								}
							});
						}
					});
				}
			});