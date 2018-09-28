<html>
<head>
<script type="text/javascript">
function loadDoc(){
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			document.getElementById("demo").innerHTML=this.responseText;
		}
	};
	xmlhttp.open("GET","ajax_info.txt",true);
	xmlhttp.send();
}
</script>
</head>
<body>
<div id="demo">
  <h2>Let AJAX change this text</h2>
  <button type="button" onclick="loadDoc()">Change Content</button>
</div>
</body>
</html> 