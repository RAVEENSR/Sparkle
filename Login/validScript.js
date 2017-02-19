function isValid()
{
	var name = document.getElementById("fName").value;
	var address = document.getElementById("address").value;
	var password1=document.getElementById("password1").value;
	var password2=document.getElementById("password2").value;
	var email=document.getElementById("email").value;
				
	if (/^[A-Za-z\s]+$/.test(name) == true) {//returns true if matched, vaidates for a-z and A-Z and white space			
		if(password1==password2){
			if(/^[a-zA-Z0-9\s:,'/]*$/.test(address)==true){
				if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)==true){
					return true;
				}else{
					alert("Please enter a valid email");
					return false;
				}
			} else {
				alert("Please enter a valid address");
			    return false;
			}	
		}else{
			alert("Passwords Don't Match");
			return false;
		}		
	} else {
		alert("Please enter a valid name");
		return false;
	} 			   
}	

function checkUser()
{	
	var username = document.getElementById("uName").value;
					
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			if(xmlhttp.responseText=="found"){
				document.getElementById("usrMsg").innerHTML="User name already taken";
			}else if(xmlhttp.responseText=="characterInvalid"){
				document.getElementById("usrMsg").innerHTML="Invalid characters detected";
			}else{
				document.getElementById("usrMsg").innerHTML="User name is valid";
			}
		}
	}
	xmlhttp.open("GET","usernameProcess.php?uname="+username,true);
	xmlhttp.send();
}

