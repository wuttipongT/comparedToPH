/*jslint  browser: true, white: true, plusplus: true */
/*global $: true */

$(function () {

	 // Load countries then initialize plugin:
	$.ajax({
		url: 'modules/autocom.php',
		contentType: 'application/json; charset=utf-8',
		dataType: 'json',
		success: function (source){
			/*
			var obj = { };
			var data_split;
			$.each(source, function(i,val){
				data_split = val.split("/");
				obj[data_split[0]] = data_split[1];
			});*/
			var countriesArray = $.map(source.subName , function (value, key) { return { value: value, data: key }; });
			//var countriesArray = $.map(source, function (val, i) {return { value: val.subName, id: index.val };});
			//alert(dump(countriesArray));
			// Initialize autocomplete with local lookup:
	/*1*/	$('#subid-category-en').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					var key;
					$.each(source.subID, function (index, value) {
							if(index == suggestion.data){ key=value; }
					});
					$.each(source.subDegree, function (index, value) {
							if(index == suggestion.data){ $('#sub-degree-category-en').val(value); }
					});
					$.post("modules/numrows.php", {subID: key, is_ajax: 1}, function(rs){
						var _send = {subID: key };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-en').html('<input id="subname-category-en" name="category-en[]" type="text" style="width: 160px;" class="not"/>');
									//add value
									$('#subname-category-en').val(response['subName']);
									$("#sub-tranfer-category-en").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-en").val(response['subDegree_tranfer']);
									$("#subname-hidden-en").val(key);
									//hint
									$("#subname-category-en").attr("title", response['subName']);
									$("#sub-tranfer-category-en").attr("title", response['subID_tranfer']+" "+response['subName_tranfer']);
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
									$('#change_sub-en').html('<select id="subname-category-en" name="category-en[]" style="width:160px;padding:4px;border:none;"></select>');
									//add value
									$.each(response.Subname, function(index, value){
										$("#subname-category-en").append($('<option>', {
											value: value,
											text : value 
										}));
									});
									var x;
									$.each(response.Tranfer, function(i, val){
										x = val.split("/");
									});

									$("#sub-tranfer-category-en").val(x[0]+" "+response.NameTran['0']);
									$("#sub-degree-tranfer-category-en").val(x[1]);
									$("#subname-hidden-en").val(key);
									//hint
									$("#sub-tranfer-category-en").attr("title", x[0]+" "+response.NameTran['0']);
								}
							});
						}
					});
				}
			});
			/*2*/	$('#subid-category-th').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					var key;
					$.each(source.subID, function (index, value) {
							if(index == suggestion.data){ key=value; }
					});
					$.each(source.subDegree, function (index, value) {
							if(index == suggestion.data){ $('#sub-degree-category-th').val(value); }
					});
					$.post("modules/numrows.php", {subID: key, is_ajax: 1}, function(rs){
						var _send = {subID: key };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-th').html('<input id="subname-category-th" name="category-th[]" type="text" style="width: 160px;" class="not"/>');
									//add value
									$('#subname-category-th').val(response['subName']);
									$("#sub-tranfer-category-th").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-th").val(response['subDegree_tranfer']);
									$("#subname-hidden-th").val(key);
									//hint
									$("#subname-category-th").attr("title", response['subName']);
									$("#sub-tranfer-category-th").attr("title", response['subID_tranfer']+" "+response['subName_tranfer']);
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
									$('#change_sub-th').html('<select id="subname-category-th" name="category-th[]" style="width:160px;padding:4px;border:none;"></select>');
									//add value
									$.each(response.Subname, function(index, value){
										$("#subname-category-th").append($('<option>', {
											value: value,
											text : value 
										}));
									});
									var x;
									$.each(response.Tranfer, function(i, val){
										x = val.split("/");
									});

									$("#sub-tranfer-category-th").val(x[0]+" "+response.NameTran['0']);
									$("#sub-degree-tranfer-category-th").val(x[1]);
									$("#subname-hidden-th").val(key);
									//hint
									$("#sub-tranfer-category-th").attr("title", x[0]+" "+response.NameTran['0']);
								}
							});
						}
					});
				}
			});
		/*3*/	$('#subid-category-hu').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					var key;
					$.each(source.subID, function (index, value) {
							if(index == suggestion.data){ key=value; }
					});
					$.each(source.subDegree, function (index, value) {
							if(index == suggestion.data){ $('#sub-degree-category-hu').val(value); }
					});
					$.post("modules/numrows.php", {subID: key, is_ajax: 1}, function(rs){
						var _send = {subID: key };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-hu').html('<input id="subname-category-hu" name="category-hu[]" type="text" style="width: 160px;" class="not"/>');
									//add value
									$('#subname-category-hu').val(response['subName']);
									$("#sub-tranfer-category-hu").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-hu").val(response['subDegree_tranfer']);
									$("#subname-hidden-hu").val(key);
									//hint
									$("#subname-category-hu").attr("title", response['subName']);
									$("#sub-tranfer-category-hu").attr("title", response['subID_tranfer']+" "+response['subName_tranfer']);
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
									$('#change_sub-hu').html('<select id="subname-category-hu" name="category-hu[]" style="width:160px;padding:4px;border:none;"></select>');
									//add value
									$.each(response.Subname, function(index, value){
										$("#subname-category-hu").append($('<option>', {
											value: value,
											text : value 
										}));
									});
									var x;
									$.each(response.Tranfer, function(i, val){
										x = val.split("/");
									});

									$("#sub-tranfer-category-hu").val(x[0]+" "+response.NameTran['0']);
									$("#sub-degree-tranfer-category-hu").val(x[1]);
									$("#subname-hidden-hu").val(key);
									//hint
									$("#sub-tranfer-category-hu").attr("title", x[0]+" "+response.NameTran['0']);
								}
							});
						}
					});
				}
			});
		/*4*/		$('#subid-category-sc').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					var key;
					$.each(source.subID, function (index, value) {
							if(index == suggestion.data){ key=value; }
					});
					$.each(source.subDegree, function (index, value) {
							if(index == suggestion.data){ $('#sub-degree-category-sc').val(value); }
					});
					$.post("modules/numrows.php", {subID: key, is_ajax: 1}, function(rs){
						var _send = {subID: key };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-sc').html('<input id="subname-category-sc" name="category-sc[]" type="text" style="width: 160px;" class="not"/>');
									//add value
									$('#subname-category-sc').val(response['subName']);
									$("#sub-tranfer-category-sc").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-sc").val(response['subDegree_tranfer']);
									$("#subname-hidden-sc").val(key);
									//hint
									$("#subname-category-sc").attr("title", response['subName']);
									$("#sub-tranfer-category-sc").attr("title", response['subID_tranfer']+" "+response['subName_tranfer']);
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
									$('#change_sub-sc').html('<select id="subname-category-sc" name="category-sc[]" style="width:160px;padding:4px;border:none;"></select>');
									//add value
									$.each(response.Subname, function(index, value){
										$("#subname-category-sc").append($('<option>', {
											value: value,
											text : value 
										}));
									});
									var x;
									$.each(response.Tranfer, function(i, val){
										x = val.split("/");
									});

									$("#sub-tranfer-category-sc").val(x[0]+" "+response.NameTran['0']);
									$("#sub-degree-tranfer-category-sc").val(x[1]);
									$("#subname-hidden-sc").val(key);
									//hint
									$("#sub-tranfer-category-sc").attr("title", x[0]+" "+response.NameTran['0']);
								}
							});
						}
					});
				}
			});
			/*5*/		$('#subid-category-hea').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					var key;
					$.each(source.subID, function (index, value) {
							if(index == suggestion.data){ key=value; }
					});
					$.each(source.subDegree, function (index, value) {
							if(index == suggestion.data){ $('#sub-degree-category-hea').val(value); }
					});
					$.post("modules/numrows.php", {subID: key, is_ajax: 1}, function(rs){
						var _send = {subID: key };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-hea').html('<input id="subname-category-hea" name="category-hea[]" type="text" style="width: 160px;" class="not"/>');
									//add value
									$('#subname-category-hea').val(response['subName']);
									$("#sub-tranfer-category-hea").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-hea").val(response['subDegree_tranfer']);
									$("#subname-hidden-hea").val(key);
									//hint
									$("#subname-category-hea").attr("title", response['subName']);
									$("#sub-tranfer-category-hea").attr("title", response['subID_tranfer']+" "+response['subName_tranfer']);
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
									$('#change_sub-hea').html('<select id="subname-category-hea" name="category-hea[]" style="width:160px;padding:4px;border:none;"></select>');
									//add value
									$.each(response.Subname, function(index, value){
										$("#subname-category-hea").append($('<option>', {
											value: value,
											text : value 
										}));
									});
									var x;
									$.each(response.Tranfer, function(i, val){
										x = val.split("/");
									});

									$("#sub-tranfer-category-hea").val(x[0]+" "+response.NameTran['0']);
									$("#sub-degree-tranfer-category-hea").val(x[1]);
									$("#subname-hidden-hea").val(key);
									//hint
									$("#sub-tranfer-category-hea").attr("title", x[0]+" "+response.NameTran['0']);
								}
							});
						}
					});
				}
			});
  /*6*/		$('#subid-category-in').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					var key;
					$.each(source.subID, function (index, value) {
							if(index == suggestion.data){ key=value; }
					});
					$.each(source.subDegree, function (index, value) {
							if(index == suggestion.data){ $('#sub-degree-category-in').val(value); }
					});
					$.post("modules/numrows.php", {subID: key, is_ajax: 1}, function(rs){
						var _send = {subID: key };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-in').html('<input id="subname-category-in" name="category-in[]" type="text" style="width: 160px;" class="not"/>');
									//add value
									$('#subname-category-in').val(response['subName']);
									$("#sub-tranfer-category-in").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-in").val(response['subDegree_tranfer']);
									$("#subname-hidden-in").val(key);
									//hint
									$("#subname-category-in").attr("title", response['subName']);
									$("#sub-tranfer-category-in").attr("title", response['subID_tranfer']+" "+response['subName_tranfer']);
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
									$('#change_sub-in').html('<select id="subname-category-in" name="category-in[]" style="width:160px;padding:4px;border:none;"></select>');
									//add value
									$.each(response.Subname, function(index, value){
										$("#subname-category-in").append($('<option>', {
											value: value,
											text : value 
										}));
									});
									var x;
									$.each(response.Tranfer, function(i, val){
										x = val.split("/");
									});

									$("#sub-tranfer-category-in").val(x[0]+" "+response.NameTran['0']);
									$("#sub-degree-tranfer-category-in").val(x[1]);
									$("#subname-hidden-in").val(key);
									//hint
									$("#sub-tranfer-category-in").attr("title", x[0]+" "+response.NameTran['0']);
								}
							});
						}
					});
				}
			});
   /*7*/	$('#subid-category-pro').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					var key;
					$.each(source.subID, function (index, value) {
							if(index == suggestion.data){ key=value; }
					});
					$.each(source.subDegree, function (index, value) {
							if(index == suggestion.data){ $('#sub-degree-category-pro').val(value); }
					});
					$.post("modules/numrows.php", {subID: key, is_ajax: 1}, function(rs){
						var _send = {subID: key };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-pro').html('<input id="subname-category-pro" name="category-pro[]" type="text" style="width: 160px;" class="not"/>');
									//add value
									$('#subname-category-pro').val(response['subName']);
									$("#sub-tranfer-category-pro").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-pro").val(response['subDegree_tranfer']);
									$("#subname-hidden-pro").val(key);
									$("#subid-hidden-pro").val($('#subname-category-pro').val());
									//hint
									$("#subname-category-pro").attr("title", response['subName']);
									$("#sub-tranfer-category-pro").attr("title", response['subID_tranfer']+" "+response['subName_tranfer']);
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
									$('#change_sub-pro').html('<select id="subname-category-pro" name="category-pro[]" style="width:160px;padding:4px;border:none;"></select>');
									//add value
									$.each(response.Subname, function(index, value){
										$("#subname-category-pro").append($('<option>', {
											value: value,
											text : value 
										}));
									});
									var x;
									$.each(response.Tranfer, function(i, val){
										x = val.split("/");
									});

									$("#sub-tranfer-category-pro").val(x[0]+" "+response.NameTran['0']);
									$("#sub-degree-tranfer-category-pro").val(x[1]);
									$("#subname-hidden-pro").val(key);
									//hint
									$("#sub-tranfer-category-pro").attr("title", x[0]+" "+response.NameTran['0']);
								}
							});
						}
					});
				}
			});
			/*8*/	$('#subid-category-el-first').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					var key;
					$.each(source.subID, function (index, value) {
							if(index == suggestion.data){ key=value; }
					});
					$.each(source.subDegree, function (index, value) {
							if(index == suggestion.data){ $('#sub-degree-category-el-first').val(value); }
					});
					$.post("modules/numrows.php", {subID: key, is_ajax: 1}, function(rs){
						var _send = {subID: key };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-el-first').html('<input id="subname-category-el-first" name="category-el-first[]" type="text" style="width: 160px;" class="not"/>');
									//add value
									$('#subname-category-el-first').val(response['subName']);
									$("#sub-tranfer-category-el-first").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-el-first").val(response['subDegree_tranfer']);
									$("#subname-hidden-el-first").val(key);
									$("#subid-hidden-el-first").val($('#subname-category-pro').val());
									//hint
									$("#subname-category-el-first").attr("title", response['subName']);
									$("#sub-tranfer-category-el-first").attr("title", response['subID_tranfer']+" "+response['subName_tranfer']);
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
									$('#change_sub-el-first').html('<select id="subname-category-el-first" name="category-el-first[]" style="width:160px;padding:4px;border:none;"></select>');
									//add value
									$.each(response.Subname, function(index, value){
										$("#subname-category-el-first").append($('<option>', {
											value: value,
											text : value 
										}));
									});
									var x;
									$.each(response.Tranfer, function(i, val){
										x = val.split("/");
									});

									$("#sub-tranfer-category-el-first").val(x[0]+" "+response.NameTran['0']);
									$("#sub-degree-tranfer-category-el-first").val(x[1]);
									$("#subname-hidden-el-first").val(key);
									//hint
									$("#sub-tranfer-category-el-first").attr("title", x[0]+" "+response.NameTran['0']);
								}
							});
						}
					});
				}
			});
		/*9*/	$('#subid-category-el-second').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					var key;
					$.each(source.subID, function (index, value) {
							if(index == suggestion.data){ key=value; }
					});
					$.each(source.subDegree, function (index, value) {
							if(index == suggestion.data){ $('#sub-degree-category-el-second').val(value); }
					});
					$.post("modules/numrows.php", {subID: key, is_ajax: 1}, function(rs){
						var _send = {subID: key };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-el-second').html('<input id="subname-category-el-second" name="category-el-second[]" type="text" style="width: 160px;" class="not"/>');
									//add value
									$('#subname-category-el-second').val(response['subName']);
									$("#sub-tranfer-category-el-second").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-el-second").val(response['subDegree_tranfer']);
									$("#subname-hidden-el-second").val(key);
									$("#subid-hidden-el-second").val($('#subname-category-pro').val());
									//hint
									$("#subname-category-el-second").attr("title", response['subName']);
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
									$('#change_sub-el-second').html('<select id="subname-category-el-second" name="category-el-second[]" style="width:160px;padding:4px;border:none;"></select>');
									//add value
									$.each(response.Subname, function(index, value){
										$("#subname-category-el-second").append($('<option>', {
											value: value,
											text : value 
										}));
									});
									var x;
									$.each(response.Tranfer, function(i, val){
										x = val.split("/");
									});

									$("#sub-tranfer-category-el-second").val(x[0]+" "+response.NameTran['0']);
									$("#sub-degree-tranfer-category-el-second").val(x[1]);
									$("#subname-hidden-el-second").val(key);
									//hint
									$("#sub-tranfer-category-el-second").attr("title", x[0]+" "+response.NameTran['0']);
								}
							});
						}
					});
				}
			});
		/*10*/	$('#subid-category-el-third').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					var key;
					$.each(source.subID, function (index, value) {
							if(index == suggestion.data){ key=value; }
					});
					$.each(source.subDegree, function (index, value) {
							if(index == suggestion.data){ $('#sub-degree-category-el-third').val(value); }
					});
					$.post("modules/numrows.php", {subID: key, is_ajax: 1}, function(rs){
						var _send = {subID: key };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-el-third').html('<input id="subname-category-el-third" name="category-el-third[]" type="text" style="width: 160px;" class="not"/>');
									//add value
									$('#subname-category-el-third').val(response['subName']);
									$("#sub-tranfer-category-el-third").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-el-third").val(response['subDegree_tranfer']);
									$("#subname-hidden-el-third").val(key);
									$("#subid-hidden-el-third").val($('#subname-category-el-third').val());
									//hint
									$("#subname-category-el-third").attr("title", response['subName']);
									$("#sub-tranfer-category-el-third").attr("title", response['subID_tranfer']+" "+response['subName_tranfer']);
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
									$('#change_sub-el-third').html('<select id="subname-category-el-third" name="category-el-third[]" style="width:160px;padding:4px;border:none;"></select>');
									//add value
									$.each(response.Subname, function(index, value){
										$("#subname-category-el-third").append($('<option>', {
											value: value,
											text : value 
										}));
									});
									var x;
									$.each(response.Tranfer, function(i, val){
										x = val.split("/");
									});

									$("#sub-tranfer-category-el-third").val(x[0]+" "+response.NameTran['0']);
									$("#sub-degree-tranfer-category-el-third").val(x[1]);
									$("#subname-hidden-el-third").val(key);
									//hint
									$("#sub-tranfer-category-el-third").attr("title", x[0]+" "+response.NameTran['0']);
								}
							});
						}
					});
				}
			});
			/*11*/	$('#subid-category-el-four').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					var key;
					$.each(source.subID, function (index, value) {
							if(index == suggestion.data){ key=value; }
					});
					$.each(source.subDegree, function (index, value) {
							if(index == suggestion.data){ $('#sub-degree-category-el-four').val(value); }
					});
					$.post("modules/numrows.php", {subID: key, is_ajax: 1}, function(rs){
						var _send = {subID: key };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-el-four').html('<input id="subname-category-el-four" name="category-el-four[]" type="text" style="width: 160px;" class="not"/>');
									//add value
									$('#subname-category-el-four').val(response['subName']);
									$("#sub-tranfer-category-el-four").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-el-four").val(response['subDegree_tranfer']);
									$("#subname-hidden-el-four").val(key);
									$("#subid-hidden-el-four").val($('#subname-category-el-third').val());
									//hint
									$("#subname-category-el-four").attr("title", response['subName']);
									$("#sub-tranfer-category-el-four").attr("title", response['subID_tranfer']+" "+response['subName_tranfer']);
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
									$('#change_sub-el-four').html('<select id="subname-category-el-four" name="category-el-four[]" style="width:160px;padding:4px;border:none;"></select>');
									//add value
									$.each(response.Subname, function(index, value){
										$("#subname-category-el-four").append($('<option>', {
											value: value,
											text : value 
										}));
									});
									var x;
									$.each(response.Tranfer, function(i, val){
										x = val.split("/");
									});

									$("#sub-tranfer-category-el-four").val(x[0]+" "+response.NameTran['0']);
									$("#sub-degree-tranfer-category-el-four").val(x[1]);
									$("#subname-hidden-el-four").val(key);
									//hint
									$("#sub-tranfer-category-el-four").attr("title", x[0]+" "+response.NameTran['0']);
								}
							});
						}
					});
				}
			});
		/*12*/	$('#subid-category-el-five').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					var key;
					$.each(source.subID, function (index, value) {
							if(index == suggestion.data){ key=value; }
					});
					$.each(source.subDegree, function (index, value) {
							if(index == suggestion.data){ $('#sub-degree-category-el-five').val(value); }
					});
					$.post("modules/numrows.php", {subID: key, is_ajax: 1}, function(rs){
						var _send = {subID: key };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-el-five').html('<input id="subname-category-el-five" name="category-el-five[]" type="text" style="width: 160px;" class="not"/>');
									//add value
									$('#subname-category-el-five').val(response['subName']);
									$("#sub-tranfer-category-el-five").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-el-five").val(response['subDegree_tranfer']);
									$("#subname-hidden-el-five").val(key);
									$("#subid-hidden-el-five").val($('#subname-category-el-third').val());
									//hint
									$("#subname-category-el-five").attr("title", response['subName']);
									$("#sub-tranfer-category-el-five").attr("title", response['subID_tranfer']+" "+response['subName_tranfer']);
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
									$('#change_sub-el-five').html('<select id="subname-category-el-five" name="category-el-five[]" style="width:160px;padding:4px;border:none;"></select>');
									//add value
									$.each(response.Subname, function(index, value){
										$("#subname-category-el-five").append($('<option>', {
											value: value,
											text : value 
										}));
									});
									var x;
									$.each(response.Tranfer, function(i, val){
										x = val.split("/");
									});

									$("#sub-tranfer-category-el-five").val(x[0]+" "+response.NameTran['0']);
									$("#sub-degree-tranfer-category-el-five").val(x[1]);
									$("#subname-hidden-el-five").val(key);
									//hint
									$("#sub-tranfer-category-el-five").attr("title", x[0]+" "+response.NameTran['0']);
								}
							});
						}
					});
				}
			});
	/*13*/	$('#subid-category-vo-first').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					var key;
					$.each(source.subID, function (index, value) {
							if(index == suggestion.data){ key=value; }
					});
					$.each(source.subDegree, function (index, value) {
							if(index == suggestion.data){ $('#sub-degree-category-vo-first').val(value); }
					});
					$.post("modules/numrows.php", {subID: key, is_ajax: 1}, function(rs){
						var _send = {subID: key };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-vo-first').html('<input id="subname-category-vo-first" name="category-vo-first[]" type="text" style="width: 160px;" class="not"/>');
									//add value
									$('#subname-category-vo-first').val(response['subName']);
									$("#sub-tranfer-category-vo-first").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-vo-first").val(response['subDegree_tranfer']);
									$("#subname-hidden-vo-first").val(key);
									$("#subid-hidden-vo-first").val($('#subname-category-el-third').val());
									//hint
									$("#subname-category-vo-first").attr("title", response['subName']);
									$("#sub-tranfer-category-vo-first").attr("title", response['subID_tranfer']+" "+response['subName_tranfer']);
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
									$('#change_sub-vo-first').html('<select id="subname-category-vo-first" name="category-vo-first[]" style="width:160px;padding:4px;border:none;"></select>');
									//add value
									$.each(response.Subname, function(index, value){
										$("#subname-category-vo-first").append($('<option>', {
											value: value,
											text : value 
										}));
									});
									var x;
									$.each(response.Tranfer, function(i, val){
										x = val.split("/");
									});

									$("#sub-tranfer-category-vo-first").val(x[0]+" "+response.NameTran['0']);
									$("#sub-degree-tranfer-category-vo-first").val(x[1]);
									$("#subname-hidden-vo-first").val(key);
									//hint
									$("#sub-tranfer-category-vo-first").attr("title", x[0]+" "+response.NameTran['0']);
								}
							});
						}
					});
				}
			});
		/*14*/	$('#subid-category-vo-second').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					var key;
					$.each(source.subID, function (index, value) {
							if(index == suggestion.data){ key=value; }
					});
					$.each(source.subDegree, function (index, value) {
							if(index == suggestion.data){ $('#sub-degree-category-vo-second').val(value); }
					});
					$.post("modules/numrows.php", {subID: key, is_ajax: 1}, function(rs){
						var _send = {subID: key };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-vo-second').html('<input id="subname-category-vo-second" name="category-vo-second[]" type="text" style="width: 160px;" />');
									//add value
									$('#subname-category-vo-second').val(response['subName']);
									$("#sub-tranfer-category-vo-second").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-vo-second").val(response['subDegree_tranfer']);
									$("#subname-hidden-vo-second").val(key);
									$("#subid-hidden-vo-second").val($('#subname-category-el-third').val());
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
									$('#change_sub-vo-second').html('<select id="subname-category-vo-second" name="category-vo-second[]" style="width:160px;padding:4px;border:none;"></select>');
									//add value
									$.each(response.Subname, function(index, value){
										$("#subname-category-vo-second").append($('<option>', {
											value: value,
											text : value 
										}));
									});
									var x;
									$.each(response.Tranfer, function(i, val){
										x = val.split("/");
									});

									$("#sub-tranfer-category-vo-second").val(x[0]+" "+response.NameTran['0']);
									$("#sub-degree-tranfer-category-vo-second").val(x[1]);
									$("#subname-hidden-vo-second").val(key);
									//hint
									$("#sub-tranfer-category-vo-second").attr("title", x[0]+" "+response.NameTran['0']);
								}
							});
						}
					});
				}
			});
		/*15*/	$('#subid-category-vo-third').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					var key;
					$.each(source.subID, function (index, value) {
							if(index == suggestion.data){ key=value; }
					});
					$.each(source.subDegree, function (index, value) {
							if(index == suggestion.data){ $('#sub-degree-category-vo-third').val(value); }
					});
					$.post("modules/numrows.php", {subID: key, is_ajax: 1}, function(rs){
						var _send = {subID: key };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-vo-third').html('<input id="subname-category-vo-third" name="category-vo-third[]" type="text" style="width: 160px;" class="not"/>');
									//add value
									$('#subname-category-vo-third').val(response['subName']);
									$("#sub-tranfer-category-vo-third").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-vo-third").val(response['subDegree_tranfer']);
									$("#subname-hidden-vo-third").val(key);
									$("#subid-hidden-vo-third").val($('#subname-category-el-third').val());
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
									$('#change_sub-vo-third').html('<select id="subname-category-vo-third" name="category-vo-third[]" style="width:160px;padding:4px;border:none;"></select>');
									//add value
									$.each(response.Subname, function(index, value){
										$("#subname-category-vo-third").append($('<option>', {
											value: value,
											text : value 
										}));
									});
									var x;
									$.each(response.Tranfer, function(i, val){
										x = val.split("/");
									});

									$("#sub-tranfer-category-vo-third").val(x[0]+" "+response.NameTran['0']);
									$("#sub-degree-tranfer-category-vo-third").val(x[1]);
									$("#subname-hidden-vo-third").val(key);
									//hint
									$("#sub-tranfer-category-vo-third").attr("title", x[0]+" "+response.NameTran['0']);
								}
							});
						}
					});
				}
			});
		/*16*/	$('#subid-category-vo-four').autocomplete({
				lookup: countriesArray,
				onSelect: function (suggestion) {
					var key;
					$.each(source.subID, function (index, value) {
							if(index == suggestion.data){ key=value; }
					});
					$.each(source.subDegree, function (index, value) {
							if(index == suggestion.data){ $('#sub-degree-category-vo-four').val(value); }
					});
					$.post("modules/numrows.php", {subID: key, is_ajax: 1}, function(rs){
						var _send = {subID: key };
						if(rs == 1){
							$.ajax({
								data: _send, 
								url: 'modules/tranfer.php',
								contentType: 'application/json; charset=utf-8',
								dataType: 'json',
								success: function(response){
									//create element
									$('#change_sub-vo-four').html('<input id="subname-category-vo-four" name="category-vo-four[]" type="text" style="width: 160px;" class="not"/>');
									//add value
									$('#subname-category-vo-four').val(response['subName']);
									$("#sub-tranfer-category-vo-four").val(response['subID_tranfer']+" "+response['subName_tranfer']);
									$("#sub-degree-tranfer-category-vo-four").val(response['subDegree_tranfer']);
									$("#subname-hidden-vo-four").val(key);
									$("#subid-hidden-vo-four").val($('#subname-category-el-third').val());
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
									$('#change_sub-vo-four').html('<select id="subname-category-vo-four" name="category-vo-four[]" style="width:160px;padding:4px;border:none;"></select>');
									//add value
									$.each(response.Subname, function(index, value){
										$("#subname-category-vo-four").append($('<option>', {
											value: value,
											text : value 
										}));
									});
									var x;
									$.each(response.Tranfer, function(i, val){
										x = val.split("/");
									});

									$("#sub-tranfer-category-vo-four").val(x[0]+" "+response.NameTran['0']);
									$("#sub-degree-tranfer-category-vo-four").val(x[1]);
									$("#subname-hidden-vo-four").val(key);
									//hint
									$("#sub-tranfer-category-vo-four").attr("title", x[0]+" "+response.NameTran['0']);
								}
							});
						}
					});
				}
			});
		}
	});
	
	$("#sub-grade-category-en, #sub-grade-category-th, #sub-grade-category-hu, #sub-grade-category-sc, #sub-grade-category-hea, #sub-grade-category-in, #sub-grade-category-pro, #sub-grade-category-el-first, #sub-grade-category-el-second, #sub-grade-category-el-third, #sub-grade-category-el-four, #sub-grade-category-el-five, #sub-grade-category-vo-first, #sub-grade-category-vo-second, #sub-grade-category-vo-third, #sub-grade-category-vo-four").keydown(function(event) {
        // Allow: backspace, delete, tab, escape, and enter
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||  
             // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39) || event.shiftKey || (event.keyCode == 70 || event.keyCode == 83 || event.keyCode == 85 )) {
                 // let it happen, don't do anything
                 return true;
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.shiftKey || (event.keyCode < 49 || event.keyCode > 52) && (event.keyCode < 65 || event.keyCode > 68 )) {
                event.preventDefault(); 
            }
        }
    });
	
	$('#sub-grade-category-en, #sub-grade-category-th, #sub-grade-category-hu, #sub-grade-category-sc, #sub-grade-category-hea, #sub-grade-category-in, #sub-grade-category-pro, #sub-grade-category-el-first, #sub-grade-category-el-second, #sub-grade-category-el-third, #sub-grade-category-el-four, #sub-grade-category-el-five, #sub-grade-category-vo-first, #sub-grade-category-vo-second, #sub-grade-category-vo-third, #sub-grade-category-vo-four').unbind('keyup change input paste').bind('keyup change input paste',function(e){
		var $this = $(this);
		var val = $this.val();
		var valLength = val.length;
		var maxCount = $this.attr('maxlength');
		if(valLength>maxCount){
			$this.val($this.val().substring(0,maxCount));
		}
	});
	$('#sub-grade-category-en, #sub-grade-category-th, #sub-grade-category-hu, #sub-grade-category-sc, #sub-grade-category-hea, #sub-grade-category-in, #sub-grade-category-pro, #sub-grade-category-el-first, #sub-grade-category-el-second, #sub-grade-category-el-third, #sub-grade-category-el-four, #sub-grade-category-el-five, #sub-grade-category-vo-first, #sub-grade-category-vo-second, #sub-grade-category-vo-third, #sub-grade-category-vo-four').keyup(function(){
        $(this).val($(this).val().toUpperCase());
		var $txt = $(this).val();
		var refer = $(this).attr("id");
		if($txt == '1' || $txt == 'D' || $txt == 'F' || $txt == 'U'){
			csscody.error("เกรดห้ามต่ำกว่า 2 หรือ C นะค่ะ!");
			$(this).parent().parent().css("background","rgba(255,0,0,.10)");
			return false;
		}else if($txt == ' '){
			var receiv = csscody.confirm("ไม่ให้ช่องเติมเกรดมีค่าว่างนะค่ะ! ไม่ต้องแสดงฉันอีกกด ยกเลิก");
			if(!receiv) return true;
		}else {
			$(this).parent().parent().css("background","#fff");
			$("."+refer).val($(this).val());
		}
	});
	
});