<!DOCTYPE html>
<head> <title> Poll </title>
<script>
function poll_validation(){
var value;
if ( document.getElementById("1").checked){
			value = document.getElementById("1").value;
			//alert("1 clicked");
			//document.getElementById("answer").innerHTML = "You selected one";
	}else if ( document.getElementById("2").checked){ 
	value = document.getElementById("2").value;
			//document.getElementById("answer").innerHTML = "You selected two";
	}else if(document.getElementById("3").checked){
	value = document.getElementById("3").value;
		//document.getElementById("answer").innerHTML = "You Selected three";
	}else{
	alert("Please select an option to Continue");
	}
	//document.getElementById("answer").innerHTML = value;
	
	//<?php
	//include 'connect.php';
	//echo "Im here";
	//?>
	//var radiovalue= value;
	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() { 
	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	document.getElementById("poll").innerHTML=xmlhttp.responseText;
	} 
	} 
	xmlhttp.open("GET","poll_results.php?vote="+value,true);
	xmlhttp.send(); 
	}

	

</script>
</head>
<body>
<div style="font: 15px tahoma; padding: 10px;width: 600px;"> 
<div id ="poll"> 
<div style="padding:0 0 10px 0;">
Is Day/Night Test Matches the future of Test Cricket? </div> 
<div id="pollDisplay"> 
<form> 
<div style="padding:0 0 5px 0;"> 
<input type="radio" name="poll_option" id="1" class="poll_sys" value="1"> 
<label>Yes</label> 
</div> 
<div style="padding:0 0 5px 0;">
 <input type="radio" name="poll_option" id="2" class="poll_sys" value="2">
 <label>No</label>
 </div>
 <div style="padding:0 0 5px 0;"> 
 <input type="radio" name="poll_option" id="3" class="poll_sys" value="3"> 
 <label>Day/Night & Day Test Matches</label>
 </div> 
 <input type="button" onclick="poll_validation();" class="vote" name="poll" value = "Vote"> 
 </form>
 </div> 
 </div> 
 </div> 
 <p id = "answer"> </p>
 </body>
 </html>