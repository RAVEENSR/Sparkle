function checkForm()
{
	var username = document.getElementById("user_name").value;
	var password = document.getElementById("password").value;
					
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else{// code for IE6, IE5
		mlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{			
			if(xmlhttp.responseText=="incorrect"){
				document.getElementById("errorMsg").innerHTML="Invalid Username or Password!";
			}else{
				document.location = "../Home.php"; 
			}
		}
	}
	xmlhttp.open("GET","loginProcess.php?uname="+username+"&pw="+password,false);
	xmlhttp.send();
}