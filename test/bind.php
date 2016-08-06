<html>
<head>
<title>ThaiCreate.Com jQuery Tutorials</title>
<style>
	p { background:yellow; font-weight:bold; cursor:pointer; 
	padding:5px; }
	p.over { background: #ccc; }
	span { color:red; }
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
		$(document).ready(function(){

			$("p").bind("click", function(event){
				var str = "( " + event.pageX + ", " + event.pageY + " )";
				$("span").text("Click happened! " + str);
			});

			$("p").bind("dblclick", function(){
				$("span").text("Double-click happened in " + this.nodeName);
			});

			$("p").bind("mouseenter mouseleave", function(event){
				$(this).toggleClass("over");
			});

		});
</script>
</head>
<body>

	<p>Click or double click here.</p>
	<span></span>

</body>
</html>